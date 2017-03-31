<!DOCTYPE html>
<html lang="es">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{url('ico/diente.ico')}}">
        <title>CandyLily</title>

        <!-- CSS -->
        <!--link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster"-->

        <link rel="stylesheet" href="{{url('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{url('css/animate.css')}}">
        <link rel="stylesheet" href="{{url('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{url('flexslider/flexslider.css')}}">
        <link rel="stylesheet" href="{{url('css/form-elements.css')}}">
        <link rel="stylesheet" href="{{url('css/style.css')}}">
        <link rel="stylesheet" href="{{url('css/media-queries.css')}}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <!--link rel="shortcut icon" href="{{url('ico/favicon.ico')}}">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{url('ico/apple-touch-icon-144-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{url('ico/apple-touch-icon-114-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{url('ico/apple-touch-icon-72-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" href="{{url('ico/apple-touch-icon-57-precomposed.png')}}"-->

    </head>

    <body>

        <!-- Top menu -->
		<nav class="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-nav" href=""><img src="{{url('imagenes/diente.png')}}" width="85" height="85"></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
                        <li class="active">
							<a href=""><i class="fa fa-home"></i>&nbsp; Inicio</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								<i class="fa fa-user"></i>&nbsp; Pacientes <span class="caret"></span>
							</a>
							<ul class="dropdown-menu dropdown-menu-left" role="menu">
								<li><a href="">Expediente</a></li>
								<li><a href="">Consulta</a></li>
                                <li><a href="">Citas</a></li>
							</ul>
						</li>
                        <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								<i class="fa fa-tasks"></i>&nbsp; Administrar <span class="caret"></span>
							</a>
							<ul class="dropdown-menu dropdown-menu-left" role="menu">
								<li><a href="">Unidades de Salud</a></li>
								<li><a href="">Tratamientos</a></li>
                                <li><a href="">Diagnósticos</a></li>
							</ul>
						</li>
                        <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								<i class="fa fa-group"></i>&nbsp; RRHH <span class="caret"></span>
							</a>
							<ul class="dropdown-menu dropdown-menu-left" role="menu">
								<li><a href="{{url('usuario')}}">Usuarios</a></li>
								<li><a href="{{url('cargo')}}">Cargos</a></li>
							</ul>
						</li>
                        <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								<i class="fa fa-lock"></i>&nbsp; Seguridad <span class="caret"></span>
							</a>
							<ul class="dropdown-menu dropdown-menu-left" role="menu">
								<li><a href="">Respaldo</a></li>
								<li><a href="">Bitácora</a></li>
                                <li><a href="">Acerca de</a></li>
							</ul>
						</li>

                        @if (Auth::guest())
                        @else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								<i class="fa fa-user"></i>&nbsp; My Account <span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
                <?php $id = Auth::id(); ?>
								<li><a href={!! asset("/showAuth/".$id) !!}>Mi cuenta</a></li>
                <li><a href="{{url('logout')}}">Salir</a></li>
							</ul>
						</li>
                        @endif
					</ul>
				</div>
			</div>
		</nav>

		<div class="contenido">
      		@yield('contenido')
    	</div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 footer-copyright wow fadeIn">
                        <p>UES FMP 2017 - CandyLily </p>
                    </div>
                    <div class="col-sm-5 footer-social wow fadeIn">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Javascript -->
        <script src="{{url('js/validator.js')}}"></script>

        <script src="{{url('js/jquery-1.11.1.min.js')}}"></script>
        <script src="{{url('bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{url('js/bootstrap-hover-dropdown.min.js')}}"></script>
        <script src="{{url('js/jquery.backstretch.min.js')}}"></script>
        <script src="{{url('js/wow.min.js')}}"></script>
        <script src="{{url('js/retina-1.1.0.min.js')}}"></script>
        <script src="{{url('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{url('flexslider/jquery.flexslider-min.js')}}"></script>
        <script src="{{url('js/jflickrfeed.min.js')}}"></script>
        <script src="{{url('js/masonry.pkgd.min.js')}}"></script>

        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>

        <script src="{{url('js/jquery.ui.map.min.js')}}"></script>
        <script src="{{url('js/scripts.js')}}"></script>

    </body>

</html>
