@extends('titulo')
@section('centro')          
          <!-- form action="login" method="post">
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" -->
          <form role="form" method="POST" action="{{ url('/login') }}">
          {{ csrf_field() }}
          
          <div class="row well">
            <div class="col-md-1"></div>
            <div class="col-md-10 thumbnail">

              <div class="page-header">
                <h3>Inicio de <span class="violet">Sesión</span></h3>
              </div>

              <div class="row">
                <div class="col-md-2"></div>

                <div class="col-md-4">
                  <label>Correo:</label>
                  <div class="form-group has-feedback">
                    <div class="input-group input-group-sm">
                      <span class="input-group-addon "><span class="fa fa-envelope"></span></span>
                      <input type="text" class="form-control" id="email" name="email" placeholder="example@outlook.com">
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <label>Contraseña:</label>
                  <div class="form-group has-feedback">
                    <div class="input-group input-group-sm">
                    <span class="input-group-addon "><span class="fa fa-user"></span></span>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  </div>
                </div>
              </div>

              <div class="col-md-2"></div>
                                   
            </div>                  

                  <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                      <div class="footer-border"></div>
                    </div>
                  </div>

                  <br>

                  <div class="row">                                                
                        <div class="col-md-4">
                            <a class="btn btn-link" href="{{ url('/password/reset') }}">¿Has olvidado tu contraseña?</a>
                        </div>
                        
                    <div class="col-md-2">
                            <button class="btn btn-sm btn-info btn-block" name="cancelar" id="cancelar" type="reset">
                                <span class="glyphicon glyphicon-remove"></span> Cancelar
                            </button>
                    </div>

                    <div class="col-md-2">
                            <button class="btn btn-sm btn-success btn-block" name="ingresar" id="ingresar" type="submit">
                                <span class="glyphicon glyphicon-arrow-right"></span> Ingresar
                            </button>
                    </div>
                    <div class="col-md-4"> </div>
                  </div>

          </div>
        </div>
        </form>          
@endsection