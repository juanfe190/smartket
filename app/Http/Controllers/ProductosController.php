<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Productos;
use App\Categoria;
use Storage;

class ProductosController extends Controller
{
    public function create(){
        $categorias = Categoria::all();
        return view('admin.producto_crear')->with('categorias', $categorias);
    }

    public function store(Request $request){
    	$categoriaID = $request->categoria_id;
    	$subcategoriaID = $request->subcategoria_id;
    	$categoria = Categoria::find($categoriaID);
    	
    	if($categoria && $subcategoria = $categoria->subcategoria()->find($subcategoriaID)){
    		$producto = Productos::create($request->all());
             $id = $producto->id;

             /*  MANEJO DE ARCHIVOS  */
            if($request->hasFile('imagen_producto')){
                $imagen_producto = $request->file('imagen_producto');
                $filename = 'img_'. $id . '.' . $imagen_producto->getClientOriginalExtension();

                $producto->imagen_producto = $filename;
                Storage::put('/productos/'.$filename, file_get_contents($imagen_producto->getRealPath()));
            } 
            if($request->hasFile('tabla_nutricional')){
                $tabla_nutricional = $request->file('tabla_nutricional'); 
                $filename = 'tbl_' . $id . '.' . $tabla_nutricional->getClientOriginalExtension();

                $producto->tabla_nutricional = $filename;
                Storage::put('/tablas/'.$filename, file_get_contents($tabla_nutricional->getRealPath()));
            } 
            $producto->save();
            /*---------------------*/
            
    	}else{
    		echo 'categoria o subcategoria no encontrada';
    		//CATEGORIA NO ENCONTRADA?
    	}

    	//QUE HACER DESPUES DE ACCION?
    }

    public function update(Request $request, $id){
        $categoriaID = $request->categoria_id;
        $subcategoriaID = $request->subcategoria_id;
        
        $categoria = Categoria::find($categoriaID);
        $subcategoria = $categoria->subcategoria()->find($subcategoriaID);

        if($categoria && $subcategoria){
            $producto = Productos::find($request->$id);
            $producto->update($request->all());
        }
    }

     public function delete($id){
        if($producto = Productos::find($id))
            $producto->delete();
        else{
            //SI NO EXISTE ?
        }
        //QUE HACER DESPUES DE LA ACCION?
    }
}
