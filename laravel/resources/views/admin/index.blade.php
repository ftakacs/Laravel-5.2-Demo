@extends('layouts.adm')

@section('conteudo')
<div>
    <ul class="breadcrumb">
        <li>
            <a href="{{ url('adm') }}">Admin</a>
        </li>
        <li>
            <a href="{{ url('adm') }}">Painel</a>
        </li>
    </ul>
</div>
	<h2>Admin Area</h2>  
	<div class=" row">
	    <div class="col-xs-12 col-md-4">
	        <a data-toggle="tooltip" title="" class="well top-block" href="{{ route('adm.users.index') }}">
	            <i class="glyphicon glyphicon-user blue"></i>
	
	            <div>Total de usuários</div>
	            <div>{{ $users }}</div>
	        </a>
	    </div>
	
	    <div class="col-xs-12 col-md-4">
	        <a data-toggle="tooltip" title="" class="well top-block" href="{{ route('adm.eventos.index') }}" >
	            <i class="glyphicon glyphicon-glass green"></i>
	
	            <div>Total de Eventos</div>
	            <div>{{ $eventos }}</div>
	        </a>
	    </div>
	    
	    <div class="col-xs-12 col-md-4">
	        <a data-toggle="tooltip" title="" class="well top-block" href="{{ route('adm.contatos.index') }}" >
	            <i class="glyphicon glyphicon-envelope red"></i>
	
	            <div>Total de Contatos</div>
	            <div>{{ $contatos }}</div>
	        </a>
	    </div>
	</div>
@stop