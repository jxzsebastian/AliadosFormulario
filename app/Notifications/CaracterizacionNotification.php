<?php

namespace App\Notifications;

use App\Models\Emprendedor;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CaracterizacionNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(Emprendedor $emprendedor, $type)
    {
        $this->emprendedor = $emprendedor;
        $this->type = $type; // Asigna el tipo de notificación al crearla.

    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
            'type' => $this->type, // Agrega el tipo de notificación.
            'nombre_emprendedor' =>  $this->emprendedor->nombre_emprendedor,
            'estado' =>  $this->emprendedor->estado,
            'correo_emprendedor' =>  $this->emprendedor->correo_emprendedor,
            'programa_sena_ingreso' =>  $this->emprendedor->programa_sena_ingreso,
            'ciudad_municipio_emprendedor' =>  $this->emprendedor->ciudad_municipio_emprendedor,
            'created_at' => $this->emprendedor->created_at,
        ];
    }
}
