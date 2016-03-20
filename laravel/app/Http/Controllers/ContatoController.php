<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contato;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class ContatoController extends Controller
{

	protected $rules = [
			'nome' => ['required', 'min:2'],
			'email' => ['required', 'email'],
			'mensagem' => ['required'],
	];
	
	//Sanitize Inputs
	protected function sanitize()
	{
		//get all Inputs
		$input = Input::all();
		//sanitize inputs
		$input['nome'] = filter_var($input['nome'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$input['email'] = filter_var($input['email'], FILTER_SANITIZE_EMAIL);
		$input['mensagem'] = filter_var($input['mensagem'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		return $input;
	}//end sanitize
	
	protected function sendEmail($contact){
	
		Mail::queue('emails.contact', array('input'=>$contact), function($message){
			$message->to('email@gmail.com', 'Nome')->subject('Contato');
		});
	}//end sendEmail

	public function getContato(){
		return view('contato');	
	}//end getContato
	
	public function postContato(Request $request){
	
		$request->flash();
	
		$this->validate($request, $this->rules);
	
		$input = $this->sanitize();
	
		Contato::create($input);
	
		$this->sendEmail($input);
	
		return Redirect::route('contato')->with('message', 'Mensagem enviada com sucesso');
	}//end postContato
}
