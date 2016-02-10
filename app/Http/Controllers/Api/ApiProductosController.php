<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Productos;

class ApiProductosController extends Controller
{
    public function getProductos(){
    	$productos = Productos::all();
    	return response()->json($productos);
    }
}
