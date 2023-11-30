<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Contracts\Support\Htmlable;
use Config;

class NewMessageSend extends Notification
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
        //Config::set('app.typeMessage','NewMessageSend');//esto marca el tipo de mensaje para tratar diferente las lines con strong en la template
        Config::set('app.userName',$this->data->user->name);//pasamos parametros con config
        //$h = new HtmlString;
        $title ='" <strong>'.$this->data->title.'</strong> "';
        return (new MailMessage)
                    ->subject('Han respondido a tu propuesta!')
                    ->line('Un usuario a respondido a tu propuesta del proyecto:')
                    ->line('"'.$this->data->title.'"')
                    ->line('-')
                    ->line('Envido por: '.$this->data->userSend->name)
                    ->line($this->data->message)
                    ->line('-')
                    ->action('Ver mensaje completo', url('/messages'));
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