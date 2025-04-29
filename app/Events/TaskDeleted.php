<?php

namespace App\Events;

use App\Models\Tasks;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TaskDeleted
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $task;

    public function __construct(Tasks $task)
    {
        $this->task = $task;
    }
}
