<?php

namespace ProyectoAppEducativa;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use ProyectoAppEducativa\Notifications\AdminResetPasswordNotification;

class tb_administrador extends Authenticatable
{
    use Notifiable;


    protected $guard = 'admin';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellidop', 'apellidom','documento','direccion','celular','tipo_adm','email','password'
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
        $this->notify(new AdminResetPasswordNotification($token));
    }
    public function scopeBusqueda($query, $nombre)
    {
        if($nombre !="")
        {
            $query ->where('nombre','like',"%".$nombre."%");
        }

    }
}
