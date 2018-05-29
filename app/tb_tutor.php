<?php

namespace ProyectoAppEducativa;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use ProyectoAppEducativa\Notifications\AdminResetPasswordNotification;

class tb_tutor extends Authenticatable
{
    use Notifiable;


    protected $guard = 'tutor';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellidop', 'apellidom','documento','direccion','celular','relacion','email','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new TutorResetPasswordNotification($token));
    }
}
