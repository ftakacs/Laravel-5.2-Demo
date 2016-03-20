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
        <li>
            <a href="{{ route('adm.eventos.create') }}">Novo Evento</a>
        </li>
    </ul>
</div>
	<h2>Criar Novo Evento</h2>
	
	@if (Session::has('message'))
		<div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
	@endif
	{!! Form::model(new App\Evento, ['method' => 'POST','route' => 'adm.eventos.store','role' => 'form', 'id' => 'formEvento']) !!}
	
		<fieldset>
				
				<div class="form-group">
					<label for="nome">Evento</label>
					{!! Form::text('nome', null, array('required' => 'true', 'class' => 'form-control', 'placeholder' => 'Nome do Evento', 'maxlength' => '200')) !!}
				</div>
				<div class="form-group">
					<label for="local">Local</label>
					{!! Form::text('local', null, array('required' => 'true', 'class' => 'form-control', 'placeholder' => 'Local do Evento', 'maxlength' => '200')) !!}
				</div>
				<div class="form-group">
					<label for="estado_id">Estado</label>
					{!! Form::select('estado_id', 
        				($estados), 
            			null, 
            			['class' => 'form-control','id' => 'cod_estados']) !!}
				</div>
				<div class="form-group">
					<label for="cidade_id">Cidade</label>
					{!! Form::select('cidade_id', 
        				($cidades), 
            			null, 
            			['class' => 'form-control', 'id' => 'cod_cidades']) !!}
				</div>

				<div class="form-group">
					<label for="data">Data</label>
					{!! Form::date('data', \Carbon\Carbon::now(), array('class' => 'form-control')) !!}
				</div>
				
				<div class="form-group">
					<label for="descricao">Descrição do Evento</label>
					{!! Form::textarea('descricao', null, array('class' => 'form-control')) !!}
				</div>
				
				<div class="form-group">
					<label for="ativo">Ativo</label>
					{!! Form::checkbox('ativo', null, array('class' => 'form-control')) !!}
				</div>

				<div class="form-group text-right">
					<a class="btn btn-default" role="button" href="{{ route('adm.eventos.index') }}">Voltar</a>
	        		{!! Form::submit('Salvar', array('class' => 'btn btn-success')) !!}
	        	</div>
			</fieldset>
		{!! Form::close() !!}
 
@stop
@section('custom_script')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="{{ Request::root() }}/admin/js/eventoFormValidate.js"></script>
<script type="text/javascript">
$(document).ready(function (){

	 var carregaCidades = function(){
		 
			if( $(this).val() ) {
				$.getJSON('{{ route('getCidades') }}',{estado_id: $(this).val(), ajax: 'true'}, function(j){
					var options = '<option value="a">Escolha uma cidade</option>';	
					$.each(j,function( index, value ){
						options += '<option value="' + index + '">' + value + '</option>';
					});
					$('#cod_cidades').html(options).show();
				});
			} else {
				$('#cod_cidades').html('<option value=""> Escolha primeiro um estado </option>');
			}
		};//end carregaCidades
		//
		$('#cod_estados').change(carregaCidades);
		
});
</script>
@stop