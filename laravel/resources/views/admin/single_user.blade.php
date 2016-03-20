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
        <li>
            <a href="{{ route('adm.users.show', $model->id) }}">{{ $model->name }}</a>
        </li>
    </ul>
</div>	
	<h2>Editar usuário</h2>
	
	@if (Session::has('message'))
		<div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
	@endif
	{!! Form::model($model, ['method' => 'PUT','route' => ['adm.users.update',$model->id],'role' => 'form', 'id' => 'formUser']) !!} 
			<fieldset>
				
				<div class="form-group">
					<label for="nome">Nome</label>
					{!! Form::text('name', null, array('required' => 'true', 'class' => 'form-control',  'maxlength' => '200')) !!}
				</div>

				<div class="form-group">
					<label for="pic">Foto</label>
					{!! Form::hidden('pic', null, array('class' => 'form-control', 'id'=>'pic_input')) !!}	
					
						<img id="user_img" class="thumbnail" alt="" src="<?php echo ($model->pic ? $model->pic : '/uploads/default_user.jpg' )?>">
				
					<button type="button" id="loadimg" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
 						Enviar foto
					</button>
				</div>
				<div class="form-group">
					<label for="role_id">Permissão</label>
					{!! Form::select('role_id', 
        				($roles), 
            			$model->role_id, 
            			['class' => 'form-control','id' => 'roles', 'required' => 'true']) !!}
				</div>
				<div class="form-group text-right">
					<a class="btn btn-default" role="button" href="{{ route('adm.users.index') }}">Voltar</a>
	        		{!! Form::submit('Salvar', array('class' => 'btn btn-success')) !!}
	        	</div>
			</fieldset>
	{!! Form::close() !!}
	
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title" id="myModalLabel">Escolha a imagem</h4>
      		</div>
      		<div class="modal-body row">
      			<div class="col-xs-12">
	                <div class="panel panel-info">
	                    <div class="panel-heading">
	                        <h4>Enviar Imagem</h4>
	                    </div>
	                    <form action="{{route('image.upload')}}" method="POST" id="uploadForm" enctype="multipart/form-data">
	                        <div class="panel-body">
	                            <div class="form-group">
	                                <label class="control-label" for="upload">Arquivo</label>
	                                <input class="form-control" type="file" id="upload" name="upload" required>
	                            </div>
	                        </div>
	                        {!! Form::token(); !!}
	                        <div class="panel-footer text-right">
	                            <span class="fa fa-spinner fa-spin" id="spinArquivo"></span>
	                            <button class="btn btn-info" type="submit">Enviar</button>
	                        </div>
	                    </form>
	                </div>
	            </div>
    			<div id="modal_content" class="col-sm-12"></div>
      		</div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      		</div>
    	</div>
  	</div>
</div>
@stop
@section('custom_style')
    <style>
    	#menu li span:hover{
			 text-decoration:underline;
			 cursor:pointer;
			 background-color: #ededed;
    	}
    	.thumb{
    		margin: 1% 0;
    	}
    	#user_img{
    		height: 100px;
    		margin: 0;
    	}
    </style>
@stop 
@section('custom_script')
	<script src="http://malsup.github.com/jquery.form.js"></script> 
	<script>
	
	var imgFunction = function(e){
		$(this).click(function(e){
			var img = $(e.currentTarget).children().attr("src");
			$('#pic_input').val(img);
			$('#user_img').attr("src", img);
			$('#myModal').modal('toggle');
		});
	};
	function loadImages(e){
		$.getJSON('{{route('image.search.ajax')}}',{ajax: 'true'}, function(resposta){
			var img = resposta.img;
			var content = '';
			$.each(img, function(i, item){
				content = content.concat(item);
			});
			if(content == ''){
				content = '<h2>Nenhuma Imagem Disponível</h2>'
			}
			$('#modal_content').html(content);
			$('#modal_content img').parent().each(imgFunction);
			
		});
	} 
	$('#loadimg').click(loadImages());

    $('#uploadForm').ajaxForm(function(response) { 
        loadImages();
        alert(response);
        $('#upload').val('');
    });	
	</script>
@stop