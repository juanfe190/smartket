<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = "productos";

    protected $guarded = ["id"];

    public $timestamps = false;

    public function categoria(){
    	return $this->hasOne('App\categoria');
    }

    public function subcategoria(){
    	return $this->hasOne('App\subcategoria');
    }
}
