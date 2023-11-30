<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Contracts\Support\Htmlable;
use Config;

class CompleteProfileMessage extends Notification
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


        //calculamos porcentaje de perfil completo
        $profilePorcent = 0;
        if($this->data->user->image != null){
            $profilePorcent+=10;
        }
        if($this->data->user->signature != null){
            $profilePorcent+=20;
        }
        if($this->data->user->link != null){
            $profilePorcent+=10;
        }
        if($this->data->user->about != null){
            $profilePorcent+=10;
        }
        if($this->data->user->rubro != null){
            $profilePorcent+=10;
        }
        if($this->data->user->history != null){
            $profilePorcent+=10;
        }
        if($this->data->user->language1 != null){
            $profilePorcent+=10;
        }
        if($this->data->user->image_work1 != null){
            $profilePorcent+=20;
        }
        Config::set('app.profilePorcent',$profilePorcent);
        /**/

        //guardamos imagen de usuario en app.imageProfile para usar
        $imgUser = $this->data->user->image;
        if($imgUser == null){
            $imgUser = 'no-user.png';
        }
        Config::set('app.imageProfile',$imgUser);
        //end image


        return (new MailMessage)
                    ->subject('Completa tu perfil freelancer')
                    ->line('Estamos mejorando nuestra comunidad y haciendo acuerdos con empresas interesadas en contratar servicios freelancers de diferentes sectores, y es por eso que te queremos dar la oportunidad de aumentar tu visibilidad al completar tu perfil para que tengas mas opciones de ser tenido en cuenta para participar de los proyectos publicados en la plataforma, ya que estaremos enviando a todas las empresas los perfiles freelance mejor valorados.')
                    ->action('Ver mi perfil', url('/freelancer/'.$this->data->user->code));
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