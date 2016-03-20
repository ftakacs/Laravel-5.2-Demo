@extends('layouts.adm')

@section('conteudo')
<div>
    <ul class="breadcrumb">
        <li>
            <a href="{{ url('adm') }}">Admin</a>
        </li>
        <li>
            <a href="{{ route('adm.contatos.index') }}">Contatos</a>
        </li>
    </ul>
</div>	
<h2>Contatos</h2>

	@if (Session::has('message'))
		<div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
	@endif

    @if ( !$model->count() )
        <p class="text-center">Nenhum contato para exibir</p>
    @else	
	<div class="row">
		<div class="col-xs-12">
		<table class="table table-striped table-condensed">
			<thead>
			    <tr>
			        <th>Nome</th>
			        <th>Email</th>
			        <th>Mensagem</th>
			        <th>Enviado em</th>
			    </tr>
			</thead>
			<tbody>
				@foreach( $model as $item )
                <tr>
						<td class="center">{{ $item->nome }}</td>
						<td class="center">{{ $item->email }}</td>
						<td class="center">{{ $item->mensagem }}</td>
						<td class="center">{{ date('d-m-Y H:i:s', strtotime($item->created_at)) }}</td>
					</tr>
            @endforeach
			</tbody>
		</table>
		</div>
	</div>  
	<div class="col-xs-12 center-block">{!! $model->render() !!}</div>  
	@endif
@stop