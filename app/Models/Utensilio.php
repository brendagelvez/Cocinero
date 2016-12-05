<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utensilio extends Model
{
    protected $table = 'utensilios';
    protected $fillable = ['nombre'];
    protected $primaryKey = 'id_utensilio';

    private function utensilio_Paso_Utensilio(){
    	return $this->belongsTo('App\Models\Utensilio_Paso');
    }
}
