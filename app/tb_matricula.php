<?php

namespace ProyectoAppEducativa;

use Illuminate\Database\Eloquent\Model;

class tb_matricula extends Model
{    protected $table = "tb_matriculas";

    protected $fillable = [
        'salon', 'estudiantes',
    ];

    public function scopeBusqueda($query, $nombre)
    {
        if($nombre !="")
        {
            $query ->where('nombre','like',"%".$nombre."%");
        }

    }
}
