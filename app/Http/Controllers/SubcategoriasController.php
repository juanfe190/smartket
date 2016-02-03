<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Subcategoria;

class SubcategoriasController extends Controller
{
    public function mostrar(){
        $elements = Subcategoria::all();
        foreach($elements as $element){
            $element->categoria;
        }
        return view('admin.subcategoria_mostrar')->with('elements', $elements);
    }

    public function create(){
        $categorias = Categoria::all();
        return view('admin.subcategoria_crear')->with('categorias', $categorias);
    }

    public function store(Request $request){
    	if($categoria = Categoria::find($request->categoria_id)){
    		$subcategoria = new Subcategoria(["nombre"=>$request->nombre]);
    		$categoria->subcategoria()->save($subcategoria);
    	}else{
    		return redirect()->route('subcategoria.crear',['toast'=>'Por favor seleccione una categor&iacutea v&aacutelida']);
    	}

    	return redirect()->route('subcategoria.crear',['toast'=>'Subcategor&iacutea creada con &eacutexito']);
    }

    public function update($id, Request $request){
    	if($subcategoria = Subcategoria::find($id)){
    		$subcategoria->nombre=$request->nombre;
    		$categoria->save();
    	}else{
    		//SI NO EXISTE ?
    	}
    	

    	//QUE HACER DESPUES DE LA ACCION?
    }

    public function delete($id){
    	if($subcategoria = Subcategoria::find($id))
    		$subcategoria->delete();
    	
    	else{
    		//SI NO EXISTE ?
    	}
    	

    	//QUE HACER DESPUES DE LA ACCION?
    }
}
