<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paso extends Model
{
    protected $table = 'pasos';
    protected $fillable = ['operacion','comentario'];
    protected $primaryKey = 'id_paso';

    public function paso_Utensilio_Paso(){
      return $this->belongsTo('App\Models\Utensilio_Paso');
    }

    public function paso_Ingrediente_Paso(){
      return $this->belongsTo('App\Models\Ingrediente_Paso');
    }

    public function paso_Receta_Paso(){
    	return $this->belongsTo('App\Models\Paso_Receta'):
    }
}
