<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect()->route('categoria.mostrar', ['toast'=>'foo']);
});

Route::group(['prefix'=>'admin'],function(){
	Route::get('/',['as'=>'admin.main', 'uses'=>'MainController@main']);

	Route::get('/categoria/',['as'=>'categoria.mostrar', 'uses'=>'CategoriasController@mostrar']);
	Route::get('/categoria/crear',['as'=>'categoria.crear', 'uses'=>'CategoriasController@create']);
	Route::post('/categoria/crear',['as'=>'categoria.store', 'uses'=>'CategoriasController@store']);
	Route::get('/categoria/editar/{id}',['as'=>'categoria.editar', 'uses'=>'CategoriasController@edit']);
	Route::post('/categoria/editar/{id}',['as'=>'categoria.actualizar', 'uses'=>'CategoriasController@update']);
	Route::get('/categoria/eliminar/{id}',['as'=>'categoria.eliminar', 'uses'=>'CategoriasController@delete']);

	Route::get('/subcategoria/',['as'=>'subcategoria.mostrar', 'uses'=>'SubcategoriasController@mostrar']);
	Route::get('/subcategoria/crear',['as'=>'subcategoria.crear', 'uses'=>'SubcategoriasController@create']);
	Route::post('/subcategoria/crear',['as'=>'subcategoria.store', 'uses'=>'SubcategoriasController@store']);
});

Route::post('/1', 'ProductosController@store');

