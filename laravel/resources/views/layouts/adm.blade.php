<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="_token" content="{{ csrf_token() }}" />
	<title>Administrar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ Request::root() }}/admin/img/favicon.ico">

</head>
<body>	

		<!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-inner">
            <a class="navbar-brand" href="{{ url('adm') }}"> <img class="hidden-xs" alt="Logo" src="{{ Request::root() }}/admin/img/logo-head.png">
                <span>Laravel 5.2 Admin</span></a>
            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> {{ Auth::user()->name }}</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                	<li><a href="{{ url ('/') }}"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ url('/logout') }}"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->
        </div>
    </div>
    <!-- topbar ends -->
	
	    <!-- left menu starts -->
	<div class="col-sm-2 col-lg-2">
		<div class="sidebar-nav">
			<div class="nav-canvas">
				<ul class="nav nav-pills nav-stacked main-menu">
					<li><a href="{{ url('adm') }}"><i class="glyphicon glyphicon-home"></i><span> Painel</span></a></li>
					<li><a href="{{ route('adm.users.index') }}"><i class="glyphicon glyphicon-user"></i><span> Usuários</span></a></li>
					<li><a href="{{ route('adm.eventos.index') }}"><i class="glyphicon glyphicon-glass"></i><span> Eventos</span></a></li>
					<li><a href="{{ route('adm.contatos.index') }}"><i class="glyphicon glyphicon-envelope"></i><span> Contatos</span></a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- left menu ends -->
	
    <div id="content" class="col-lg-10 col-sm-10">    
	    @section('conteudo')
		@show
	</div>
	<footer>
	</footer>
	
	<!-- The styles -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{ Request::root() }}/admin/css/style.css" rel="stylesheet">
	@section('custom_style')
	@show    
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script>
	<!-- external javascript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
	@section('custom_script')
	@show

	
</body>
</html>
