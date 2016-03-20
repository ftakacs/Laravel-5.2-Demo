    @if (Session::has('message'))
		<div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
	@endif
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="feature_header text-center">
                            <h3 class="feature_title"><b>Contato</b></h3>
                            <div class="divider"></div>
                        </div>
                    </div>  <!-- Col-md-12 End -->
                </div>
                <div class="row">
    
        	{!! Form::model(new App\Contato, ['method' => 'POST','route' => 'contato.post','role' => 'form','id' => 'formContato']) !!}
		
			<fieldset>
				
				<div class="form-group">
					<label for="nome">Nome</label>
					{!! Form::text('nome', null, array('required' => 'true', 'class' => 'form-control', 'placeholder' => 'Digite seu nome', 'maxlength' => '50')) !!}
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					{!! Form::email('email', null, array('required' => 'true', 'class' => 'form-control', 'placeholder' => 'seu@email.com')) !!}
				</div>
				<div class="form-group">
					<label for="mensagem">Mensagem</label>
					{!! Form::textarea('mensagem', null, array('class' => 'form-control','required' => 'true')) !!}
				</div>
				<div class="form-group text-right">
	        		{!! Form::submit('Enviar', array('class' => 'btn btn-success')) !!}
	        	</div>
			</fieldset>
		{!! Form::close() !!}
		</div>