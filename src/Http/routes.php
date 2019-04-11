<?php
Route::group(['middleware' => ['auths','administrador']], function (){

 Route::get('gestion/calendario', 'Digitalsite\Calendario\Http\CalendarioController@index');
 Route::get('gestion/majo', 'Digitalsite\Calendario\Http\CalendarioController@majo');
 Route::resource('gestion/calendario/crear', 'Digitalsite\Calendario\Http\CalendarioController@create');
 Route::resource('gestion/calendario/crear-tipo', 'Digitalsite\Calendario\Http\CalendarioController@createtipo');
 Route::resource('gestion/calendario/editar-tipo', 'Digitalsite\Calendario\Http\CalendarioController@editipo');
 Route::resource('gestion/calendario/updatetipo', 'Digitalsite\Calendario\Http\CalendarioController@updatetipo');
 Route::resource('gestion/tipos/calendario', 'Digitalsite\Calendario\Http\CalendarioController@tipos');
 Route::resource('gestion/calendario/editar', 'Digitalsite\Calendario\Http\CalendarioController@edit');
 Route::resource('gestion/calendario/editar-evento', 'Digitalsite\Calendario\Http\CalendarioController@editar');
 Route::resource('gestion/calendario/actualizar', 'Digitalsite\Calendario\Http\CalendarioController@update');
 Route::resource('gestion/calendario/eliminar', 'Digitalsite\Calendario\Http\CalendarioController@delete');
 Route::resource('gestion/calendario/eliminar-tipo', 'Digitalsite\Calendario\Http\CalendarioController@deletetipo');
 Route::resource('gestion/registro/eventos', 'Digitalsite\Calendario\Http\CalendarioController@registros');

 Route::get('/gestion/crear-evento', function(){
  $tipos = DB::table('tipo_evento')->get();
  return View::make('calendario::crear-evento')->with('tipos', $tipos);
 });

 Route::get('/gestion/crear-tipo', function(){
  return View::make('calendario::crear-tipo');
 });

});

Route::group(['middleware' => ['web']], function (){

 Route::resource('gestion/calendario/registroa', 'Digitalsite\Pagina\Http\WebController@registrara');
 
});
