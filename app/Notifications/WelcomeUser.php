<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Config;

class WelcomeUser extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    public $data;

    public function __construct($data)
    {   
        $this->data = $data;
        //$this->subject = $data->subject;
        //dd($this->subject);
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {   
        Config::set('app.userName',$this->data->user->name);//pasamos parametros con config

        return (new MailMessage)
                    ->subject('Bienvenido a Heiwork!')
                    ->line('Bienvenido a Heiwork!')
                    ->line('Confirma tu cuenta para poder acceder a todos nuestro beneficios como usuario registrado')
                    ->action('Confirmar mi cuenta', url('/email/verify'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
