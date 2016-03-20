@extends('layouts.front')

@section('content')

<div class="container" id="conteudo">
@if (Session::has('message'))
		<div class="alert alert-danger" role="alert">{{ Session::get('message') }}</div>
@endif
	<section id="home" class="session">
	    <div class="row">
	        <div class="col-xs-12 col-md-10 col-md-offset-1">
	           <div class="featured-container mobile-hidden">
	            <div class="featured-slider">
	                <div class="slider">
	                    <div class="flexslider">
	                        <ul class="slides">
	                                <li>
	                                    <div class="slider-container slide-id-1">
											<img src="https://sites.google.com/site/alexandrelrangel/_/rsrc/1411394743736/Home/programacao-para-web-ii/php-web-development.png">
	                                        <div class="slider-details-container">
	                                            <a href="#" rel="bookmark"><h1 class="slider-title">Slide 1</h1></a>
	                                        </div>
	                                    </div>
	                                    <div class="slider-container slide-id-2">
											<img src="http://obj1.render.com.br:8080/images/aprender+/APRENDER-PROG-WEB/inicie-aprendendo-a-logica-de-programaca.jpg">
	                                        <div class="slider-details-container">
	                                            <a href="#" rel="bookmark"><h1 class="slider-title">Slide 2</h1></a>
	                                        </div>
	                                    </div>
	                                    <div class="slider-container slide-id-3">
											<img src="http://thumbs.web.sapo.io/?pic=http://imgs.sapo.pt/gfx/4a/fb/586505.gif&W=1000&H=500&crop=center&tv=2">
	                                        <div class="slider-details-container">
	                                            <a href="#" rel="bookmark"><h1 class="slider-title">Slide 3</h1></a>
	                                        </div>
	                                    </div>
	                                    <div class="slider-container slide-id-4">
											<img src="http://blog.220i.com.br/wp-content/uploads/2012/11/html5_css_javascript.jpg">
	                                        <div class="slider-details-container">
	                                            <a href="#" rel="bookmark"><h1 class="slider-title">Slide 4</h1></a>
	                                        </div>
	                                    </div>
	                                    <div class="slider-container slide-id-5">
											<img src="http://aprendizweb.com.br/wp-content/uploads/2015/03/Language.png">
	                                        <div class="slider-details-container">
	                                            <a href="#" rel="bookmark"><h1 class="slider-title">Slide 5</h1></a>
	                                        </div>
	                                    </div>
	                                </li>
									<li>
										<div class="slider-container slide-id-1">
											<img src="http://inkmotion.com.br/wp-content/uploads/2013/08/outsource1.jpg">
	                                        <div class="slider-details-container">
	                                            <a href="#" rel="bookmark"><h1 class="slider-title">Slide 6</h1></a>
	                                        </div>
	                                    </div>
	                                    <div class="slider-container slide-id-2">
											<img src="http://sematecsolucoes.com.br/curso-em-florianopolis/wp-content/uploads/2015/01/the-matrix_2835_1920x1200.jpg">
	                                        <div class="slider-details-container">
	                                            <a href="#" rel="bookmark"><h1 class="slider-title">Slide 7</h1></a>
	                                        </div>
	                                    </div>
	                                    <div class="slider-container slide-id-3">
											<img src="http://pt.wix.com/blog/wp-content/uploads/2012/03/HTML-What%C2%B4s-All-the-Hype-About-HTML5-1.jpg">
	                                        <div class="slider-details-container">
	                                            <a href="#" rel="bookmark"><h1 class="slider-title">Slide 8</h1></a>
	                                        </div>
	                                    </div>
	                                    <div class="slider-container slide-id-4">
											<img src="http://image.slidesharecdn.com/linguagensdeprogramao-120530145008-phpapp01/95/linguagens-de-programao-6-728.jpg?cb=1338390475">
	                                        <div class="slider-details-container">
	                                            <a href="#" rel="bookmark"><h1 class="slider-title">Slide 9</h1></a>
	                                        </div>
	                                    </div>
	                                    <div class="slider-container slide-id-5">
											<img src="http://pplware.sapo.pt/wp-content/uploads/2016/02/prog-languages2-720x300.jpg">
	                                        <div class="slider-details-container">
	                                            <a href="#" rel="bookmark"><h1 class="slider-title">Slide 10</h1></a>
	                                        </div>
	                                    </div>
									</li>
	                            
	                        </ul>
	                    </div>
	                </div>
	            </div><!-- .slider -->
	        </div>        
        	</div>
    	</div>
    </section>
    <section id="servico" class="session">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="feature_header text-center">
                            <h3 class="feature_title"><b>Serviços</b></h3>
                            <h4 class="feature_sub">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Iusto provident non voluptatibus animi quidem incidunt eum, eligendi doloribus dicta.</h4>
                            <div class="divider"></div>
                        </div>
                    </div>  <!-- Col-md-12 End -->
                </div>
                <div class="row">
                    <div class="main_feature text-center">
                        <div class="col-md-3 col-xs-12 col-sm-6">
                                <div class="feature_content">
                                    <i class="fa fa-lightbulb-o"></i>
                                    <h5>Item 1</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <button class="btn btn-main"> Leia Mais</button>
                                </div>
                            </div>
                        <div class="col-md-3 col-xs-12 col-sm-6">
                                <div class="feature_content">
                                    <i class="fa fa-pencil"></i>
                                    <h5>Item 2</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <button class="btn btn-main"> Leia Mais</button>
                                </div>
                        </div> <!-- Col-md-4 Single_feature End -->
                        <div class="col-md-3 col-xs-12 col-sm-6">
                                <div class="feature_content">
                                    <i class="fa fa-cog"></i>
                                    <h5>Item 3</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <button class="btn btn-main"> Leia Mais</button>
                                </div>
                        </div> <!-- Col-md-4 Single_feature End -->
                        <div class="col-md-3 col-xs-12 col-sm-6">
                                <div class="feature_content">
                                    <i class="fa fa-desktop"></i>
                                    <h5>Item 4</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <button class="btn btn-main"> Leia Mais</button>
                                </div>
                        </div> <!-- Col-md-4 Single_feature End -->
                       
                    </div>
            </div>  <!-- Row End -->
    </section>
    <section id="evento" class="session">

                
    </section>
    <section id="contato" class="session">
 
    </section>
</div>
@endsection

@section('custom_style')
<link href="{{ Request::root() }}/css/font-awesome.min.css" rel="stylesheet">
<link href="{{ Request::root() }}/css/flexslider.css" rel="stylesheet">
<link href="{{ Request::root() }}/css/front.css" rel="stylesheet">
@endsection

@section('custom_script')
<script src="{{ Request::root() }}/js/jquery.flexslider-min.js"></script>
<script src="{{ Request::root() }}/js/slider.js"></script> 
<script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script> 
<script src="{{ Request::root() }}/js/front.js"></script>
@endsection