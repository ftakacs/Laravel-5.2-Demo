@extends('layouts.adm')

@section('conteudo')
<div>
    <ul class="breadcrumb">
        <li>
            <a href="{{ url('adm') }}">Admin</a>
        </li>
        <li>
            <a href="{{ route('adm.eventos.index') }}">Eventos</a>
        </li>
    </ul>
</div>	
<h2>Eventos <a class="btn btn-default" role="button" href="{{ route('adm.eventos.create') }}">Criar novo</a></h2>

	@if (Session::has('message'))
		<div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
	@endif

    @if ( !$model->count() )
        <p class="text-center">Nenhum evento para exibir</p>
    @else	
	<div class="row">
		<div class="col-xs-12">
		<table class="table table-striped table-condensed">
			<thead>
			    <tr>
			        <th>Nome</th>
			        <th>Local</th>
			        <th>Cidade</th>
			        <th>Estado</th>
			        <th>Data</th>
			        <th>Edit</th>
			    </tr>
			</thead>
			<tbody>
				@foreach( $model as $item )
                <tr>
						<td class="center">{{ $item->nome }}</td>
						<td class="center">{{ $item->local }}</td>
						<td class="center">{{ $item->cidade->nome }}</td>
						<td class="center">{{ $item->estado->sigla }}</td>
						<td class="center">{{ date('d/m/Y',strtotime($item->data)) }}</td>
						<td><a class="btn btn-default" role="button" href="{{ route('adm.eventos.show', $item->id) }}">Editar</a></td>
					</tr>
            @endforeach
			</tbody>
		</table>
		</div>
	</div>  
	<div class="col-xs-12 center-block">{!! $model->render() !!}</div>  
	@endif
@stop