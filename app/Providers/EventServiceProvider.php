<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        \App\Events\TaskCreated::class => [
            \App\Listeners\SendTaskCreatedNotification::class,
        ],
        \App\Events\TaskUpdated::class => [
            \App\Listeners\SendTaskUpdatedNotification::class,
        ],
        \App\Events\TaskDeleted::class => [
            \App\Listeners\SendTaskDeletedNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
