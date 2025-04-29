<?php

namespace App\Events;

use App\Models\Tasks;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TaskUpdated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $task;
    public $oldData;

    public function __construct(Tasks $task, array $oldData)
    {
        $this->task = $task;
        $this->oldData = $oldData;
    }
}
