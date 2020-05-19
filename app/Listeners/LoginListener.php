<?php

namespace App\Listeners;

use App\Mail\NewAccess;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class LoginListener
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
     * @param  object  $event
     * @return void
     */
    public function handle(Login $event)
    {
        info('Logou');
        info($event->user->name);
        info($event->user->email);

        $quando = now()->addMinutes(5);
        Mail::to($event->user)
            // ->send(new NewAccess($event->user));
            
            // usando redis deixando mais rapido o envio
            // ->queue(new NewAccess($event->user));

            ->later($quando, new NewAccess($event->user));
        }
}
