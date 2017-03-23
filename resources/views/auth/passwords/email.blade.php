@extends('titulo')
@section('centro')
    
    <div class="row well">
            <div class="col-md-1"></div>
            <div class="col-md-10 thumbnail">

              <div class="page-header">
                <h3>Recuperar <span class="violet">Contraseña</span></h3>
              </div>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">                
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-md-4"></div>

                    <div class="col-md-4">
                        <div class="item form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                      <label>Correo:</label>
                      <div class="form-group has-feedback">
                        <div class="input-group input-group-sm">
                          <span class="input-group-addon "><span class="fa fa-envelope"></span></span>
                          <input type="email" class="form-control" id="email" name="email" placeholder="example@outlook.com" requiered value="{{ old('email') }}">
                          <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>                        
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
                        <div class="col-md-5" align="left">
                            <h6>* Se enviará la contraseña a su correo electrónico</h6> 
                        </div>                        

                    <div class="col-md-2">
                            <button class="btn btn-sm btn-success btn-block" name="ingresar" id="ingresar" type="submit">
                                <span class="glyphicon glyphicon-arrow-right"></span> Enviar Correo
                            </button>
                    </div>

                    <div class="col-md-5"> </div>
                  </div>
                  
              </form>
          </div>
        </div>
@endsection
