<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoReceta extends Model
{
    protected $table = 'tipos_recetas';
    protected $PrimaryKey = 'id';
	public $timestamps = false;
	protected $dateFormat = 'U';
	//Necesario para poder guardar datos, con el update x ej.
    protected $fillable = ['descripcion', 'tiempo_preparacion','cocina'];
}
