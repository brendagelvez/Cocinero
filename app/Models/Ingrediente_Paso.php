<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingrediente_Paso extends Model
{
    protected $table = 'ingrediente_pasos';
    protected $fillable = ['id_ingrediente','id_paso'];
    protected $primaryKey = ['id_ingrediente','id_paso'];

    public function ingrediente_Paso_Ingrediente(){
      return $this->hasMany('App\Models\Ingrediente');
    }

    public function ingrdiente_Paso_Paso(){
      return $this->hasMany('App\Models\Paso');
    }
}
