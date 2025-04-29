<?php

namespace App\Listeners;

use App\Events\TaskUpdated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SendTaskUpdatedNotification
{
    /**
     * Handle the event.
     */
    public function handle(TaskUpdated $event)
    {
        Log::info('Tarefa atualizada: ' . $event->task->title, [
            'old_data' => $event->oldData,
            'new_data' => $event->task->toArray()
        ]);
    }
}
