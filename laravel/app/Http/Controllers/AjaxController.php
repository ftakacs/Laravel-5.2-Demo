<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cidade;
use Illuminate\Support\Facades\Input;
use App\Evento;

class AjaxController extends Controller{
	
	
	//Ajax cidades. Get cidades for estado_id to fill cidades select
	public function getCidades(Request $request){
		//look if estado_id was sent
		if(!Input::get('estado_id')){
			return '';
		}
		
		$estado = intval(Input::get('estado_id'));
		$cidades = Cidade::where('estado_id',$estado)->lists('nome','id');
		return $cidades;
	}//end getCidades
	
	public function getEventos(Request $request){
		
		$eventos = Evento::where('ativo', 1)->orderBy('data', 'asc')->get();
		return view('eventos')->with('eventos',$eventos);
	}//end getEventos
}//end class