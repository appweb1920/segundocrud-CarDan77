<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piezas extends Model
{
    protected $table='piezas';
    protected $fillable=['id','Nombre', 'Descripcion', 'NumeroPiezas','Costo'];
}
