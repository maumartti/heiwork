<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'code','name', 'email','password','image', 'email_welcome_send', 'register_by', 'news','type', 'country', 'rubro', 'rubro2', 'rubro3', 'rubro4','about', 'history','language1','language1_level', 'language2','language2_level','language3','language3_level','language4','language4_level', 'language5','language5_level','image_work1','image_work2','image_work3','image_work4','image_work5','image_work6','image_work7','image_work8','image_work9','image_work10','image_work11','image_work12','expire_plan', 'active','signature','link'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
