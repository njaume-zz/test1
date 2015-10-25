<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulos';
    protected $PrimaryKey = 'id';
	public $timestamps = true;
	protected $dateFormat = 'U';
	//Necesario para poder guardar datos, con el update x ej.
    protected $fillable = ['descripcion', 'stock','unidad_medida'];
}
