<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Config;

class Invoice extends Notification
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
                    ->subject('Confirmación de pago Heiwork!')
                    ->line('¡Gracias por tu pago!')
                    ->line('Su pago fue procesado exitosamente')
                    ->line('Pago #'.$this->data->code)
                    ->line('Plan: '.$this->data->plan)
                    ->line('Período: Mensual')
                    ->line('Estado: Pago')
                    ->line('------------')
                    ->line('')
                    ->line('Pago de: '.$this->data->user->name)
                    ->line($this->data->user->email)
                    ->line('')
                    ->line('Fecha de pago: '.date('d-m-Y'))
                    ->line('Fecha expira: '.$this->data->expire)
                    ->line('------------')
                    ->line('')
                    ->line('Sub - Total: '.$this->data->valor)
                    ->line('IVA (0%)')
                    ->line('Total: '.$this->data->valor)
                    ->line('------------')
                    ->line('')
                    ->line('Si tienes algún comentario o duda ponte en contacto con nosotros, por medio del formulario de contacto o mediante el chat de soporte ¡Gracias!.')
                    ->line('');
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
