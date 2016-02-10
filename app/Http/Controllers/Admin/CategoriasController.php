<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Categoria;

class CategoriasController extends Controller
{   
    public function mostrar(){
        $categorias = Categoria::all();
        return view('admin.categoria_mostrar')->with('categorias', $categorias);
    }

    public function create(){
        return view('admin.categoria_crear');
    }
    public function store(Request $request){
    	$categoria = Categoria::create($request->all());
        return redirect()->route('categoria.mostrar', ['toast'=>'Categor&iacutea creada con &eacutexito']);
    }

    public function edit($id){
        $categoria = Categoria::find($id);
        return view('admin.categoria_actualizar', $categoria);
    }
    public function update($id, Request $request){
    	if($categoria = Categoria::find($id)){
    		$categoria->nombre=$request->nombre;
    		$categoria->save();
    	}else{
    		//SI NO EXISTE ?
    	}
    	

    	//QUE HACER DESPUES DE LA ACCION?
    }

    public function delete($id){
    	if($categoria = Categoria::find($id))
    		$categoria->delete();
    	
    	else{
    		return redirect()->route('categoria.mostrar', ['toast'=>'Acci&oacuten invalida']);
    	}
    	return redirect()->route('categoria.mostrar', ['toast'=>'Categor&iacutea eliminada']);
    }
}
