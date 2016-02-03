<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    protected $table = "subcategoria";

    protected $fillable = ["nombre"];

    public $timestamps = false;

     public function categoria(){
    	return $this->hasOne('App\Categoria', 'id', 'categoria_id');
    }
}
