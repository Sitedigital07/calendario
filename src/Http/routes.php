<?php
Route::group(['middleware' => ['auths','administrador']], function (){

Route::get('gestion/calendario', 'Digitalsite\Calendario\Http\CalendarioController@index');
Route::get('gestion/majo', 'Digitalsite\Calendario\Http\CalendarioController@majo');
Route::resource('gestion/calendario/crear', 'Digitalsite\Calendario\Http\CalendarioController@create');
Route::resource('gestion/calendario/editar', 'Digitalsite\Calendario\Http\CalendarioController@edit');
Route::resource('gestion/calendario/editar-evento', 'Digitalsite\Calendario\Http\CalendarioController@editar');
Route::resource('gestion/calendario/actualizar', 'Digitalsite\Calendario\Http\CalendarioController@update');
Route::resource('gestion/calendario/eliminar', 'Digitalsite\Calendario\Http\CalendarioController@delete');

Route::get('/gestion/crear-evento', function(){
    return View::make('calendario::crear-evento');
});

	});
