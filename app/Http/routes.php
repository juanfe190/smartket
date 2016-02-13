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

Route::get('/{idCategoria}', 'Admin\SubcategoriasController@getCategorias');

Route::group(['middleware'=>'web'], function(){
	Route::group(['prefix'=>'admin'],function(){
		Route::get('/',['as'=>'admin.main', 'uses'=>'Admin\MainController@main']);

		Route::get('/categoria/',['as'=>'categoria.mostrar', 'uses'=>'Admin\CategoriasController@mostrar']);
		Route::get('/categoria/crear',['as'=>'categoria.crear', 'uses'=>'Admin\CategoriasController@create']);
		Route::post('/categoria/crear',['as'=>'categoria.store', 'uses'=>'Admin\CategoriasController@store']);
		Route::get('/categoria/editar/{id}',['as'=>'categoria.editar', 'uses'=>'Admin\CategoriasController@edit']);
		Route::post('/categoria/editar/{id}',['as'=>'categoria.actualizar', 'uses'=>'Admin\CategoriasController@update']);
		Route::get('/categoria/eliminar/{id}',['as'=>'categoria.eliminar', 'uses'=>'Admin\CategoriasController@delete']);

		Route::get('/subcategoria/',['as'=>'subcategoria.mostrar', 'uses'=>'Admin\SubcategoriasController@mostrar']);
		Route::get('/subcategoria/crear',['as'=>'subcategoria.crear', 'uses'=>'Admin\SubcategoriasController@create']);
		Route::post('/subcategoria/crear',['as'=>'subcategoria.store', 'uses'=>'Admin\SubcategoriasController@store']);
		Route::get('/subcategoria/editar/{id}',['as'=>'subcategoria.editar', 'uses'=>'Admin\SubcategoriasController@edit']);
		Route::post('/subcategoria/editar/{id}',['as'=>'subcategoria.actualizar', 'uses'=>'Admin\SubcategoriasController@update']);
		Route::get('/subcategoria/eliminar/{id}',['as'=>'subcategoria.eliminar', 'uses'=>'Admin\SubcategoriasController@delete']);

		Route::get('/producto/crear',['as'=>'producto.crear', 'uses'=>'Admin\ProductosController@create']);
		Route::post('/producto/crear', ['as'=>'producto.store', 'middleware'=>'CheckCatSubcat', 'uses'=>'Admin\ProductosController@store']);
	});
});


Route::group(['prefix'=>'api', 'middleware'=>'CheckApi'],function(){
	Route::get('/getproductos',['as'=>'api.getProductos', 'uses'=>'Api\ApiProductosController@getProductos']);
});


