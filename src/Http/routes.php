<?php
Route::group(['middleware' => ['auths','administrador']], function (){

 Route::get('gestion/calendario', 'Digitalsite\Calendario\Http\CalendarioController@index');
 Route::get('gestion/majo', 'Digitalsite\Calendario\Http\CalendarioController@majo');
 Route::post('gestion/calendario/crear', 'Digitalsite\Calendario\Http\CalendarioController@create');
 Route::post('gestion/calendario/crear-tipo', 'Digitalsite\Calendario\Http\CalendarioController@createtipo');
 Route::get('gestion/calendario/editar-tipo/{id}', 'Digitalsite\Calendario\Http\CalendarioController@editipo');
 Route::post('gestion/calendario/updatetipo/{id}', 'Digitalsite\Calendario\Http\CalendarioController@updatetipo');
 Route::get('gestion/tipos/calendario', 'Digitalsite\Calendario\Http\CalendarioController@tipos');
 Route::get('gestion/calendario/editar/{id}', 'Digitalsite\Calendario\Http\CalendarioController@edit');
 Route::get('gestion/calendario/editar-evento/{id}', 'Digitalsite\Calendario\Http\CalendarioController@editar');
 Route::post('gestion/calendario/actualizar/{id}', 'Digitalsite\Calendario\Http\CalendarioController@update');
 Route::get('gestion/calendario/eliminar/{id}', 'Digitalsite\Calendario\Http\CalendarioController@delete');
 Route::get('gestion/calendario/eliminar-tipo/{id}', 'Digitalsite\Calendario\Http\CalendarioController@deletetipo');
 Route::get('gestion/registro/eventos', 'Digitalsite\Calendario\Http\CalendarioController@registros');

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
