<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Estado;
use App\Cidade;
use App\Evento;

class EventoController extends Controller
{
	//validation rules
	protected $rules = [
			'nome' => ['required', 'min:2'],
			'local' => ['required', 'min:2'],
			'estado_id' => ['numeric'],
			'cidade_id' => ['numeric'],
			'descricao'=> ['required', 'min:2'],
			'data' => ['date']
	];
	
	//Sanitize Inputs
	protected function sanitize()
	{
		//get all Inputs
		$input = Input::all();
		//sanitize inputs
		$input['nome'] = filter_var($input['nome'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$input['local'] = filter_var($input['local'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$input['ativo'] = isset($input['ativo']);
		//return sanitized Inputs	
		return $input;
	}
	
	
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    	$model = Evento::paginate(2);
    	return view('admin/eventos')->with('model',$model);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @return Response
     */
    public function create(Request $request)
    {
    	$estados = array('a' => 'Selecione um Estado') + Estado::lists('sigla','id')->all();
    	$data = intval($request->session()->get('_old_input',array()));
    	$cidades = array('a' => 'Escolha primeiro um estado');
    	if($data){
    		$cidades = Cidade::where('estado_id',$data["estado_id"])->lists('nome','id');
    	}
		$model = new Estado();
    	return view('admin/evento_create')->with('estados',$estados)->with('cidades',$cidades)->with('model',$model);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
    	
    	$request->flash();
    	$this->validate($request, $this->rules);
    	$input = $this->sanitize();
    	$model = Evento::create($input); 	
    	return Redirect::route('adm.eventos.show',$model->id)->with('message',"Evento $model->nome adicionado");   	
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
    	$model = Evento::find($id);
    	$estados = array('' => 'Selecione um Estado') + Estado::lists('sigla','id')->all();
    	$cidades = Cidade::where('estado_id',$model->estado_id)->lists('nome','id');
    	return view('admin/evento_view')->with('estados',$estados)->with('cidades',$cidades)->with('model',$model);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
  	
    	$request->flash();
    	$this->validate($request, $this->rules);
    	$input = $this->sanitize();  		    	
    	$model = Evento::find($id);
    	$model->update($input);
    	$estados = array('' => 'Selecione um Estado') + Estado::lists('sigla','id')->all();
    	$cidades = Cidade::where('estado_id',$model->estado_id)->lists('nome','id');
    	return Redirect::route('adm.eventos.show',$id)->with('model',$model)->with('estados',$estados)->with('cidades',$cidades)->with('message','Evento atualizado');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
