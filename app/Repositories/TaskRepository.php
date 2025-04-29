<?php

namespace App\Repositories;

use App\Models\Tasks;

class TaskRepository
{
    protected $model;

    public function __construct(Tasks $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function update($id, array $data)
    {
        $task = $this->model->find($id);
        if (!$task) {
            return null;
        }
        $task->update($data);
        return $task;
    }

    public function delete($id)
    {
        $task = $this->model->find($id);
        if (!$task) {
            return false;
        }
        $task->delete();
        return true;
    }

    public function nextTasks()
    {
        return $this->model->nextTasks();
    }
}
