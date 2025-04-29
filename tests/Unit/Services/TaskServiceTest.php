<?php

namespace Tests\Unit\Services;

use Tests\TestCase;
use App\Models\Tasks;
use App\Services\TaskService;
use App\Repositories\TaskRepository;
use App\Events\TaskCreated;
use App\Events\TaskUpdated;
use App\Events\TaskDeleted;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TaskServiceTest extends TestCase
{
    use RefreshDatabase;

    protected $taskService;
    protected $taskRepository;

    public function setUp(): void
    {
        parent::setUp();
        $this->taskRepository = new TaskRepository();
        $this->taskService = new TaskService($this->taskRepository);
    }

    public function test_create_task_dispatches_event()
    {
        Event::fake();

        $taskData = [
            'title' => 'Nova Tarefa',
            'description' => 'Descrição da tarefa',
            'status' => 'pending'
        ];

        $task = $this->taskService->create($taskData);

        $this->assertInstanceOf(Tasks::class, $task);
        $this->assertEquals($taskData['title'], $task->title);

        Event::assertDispatched(TaskCreated::class, function ($event) use ($task) {
            return $event->task->id === $task->id;
        });
    }

    public function test_update_task_dispatches_event()
    {
        Event::fake();

        $task = Tasks::factory()->create();
        $updateData = ['title' => 'Título Atualizado'];

        $updatedTask = $this->taskService->update($task->id, $updateData);

        $this->assertInstanceOf(Tasks::class, $updatedTask);
        $this->assertEquals($updateData['title'], $updatedTask->title);

        Event::assertDispatched(TaskUpdated::class, function ($event) use ($task, $updatedTask) {
            return $event->task->id === $updatedTask->id;
        });
    }

    public function test_delete_task_dispatches_event()
    {
        Event::fake();

        $task = Tasks::factory()->create();

        $result = $this->taskService->delete($task->id);

        $this->assertTrue($result);
        $this->assertSoftDeleted('tasks', ['id' => $task->id]);

        Event::assertDispatched(TaskDeleted::class, function ($event) use ($task) {
            return $event->task->id === $task->id;
        });
    }

    public function test_get_next_tasks()
    {
        $futureTask = Tasks::factory()->create([
            'due_date' => now()->addDays(1)
        ]);

        $pastTask = Tasks::factory()->create([
            'due_date' => now()->subDays(1)
        ]);

        $nextTasks = $this->taskService->getNextTasks();

        $this->assertTrue($nextTasks->contains($futureTask));
        $this->assertFalse($nextTasks->contains($pastTask));
    }
}
