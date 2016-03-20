<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cliente;
use App\Estado;
use App\Telefone;
use App\Cidade;
use App\Contato;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    	$model = Contato::paginate(10);
    	return view('admin/contato_index')->with('model',$model);
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

    }
}
