<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CaracterizacionEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $emprendedor;
    public $type; // Agrega una propiedad para el tipo de notificación.

    public function __construct($emprendedor, $type)
    {
        $this->emprendedor = $emprendedor;
        $this->type = $type; // Asigna el tipo de notificación al crear el evento.
    }


    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
