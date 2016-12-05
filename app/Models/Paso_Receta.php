<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paso_Receta extends Model
{
    protected $table = 'paso_recetas';
    protected $fillable = ['id_paso','id_receta'];
    protected $primaryKey = ['id_paso','id_receta'];

    public function paso_Receta_Paso(){
    	return $this->hasMany('App\Models\Paso');
    }

    public function paso_Receta_Receta(){
    	retunr $this->hasMany('App\Models\Receta');
    }
}
