<?php

namespace App\Listeners;

use App\Models\User;
use App\Events\PostCreatedEvent;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use App\Notifications\SendPostCreatedNotification;
use App\Notifications\SendPostCreatedOtherUsersNotification;

class SendPostCreated implements ShouldQueue
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
    public function handle(PostCreatedEvent $event): void
    {
        $user = $event->post->user;
        Notification::send($user, new SendPostCreatedNotification($event->post));

        $users = User::where('id', '!=', $event->post->user->id)->get();
        Notification::send($users, new SendPostCreatedOtherUsersNotification($event->post));
    }
}
