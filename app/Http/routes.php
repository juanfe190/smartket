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

Route::get('/{idCategoria}', 'SubcategoriasController@getCategorias');

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
	Route::get('/subcategoria/editar/{id}',['as'=>'subcategoria.editar', 'uses'=>'SubcategoriasController@edit']);
	Route::post('/subcategoria/editar/{id}',['as'=>'subcategoria.actualizar', 'uses'=>'SubcategoriasController@update']);
	Route::get('/subcategoria/eliminar/{id}',['as'=>'subcategoria.eliminar', 'uses'=>'SubcategoriasController@delete']);

	Route::get('/producto/crear',['as'=>'producto.crear', 'uses'=>'ProductosController@create']);
});

Route::group(['prefix'=>'api', 'middleware'=>'CheckApi'],function(){
	Route::get('/subcategoria/{id}',['as'=>'api.subcategoria', 'uses'=>'SubcategoriasController@getCategorias']);
});


