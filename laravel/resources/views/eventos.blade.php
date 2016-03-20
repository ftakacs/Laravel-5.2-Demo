
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="feature_header text-center">
				<h3 class="feature_title"><b>Eventos</b></h3>
				<div class="divider"></div>
			</div>
		</div>  <!-- Col-md-12 End -->
	</div>
	<div class="row">
	
		<ul class="timeline">
		<?php $i=1 ?>
		@foreach( $eventos as $item )
					    <li <?php if($i%2 == 0) echo 'class="timeline-inverted"';?>>
					        <div class="timeline-badge">
					          <a><i class="fa fa-circle"></i></a>
					        </div>
					        <div class="timeline-panel">
					            <div class="timeline-heading">
					                <h4>{{ $item->nome }}</h4>
					            </div>
					            <div class="timeline-body">
					                <div class="timeline-desc col-md-6">{!! $item->descricao !!}</div>
					                <p class="timeline-other col-md-6">
					                	
					                	<em class="timeline-item">
					                	 Local: {{ $item->local }}
					                	</em> 
					                	<em class="timeline-item">
					                	Estado: {{ $item->estado->sigla }}
					                	</em>
					                	<em class="timeline-item">
					                	Cidade: {{ $item->cidade->nome }}
					                	</em>
					                	<em class="timeline-item">
					                	Data: {{ date('d/m/Y',strtotime($item->data)) }}
					                	</em>
					                </p>
					            </div>         
					        </div>
					    </li>
					    <?php $i++;?>
			@endforeach
					    <li class="clearfix no-float"></li>
					</ul>
	</div>
