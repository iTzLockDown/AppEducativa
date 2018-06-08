<?php

namespace ProyectoAppEducativa;

use Illuminate\Database\Eloquent\Model;

class tb_cursos extends Model
{
    protected $table = "tb_cursos";

    protected $fillable = [
        'nombre', 'grados', 'horas', 'descripcion',
    ];

    public function scopeBusqueda($query, $nombre)
    {
        if($nombre !="")
        {
            $query ->where('nombre','like',"%".$nombre."%");
        }

    }
}
