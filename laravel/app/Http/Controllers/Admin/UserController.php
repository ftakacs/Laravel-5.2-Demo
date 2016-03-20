<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class UserController extends Controller{
	
	//validation rules for Users
	protected $rules = [
			'name' => ['required', 'min:2'],
			'role_id' => ['required', 'numeric']
	];
	
	public function sanitize()
	{
		$input = Input::all();
	
		$input['name'] = filter_var($input['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
				
		return $input;
	}
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::paginate(10);
		return view('admin/users')->with('users',$users);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
    	$roles = array('' => 'Selecione uma Permissão') + Role::lists('name','id')->all();
        $user = User::find($id);
		return view('admin/single_user')->with('model',$user)->with('roles',$roles);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id){
    
    	$request->flash();
    	$this->validate($request, $this->rules);
    	$input = $this->sanitize();

    	$model = User::find($id);
    	$model->update($input);
    	 
    	return Redirect::route('adm.users.show',$id)->with('model',$model)->with('message','Usuário atualizado.');
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
