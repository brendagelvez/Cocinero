<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $table = 'recetas';
    protected $fillable = ['fuente','ubicacion'];
    protected $primaryKey = ['id_receta'];

    public function receta_Paso_Receta(){
    	return $this->belongsTo('App\Models\Paso_Receta');
    }
}
