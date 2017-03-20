@extends('menu')
@section('contenido')                  

        <!-- Slider -->
        <div class="slider-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 slider">
                        <div class="flexslider">
                            <ul class="slides">                                                                
                                <li data-thumb="imagenes/1.jpg">
                                    <img src="imagenes/1.jpg" width="958" height="460">
                                    <div class="flex-caption">
                                    	Embarazo :P
                                    </div>
                                </li>
                                <li data-thumb="imagenes/2.jpg">
                                    <img src="imagenes/2.jpg" width="958" height="460">
                                    <div class="flex-caption">
                                    	Un diente xD 
                                    </div>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Presentation -->
        <div class="presentation-container">
        	<div class="container">
        		<div class="row">
	        		<div class="col-sm-12 wow fadeInLeftBig">
	            		<h1><span class="violet">Candy</span>Lily</h1>
	            		<p>Automatización y desarrollo tecnológico</p>
	            	</div>
            	</div>
        	</div>
        </div>

        <!-- Services -->
        <div class="services-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-4">
		                <div class="service wow fadeInUp">
		                    <div class="service-icon"><i class="fa fa-file-text-o"></i></div>
		                    <h3>Expediente</h3>
		                    <p>Datos y controles exactos de los pacientes</p>
		                    <a class="big-link-1" href="">Ir</a>
		                </div>
					</div>
					<div class="col-sm-4">
		                <div class="service wow fadeInDown">
		                    <div class="service-icon"><i class="fa fa-user-md"></i></div>
		                    <h3>Consulta</h3>
		                    <p>Brindar y recomendar las acciones a seguir</p>
		                    <a class="big-link-1" href="services.html">Ir</a>
		                </div>
	                </div>
	                <div class="col-sm-4">
		                <div class="service wow fadeInUp">
		                    <div class="service-icon"><i class="fa fa-table"></i></div>
		                    <h3>Citas</h3>
		                    <p>Permite llevar el control de las atenciones programadas</p>
		                    <a class="big-link-1" href="services.html">Ir</a>
		                </div>
	                </div>	                
	            </div>
	        </div>
        </div>

        <!-- Latest work -->
        <div class="work-container">
	        <div class="container">
	        	<div class="row">
		            <div class="col-sm-12 work-title wow fadeIn">
		                <h2>Administrar</h2>
		            </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-3">
		                <div class="service wow fadeInUp">
		                    <div class="service-icon"><i class="fa fa-hospital-o"></i></div>
		                    <h3>Unidades de Salud</h3>
		                    <p>La administración de Unidades de Salud</p>
		                    <a class="big-link-1" href="">Ir</a>
		                </div>
					</div>
					<div class="col-sm-3">
		                <div class="service wow fadeInDown">
		                    <div class="service-icon"><i class="fa fa-medkit"></i></div>
		                    <h3>Tratamientos</h3>
		                    <p>Administración de tratamientos médicos</p>
		                    <a class="big-link-1" href="">Ir</a>
		                </div>
	                </div>
	                <div class="col-sm-3">
		                <div class="service wow fadeInUp">
		                    <div class="service-icon"><i class="fa fa-file-text-o"></i></div>
		                    <h3>Diagnósticos</h3>
		                    <p>Administración de diagnósticos médicos</p>
		                    <a class="big-link-1" href="">Ir</a>
		                </div>
	                </div>
                    <div class="col-sm-3">
		                <div class="service wow fadeInUp">
		                    <div class="service-icon"><i class="fa fa-eye"></i></div>
		                    <h3>Acerca de</h3>
		                    <p>Conoce el sistema y sus creadores</p>
		                    <a class="big-link-1" href="">Ir</a>
		                </div>
	                </div>
	            </div>
	        </div>
        </div>

        <!-- Testimonials -->
        <div class="testimonials-container">
	        <div class="container">
	        	<div class="row">
		            <div class="col-sm-12 testimonials-title wow fadeIn">
		                <h2>Recomendaciones</h2>
		            </div>
	            </div>
	            <div class="row">
	                <div class="col-sm-10 col-sm-offset-1 testimonial-list">
	                	<div role="tabpanel">
	                		<!-- Tab panes -->
	                		<div class="tab-content">
	                			<div role="tabpanel" class="tab-pane fade in active" id="tab1">
	                				<div class="testimonial-image">
	                					<img src="imagenes/3.png" alt="" data-at2x="imagenes/3.png">
	                				</div>
	                				<div class="testimonial-text">
		                                <p>
		                                	"Siempre trata de trabajar de la mejor manera, motivado y pensando en el bienestar de los pacientes, en el uso del sistema recuerda la forma adecuada de utilización"<br>       	
		                                </p>
	                                </div>
	                			</div>
	                			<div role="tabpanel" class="tab-pane fade" id="tab2">
	                				<div class="testimonial-image">
	                					<img src="imagenes/4.png" alt="" data-at2x="imagenes/4.png">
	                				</div>
	                				<div class="testimonial-text">
		                                <p>
		                                	"Cualquier duda o consulta referente al uso y manejo del sistema no dudes en consultar al administrador"<br>		                                	
		                                </p>
	                                </div>
	                			</div>
	                			<div role="tabpanel" class="tab-pane fade" id="tab3">
	                				<div class="testimonial-image">
	                					<img src="imagenes/5.png" alt="" data-at2x="imagenes/5.png">
	                				</div>
	                				<div class="testimonial-text">
		                                <p>
		                                	"Todas las acciones realizadas dentro del sistema quedan registradas en el apartado de bitácora"<br>
		                                	<a href="#">Ir a bitácora</a>
		                                </p>
	                                </div>
	                			</div>	                			
	                		</div>
	                		<!-- Nav tabs -->
	                		<ul class="nav nav-tabs" role="tablist">
	                			<li role="presentation" class="active">
	                				<a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"></a>
	                			</li>
	                			<li role="presentation">
	                				<a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"></a>
	                			</li>
	                			<li role="presentation">
	                				<a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"></a>
	                			</li>	                			
	                		</ul>
	                	</div>
	                </div>
	            </div>
	        </div>
        </div> 

         <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 footer-box wow fadeInUp">
                        <h4>Acerca de nosotros</h4>
                        <div class="footer-box-text">
	                        <p>
	                        	Este sistema fué desarrollado por estudiantes de la UES FMP para el Hospital Nacional Santa Gertrudis de la ciudad de San Vicente, utilizando tecnologías de desarrollo libre
	                        </p>	                        
                        </div>
                    </div>
                    <div class="col-sm-3 footer-box wow fadeInDown">
                        <h4>HNSG</h4>
                        <div class="footer-box-text">
                        	<p>Ubicado entre la 2a Avenida Sur, 4ª Calle Oriente, 6ª Avenida Sur y 8ª Calle Oriente del Barrio San Francisco de la Ciudad de San Vicente; dispone de una superficie de 30, 112.04 Mtrs². Dentro de sus instalaciones se cuenta con cinco edificios A, B, C, D, edificio de Citología y Patología que albergan el personal administrativo, hospitalización y servicios de apoyo.</p>                        	
                        </div>
                    </div>
                   <div class="col-sm-3 footer-box wow fadeInUp">
                        <h4>Misión HNSG</h4>
                        <div class="footer-box-text">
	                        <p>
	                        	Somos un Hospital Nacional Departamental, referente de la RIISS San Vicente, que ofrece servicios médicos en las cuatro áreas básicas y algunas de sus subespecialidades, en forma oportuna y gratuita a los habitantes del departamento y alrededores
	                        </p>	                        
                        </div>
                    </div>
                    <div class="col-sm-3 footer-box wow fadeInUp">
                        <h4>Visión HNSG</h4>
                        <div class="footer-box-text">
	                        <p>
	                        	Ser  el Hospital referente de la RIISS San Vicente,  que ofrezca servicios de salud,  fundamentado en atención  primaria  en salud;  que  promueva el desarrollo de   habilidades y destrezas  de su recurso humano para alcanzar servicios  eficaces   y   de óptima calidad   así como ampliar  la oferta de servicios médicos  con algunas subespecialidades, horarios de atención  y  de  servicios de apoyo  tales como Banco de Sangre, Laboratorio de Patología entre otros,  que le permita  dar el salto de calidad acorde  a  la política de descentralización del Ministerio de Salud
	                        </p>	                        
                        </div>
                    </div>
                </div>
                <div class="row">
                	<div class="col-sm-12 wow fadeIn">
                		<div class="footer-border"></div>
                	</div>
                </div>                
            </div>
        </footer>      
@stop