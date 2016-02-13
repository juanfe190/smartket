<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Productos;
use App\Categoria;
use Storage;

class ProductosController extends Controller
{
    /**
    * Esta funcion muestra la visa producto_crear junto con
    * la lista de categorias obtenidas de la base de datos
    *
    * @param Illuminate\Http\Request
    * @return view with $categorias
    *
    */

    public function create(){
        $categorias = Categoria::all();
        return view('admin.producto_crear')->with('categorias', $categorias);
    }





    /**
    * Esta funcion se encarga de guardar los productos y
    * y sus respectivas imagenes en caso de estar presentes
    * 
    * @param Illuminate\Http\Request
    *
    */
    public function store(Request $request){
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

    	//QUE HACER DESPUES DE ACCION?
    }






   /**
    * Esta funcion se encarga de actualizar un producto
    * en la base de datos
    *
    * @param Illuminate\Http\Request
    * @param id del producto
    *
    */

    public function update(Request $request, $id){
        $producto = Productos::find($request->$id);
        $producto->update($request->all());
    }



    

    /**
    * Esta funcion se encarga de eliminar un 
    * producto de la base de datos
    *
    * @param id del producto
    *
    */
    public function delete($id){
        if($producto = Productos::find($id))
            $producto->delete();
        else{
            //SI NO EXISTE ?
        }
        //QUE HACER DESPUES DE LA ACCION?
    }
}
