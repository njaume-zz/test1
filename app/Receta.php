<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    //id, descripcion, precio, costo,id_tipo_receta
    protected $table = 'recetas';
    protected $PrimaryKey = 'id';
	public $timestamps = true;
	protected $dateFormat = 'U';
	//Necesario para poder guardar datos, con el update x ej.
    protected $fillable = ['descripcion_r', 'precio','costo','id_tipo_receta'];
}
