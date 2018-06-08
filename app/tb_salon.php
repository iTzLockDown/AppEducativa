<?php

namespace ProyectoAppEducativa;

use Illuminate\Database\Eloquent\Model;

class tb_salon extends Model
{
    protected $table = "tb_salons";

    protected $fillable = [
        'codigo', 'horario', 'horario1', 'horario2','dia', 'dia1', 'dia2', 'ambiente', 'curso', 'docente'
    ];

    public function scopeBusqueda($query, $nombre)
    {
        if($nombre !="")
        {
            $query ->where('nombre','like',"%".$nombre."%");
        }

    }
}
