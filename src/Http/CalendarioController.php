<?php


namespace Digitalsite\Calendario\Http;
use Digitalsite\Calendario\Calendar;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
class CalendarioController extends Controller{

 public function __construct()
    {
        $this->middleware('auth');
    }


public function index(){

	    return view('calendario::calendarioSD');
	
	}

	 public function majo() {

	{
	 	$my_id = Auth::user()->id;
	 	$calendario = \Digitalsite\Usuario\Usuario::find($my_id)->Events;
	 	
	    echo json_encode(
	    array(
	    "success"=> 1,
	    "result"=>$calendario));}
    }

      public function create() {
 
	    date_default_timezone_set('America/Bogota');
		
		$calendario = new Calendar;
		$calendario->title = Input::get('title');
		$calendario->body = Input::get('body');
		$calendario->url = Input::get('url');
		$calendario->class = Input::get('class');
		$calendario->end_old = Input:: get ('end');
		$calendario->start_old = Input:: get ('start');
		$calendario->end = strtotime($calendario->end_old)*1000;
		$calendario->start = strtotime($calendario->start_old)*1000;
		$calendario->usuario_id = Input:: get ('metro');
		$calendario->save();

		return Redirect('gestion/calendario')->with('status', 'ok_create');

    }

     public function edit($id){

        $eventos = Calendar::find($id);
	    return view('calendario::editar')->with('eventos', $eventos);
    }

     public function editar($id){

        $eventos = Calendar::find($id);
	    return view('calendario::editar-evento')->with('eventos', $eventos);
    }

public function delete($eventos_id) {

		$eventos = Calendar::find($eventos_id);
		$eventos->delete();
		return Redirect('gestion/calendario')->with('status', 'ok_delete');
    }
 public function update($id) {

		$input = Input::all();
		$calendario = Calendar::find($id);
		$calendario->title = Input::get('title');
		$calendario->body = Input::get('body');
		$calendario->url = Input::get('url');
		$calendario->class = Input::get('class');
		$calendario->end_old = Input:: get ('end');
		$calendario->start_old = Input:: get ('start');
		$calendario->end = strtotime($calendario->end_old)*1000;
		$calendario->start = strtotime($calendario->start_old)*1000;
		
		$calendario->save();

		return Redirect('gestion/calendario/editar/'.$calendario->id)->with('status', 'ok_update');
	}


}
