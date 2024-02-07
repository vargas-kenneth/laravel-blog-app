<?php

namespace App\Listeners;

use App\Events\PostDeletedEvent;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use App\Notifications\SendPostDeletedNotification;

class SendPostDeleted implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PostDeletedEvent $event): void
    {
        $user = $event->post->user;
        Notification::send($user, new SendPostDeletedNotification($event->post));
    }
}
