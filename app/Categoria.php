<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categoria";

    protected $fillable = ["nombre"];

    public $timestamps = false;

    public function subcategoria(){
    	return $this->hasMany('App\Subcategoria');
    }
}
