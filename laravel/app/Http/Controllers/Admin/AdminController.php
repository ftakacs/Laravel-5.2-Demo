<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Evento;
use App\Contato;

class AdminController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all()->count();
		$eventos = Evento::all()->count();
		$contatos = Contato::all()->count();
		return view('admin/index')->with('users',$users)->with('eventos',$eventos)->with('contatos',$contatos);
	}

}
