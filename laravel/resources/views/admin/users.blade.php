@extends('layouts.adm')

@section('conteudo')
<div>
    <ul class="breadcrumb">
        <li>
            <a href="{{ url('adm') }}">Admin</a>
        </li>
        <li>
            <a href="{{ route('adm.users.index') }}">Users</a>
        </li>
    </ul>
</div>	
<h2>Usuários</h2>

	@if (Session::has('message'))
		<div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
	@endif

    @if ( !$users->count() )
        <p class="text-center">Nenhum usuário para exibir</p>
    @else
	<div class="row">
		<div class="col-xs-12">
		<table class="table table-striped table-condensed">
			<thead>
			    <tr>
			    	<th>ID</th>
			        <th>Nome</th>
			        <th>Email</th>
			        <th>Role</th>
			        <th>Criado em</th>
			        <th>Edit</th>
			    </tr>
			</thead>
			<tbody>
				@foreach ($users as $user)

					<tr>
					    <td class="center">{{ $user->id}}</td>
						<td class="center">{{ $user->name }}</td>
						<td class="center">{{ $user->email }}</td>
						<td class="center">{{ $user->role->name }}</td>
						<td class="center">{{ date('d-m-Y H:i:s', strtotime($user->created_at)) }}</td>
						<td><a class="btn btn-default" role="button" href="{{ route('adm.users.show', $user->id) }}">Editar</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		</div>
	</div>
	<div class="col-xs-12 center-block">{!! $users->render() !!}</div>    
	@endif
@stop
