<?php

namespace App\Listeners;

use App\Events\TaskDeleted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SendTaskDeletedNotification
{
    /**
     * Handle the event.
     */
    public function handle(TaskDeleted $event)
    {
        Log::info('Tarefa removida: ' . $event->task->title, [
            'task_data' => $event->task->toArray()
        ]);
    }
}
