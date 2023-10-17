<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\CaracterizacionNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Notification;

class CaracterizacionListener
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
    public function handle(object $event): void
    {
        User::where('programa_sena', $event->emprendedor->programa_sena_ingreso)
        ->each(function(User $user) use ($event){
            Notification::send($user, new CaracterizacionNotification($event->emprendedor, $event->type));
        });
    }
}
