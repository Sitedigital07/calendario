<?php

namespace Digitalsite\Calendario;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model

{

	protected $table = 'events';
	public $timestamps = true;

	public function users(){

//Se relaciona uno a muchos
		return $this->belongsTo('Usuario');
	}

}