<?php

namespace App\Listeners;

use App\Events\TaskCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SendTaskCreatedNotification
{
    /**
     * Handle the event.
     */
    public function handle(TaskCreated $event)
    {
        // Exemplo: logar criação de tarefa
        Log::info('Tarefa criada: ' . $event->task->title);
    }
}
