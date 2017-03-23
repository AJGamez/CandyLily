<head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{url('ico/diente.ico')}}">
        <title>CandyLily</title>        
                
        <link rel="stylesheet" href="{{url('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{url('css/animate.css')}}">
        <link rel="stylesheet" href="{{url('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{url('flexslider/flexslider.css')}}">
        <link rel="stylesheet" href="{{url('css/form-elements.css')}}">
        <link rel="stylesheet" href="{{url('css/style.css')}}">
        <link rel="stylesheet" href="{{url('css/media-queries.css')}}">    

   
  </head>

<body class="">
    <!-- Top menu -->
    <nav class="navbar" role="navigation">
      <div class="container">
        <div class="navbar-header">         
          <a class="navbar-nav" href=""><img src="{{url('imagenes/diente.png')}}" width="85" height="85"></a>
        </div>                        
      </div>
    </nav>

    <div class="contenido">
        @yield('centro')
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
  </body>

