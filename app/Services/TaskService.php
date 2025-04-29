<?php

namespace App\Services;

use App\Repositories\TaskRepository;
use App\Events\TaskCreated;
use App\Events\TaskUpdated;
use App\Events\TaskDeleted;

class TaskService
{
    protected $taskRepository;

    public function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function getAll()
    {
        return $this->taskRepository->all();
    }

    public function create(array $data)
    {
        $task = $this->taskRepository->create($data);
        event(new TaskCreated($task));
        return $task;
    }

    public function find($id)
    {
        return $this->taskRepository->find($id);
    }

    public function update($id, array $data)
    {
        $task = $this->taskRepository->find($id);
        if (!$task) {
            return null;
        }

        $oldData = $task->toArray();
        $updatedTask = $this->taskRepository->update($id, $data);

        if ($updatedTask) {
            event(new TaskUpdated($updatedTask, $oldData));
        }

        return $updatedTask;
    }

    public function delete($id)
    {
        $task = $this->taskRepository->find($id);
        if (!$task) {
            return false;
        }

        $deleted = $this->taskRepository->delete($id);

        if ($deleted) {
            event(new TaskDeleted($task));
        }

        return $deleted;
    }

    public function getNextTasks()
    {
        return $this->taskRepository->nextTasks();
    }
}
