<?php

namespace App\Listeners;
use Illuminate\Support\Facades\Mail;
use App\Events\UserRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\WelcomeEmail;

class SendWelcomeMail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $user)
    {
        Mail::to($user->user)->send(new WelcomeEmail($user->user));
    }
}
