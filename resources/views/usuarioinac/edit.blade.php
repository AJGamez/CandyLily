@extends('menu')
@section('contenido')
        <!-- Slider -->


    <div class="row well">
          <div class="col-md-1"></div>
                 	<div class="col-md-10 thumbnail">

              	<div class="page-header">
              		<h3>Cambio de : <span class="violet">Usuario y Contraseña</span></h3>
  				          </div>
                  {!!Form::model($usuario,['method'=>'PATCH','route'=>['usuarioinac.update', $usuario->id]])!!}
                  {{Form::token()}}

                  <input type="hidden" name="bandera" value="1"><?php  // CAMPO PARA DIFERENCIAR EN LA FUNCION UPDATE DE USUARIOCONTROLLER?>
                  @if (count($errors)>0)
                      <div class="alert alert-danger" align="left">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{$error}}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                  <div class="row">
                    <div class="col-md-4"></div>
                		<div class="col-md-4">
                			<div class="form-group has-feedback">
                				<label>Nombre Usuario:</label>
                				<div class="input-group input-group-sm">
                					<span class="input-group-addon "><span class="fa fa-user"></span></span>
                    				<input type="text" class="form-control" id="username" value="{{$usuario->username}}" name="username" placeholder="Nombre Usuario" onkeyup="this.value=this.value.toUpperCase();">
                    				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    			</div>
                    		</div>
                    	</div>
                    <div class="col-md-4"></div>
                    </div>



                        <div class="row">
                          <div class="col-md-4"></div>
                      		<div class="col-md-4">
                      			<div class="form-group has-feedback">
                      				<label>Contraseña Actual:</label>
                      				<div class="input-group input-group-sm">
                      					<span class="input-group-addon "><span class="fa fa-user"></span></span>
                          				<input type="password" class="form-control" id="contra"  name="contra">
                          				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                          			</div>
                          		</div>
                          	</div>
                          <div class="col-md-4"></div>
                          </div>

                          <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                              <div class="form-group has-feedback">
                                <label> Nueva Contraseña:</label>
                                <div class="input-group input-group-sm">
                                  <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                    <input type="password" class="form-control" id="password"  name="password">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                  </div>
                                </div>
                              </div>
                            <div class="col-md-4"></div>
                            </div>

                            <div class="row">
                              <div class="col-md-4"></div>
                              <div class="col-md-4">
                                <div class="form-group has-feedback">
                                  <label>Confirmar Contraseña:</label>
                                  <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                      <input type="password" class="form-control" id="password_confirmation"  name="password_confirmation">
                                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                  </div>
                                </div>
                              <div class="col-md-4"></div>
                              </div>

                              <div class="row">
                            		<div class="col-sm-12 wow fadeIn">
                            			<div class="footer-border"></div>
                            		</div>
                            	</div>

                            	<br>

                              <div class="row">
                            		<div class="col-md-4"></div>
                            		<div class="col-md-2">
                            			<a href="index">

                                        <button class="btn btn-sm btn-success btn-block" name="guardar" id="guardar" type="submit" >
                                            <span class="glyphicon glyphicon-edit"></span> Registrar
                                        </button>

                                        </a>
                            		</div>
                                <div class="col-md-2">

                  								<a href={!! asset("/showAuth/".$usuario->id) !!}>

                                    <button class="btn btn-sm btn-info btn-block" name="cancelar" id="cancelar" >
                                        <span class="glyphicon glyphicon-remove"></span>Cancelar
                                    </button></a>

                            		</div>
                            		<div class="col-md-4"></div>
                            	</div>

                              <div class="col-md-1"></div>
                        		</div>


                {!!Form::close()!!}
            </div>


@endsection
