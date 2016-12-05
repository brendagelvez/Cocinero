<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utensilio_Paso extends Model
{
    protected $table = 'utensilio_pasos';
    protected $fillable = ['id_utensilio','id_paso'];
    protected $primaryKey = ['id_utensilio', 'id_paso'];

    public function utensilio_Paso_Utensilio(){
    	return $this->hasMany('App\Models\Utensilio');
    }

    public function utensilio_Paso_Paso(){
    	return $this->hasMany('App\Models\Paso');
    }
}
