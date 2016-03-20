<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
	protected $guarded = array();
	

	public function estado(){
	
		return $this->belongsTo('App\Estado');
	}
	
	public function cidade(){
	
		return $this->belongsTo('App\Cidade');
	}
}