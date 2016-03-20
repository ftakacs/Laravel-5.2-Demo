<?php


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
    
    Route::get('/', ['as' => 'index', function () {
    	return view('index');
    }]);
});

//ajax procurar cidades
Route::any('ajaxcidades',array('as' =>'getCidades','middleware' => 'web', 'uses' => 'AjaxController@getCidades'));
//ajax get eventos
Route::get('eventos',array('as' =>'getEventos','middleware' => 'web', 'uses' => 'AjaxController@getEventos'));

//Contact routes
Route::get('contato',['as' =>'contato' ,'middleware' => 'web', 'uses' => 'ContatoController@getContato']);
Route::post('contato',['as' =>'contato.post' ,'middleware' => 'web', 'uses' => 'ContatoController@postContato']);

//admin routes
Route::group(['prefix' =>'adm','namespace' => 'Admin', 'middleware' => ['web','auth','roles'],'roles' => ['administrator', 'manager']],function () {
	Route::any('/', 'AdminController@index');
	Route::resource('users','UserController');
	Route::resource('eventos','EventoController');
	Route::get('contatos',['as' => 'adm.contatos.index' ,'uses' => 'ContatoController@index']);
	//ajax image search
	Route::any('image-search', array('as' => 'image.search.ajax' ,'uses' => 'ImageManagerController@ajax'));
	Route::post('image-upload', array('as' => 'image.upload' ,'uses' => 'ImageManagerController@uploadImage'));
});