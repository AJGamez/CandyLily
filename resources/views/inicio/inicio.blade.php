@extends('menu')
@section('contenido')
<!DOCTYPE html>
<html lang="es">

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

    <body>
        
        <!-- Top menu -->
		<nav class="navbar presentation-container" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-nav" href=""><img src="imagenes/diente.png" width="85" height="85"></a>
				</div>
                                
	        	<div class="wow fadeInLeftBig">
	            	<h1><span class="violet">Candy</span>Lily Bienvenid@</h1>           
	            </div>
			</div>
		</nav>

        <!-- Slider -->
        <div class="well">
            <div class="container">
            	
            	<div class="row">                	                	
                	<div class="col-md-8 thumbnail">

            	<div class="page-header"> 
            		<h3>Datos personales <span class="violet">Administrador</span></h3>
				</div>				
                
                <div class="row">                	                	
                		<div class="col-md-6">
                			<div class="form-group has-feedback">
                				<label>Nombre:</label>
                				<div class="input-group input-group-sm">
                					<span class="input-group-addon "><span class="fa fa-user"></span></span>
                    				<input type="text" class="form-control" id="nombre" nombre="nombre" placeholder="Nombre">
                    				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    			</div>
                    		</div>                 
                    	</div>

                    	<div class="col-md-6">
                			<div class="form-group has-feedback">
                				<label>Apellido:</label>
                				<div class="input-group input-group-sm">
                    				<span class="input-group-addon "><span class="fa fa-user"></span></span>
                    				<input name="apellido" id="apellido" type="text" class="form-control" placeholder="Apellido">
                    				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                				</div>                				
           					</div>
                    	</div>                    
                </div>

                <div class="row">                	                	
                		<div class="col-md-6">
                			<div class="form-group has-feedback">
                				<label>DUI:</label>
                				<div class="input-group input-group-sm">
                    				<span class="input-group-addon "><span class="fa fa-bars"></span></span>
                    				<input name="dui" id="dui" type="text" class="form-control" placeholder="DUI">
                    				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                				</div>  				
           					</div>
                    	</div>

                		<div class="col-md-6">
                			<div class="form-group has-feedback">
                				<label>Dirección:</label>
                				<div class="input-group input-group-sm">
                    				<span class="input-group-addon "><span class="fa fa-home"></span></span>
                    				<input name="direccion" id="direccion" type="text" class="form-control" placeholder="Dirección">
                    				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                				</div>  				
           					</div>
                    	</div>            			                  
                		</div>

                		<div class="row">
                			<div class="col-md-6">
                			<div class="form-group has-feedback">
                				<label>Teléfono:</label>
                				<div class="input-group input-group-sm">
                					<span class="input-group-addon "><span class="fa fa-fax"></span></span>
                    				<input type="text" class="form-control" id="telefono" nombre="telefono" placeholder="Teléfono">
                    				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    			</div>
                    		</div>                 
                    	</div>

                    		<div class="col-md-6">
                				<div class="form-group has-feedback">
                					<label>E-mail:</label>
                					<div class="input-group input-group-sm">
                    					<span class="input-group-addon "><span class="fa fa-envelope"></span></span>
                    					<input name="email" id="email" type="text" class="form-control" placeholder="E-mail">
                    					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                					</div>                				
           						</div>
                    		</div>
                		</div>

                	<div class="row">
                		<div class="col-sm-12 wow fadeIn">
                			<div class="footer-border"></div>
                		</div>
                	</div>

                	<br>

                	<div class="row">
                		<div class="col-md-5"></div>
                		<div class="col-md-2">
                			<a href="index">
                            <button class="btn btn-sm btn-success btn-block" name="guardar" id="guardar" type="button" onClick="">
                                <span class="glyphicon glyphicon-edit"></span> Registrar
                            </button>
                            </a>
                		</div>
                		<div class="col-md-5"></div>
                	</div>                

            		</div>
                	<div class="col-md-4 thumbnail">
                		<div class="page-header"> 
            				<h3><span class="violet">Candy</span>Lily</h3>
						</div>

						<p>CandyLily es un sistema informático diseñado para el control administrativo, consultas y citas del Hospital Nacional Santa Gertrudis San Vicente</p>

                            <div id="carousel" class="carousel slide" data-ride="carousel">
                              <!-- Indicators -->
                              <ol class="carousel-indicators">
                                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel" data-slide-to="1"></li>
                                <li data-target="#carousel" data-slide-to="2"></li>                                
                              </ol>

                              <!-- Wrapper for slides -->
                              <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                  <img src="imagenes/HSV2.jpg" alt="...">
                                  <div class="carousel-caption">
                                    
                                  </div>
                                </div>
                                <div class="item">
                                  <img src="imagenes/HSV.jpg" alt="...">
                                  <div class="carousel-caption">
                                    
                                  </div>
                                </div>
                                <div class="item">
                                  <img src="imagenes/HSV3.png" alt="...">
                                  <div class="carousel-caption">
                                    
                                  </div>
                                </div>
                              </div>

                              <!-- Controls -->
                              <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>
                	</div>
            	</div>
            </div>
        </div>             
        
        <!-- Footer -->
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
@stop