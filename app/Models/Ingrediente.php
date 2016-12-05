<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $table = 'ingredientes';
    protected $fillable = ['nombre','calorias'];
    protected $primaryKey = 'id_ingrediente';

    public function ingrediente_paso(){
      return $this->belongsTo('App\Models\Ingrediente_Paso');
    }
}
