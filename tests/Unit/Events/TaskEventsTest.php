<?php

namespace Tests\Unit\Events;

use Tests\TestCase;
use App\Models\Tasks;
use App\Events\TaskCreated;
use App\Events\TaskUpdated;
use App\Events\TaskDeleted;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TaskEventsTest extends TestCase
{
    use RefreshDatabase;

    public function test_task_created_event_is_dispatched()
    {
        Event::fake();

        $task = Tasks::factory()->create([
            'title' => 'Nova Tarefa',
            'description' => 'Descrição da tarefa',
            'status' => 'pending'
        ]);

        event(new TaskCreated($task));

        Event::assertDispatched(TaskCreated::class, function ($event) use ($task) {
            return $event->task->id === $task->id;
        });
    }

    public function test_task_updated_event_is_dispatched()
    {
        Event::fake();

        $task = Tasks::factory()->create();
        $oldData = $task->toArray();

        $task->update(['title' => 'Título Atualizado']);

        event(new TaskUpdated($task, $oldData));

        Event::assertDispatched(TaskUpdated::class, function ($event) use ($task, $oldData) {
            return $event->task->id === $task->id && $event->oldData === $oldData;
        });
    }

    public function test_task_deleted_event_is_dispatched()
    {
        Event::fake();

        $task = Tasks::factory()->create();

        event(new TaskDeleted($task));

        Event::assertDispatched(TaskDeleted::class, function ($event) use ($task) {
            return $event->task->id === $task->id;
        });
    }
}
