<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TaskService;

class TaskController extends Controller
{
    protected $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    public function index()
    {
        return response()->json($this->taskService->getAll());
    }

    public function store(Request $request)
    {
        $task = $this->taskService->create($request->all());
        return response()->json($task, 201);
    }

    public function show($id)
    {
        $task = $this->taskService->find($id);
        if (!$task) {
            return response()->json(['message' => 'Tarefa não encontrada'], 404);
        }
        return response()->json($task);
    }

    public function update(Request $request, $id)
    {
        $task = $this->taskService->update($id, $request->all());
        if (!$task) {
            return response()->json(['message' => 'Tarefa não encontrada'], 404);
        }
        return response()->json($task);
    }

    public function destroy($id)
    {
        $deleted = $this->taskService->delete($id);
        if (!$deleted) {
            return response()->json(['message' => 'Tarefa não encontrada'], 404);
        }
        return response()->json(['message' => 'Tarefa removida com sucesso']);
    }

    public function next()
    {
        return response()->json($this->taskService->getNextTasks());
    }
}
