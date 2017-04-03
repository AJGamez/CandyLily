@extends('titulo')
@section('centro')

  <div class="row well">
    <div class="col-md-1"></div>
    <div class="col-md-10 thumbnail">

      <div class="page-header">
        <h3> <span class="violet">Nueva Contraseña</span></h3>
      </div>




      <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
          {{ csrf_field() }}
          <input type="hidden" name="token" value="{{ $token }}">

                <div class="row">
                  <div class="col-md-4"></div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <div class="col-md-4">
                            <label>E-Mail </label>
                            <div class="form-group has-feedback">
                              <div class="input-group input-group-sm">
                                <span class="input-group-addon "><span class="fa fa-envelope"></span></span>
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                              </div>
                            </div>
                          </div>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-4"></div>
                        </div>


                    <div class="row">
                      <div class="col-md-4"></div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          <div class="col-md-4">
                            <label>Contraseña</label>
                            <div class="form-group has-feedback">
                              <div class="input-group input-group-sm">
                                <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                <input id="password" type="password" class="form-control" name="password">
                                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                              </div>
                            </div>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                          <div class="col-md-4"></div>
                        </div>

                        <div class="row">
                          <div class="col-md-4"></div>
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                              <div class="col-md-4">
                                <label>Confirmar Contraseña</label>
                                <div class="form-group has-feedback">
                                  <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                  </div>
                                </div>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
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
                              <div class="col-md-4">

                              </div>

                          <div class="col-md-1">

                          </div>

                          <div class="col-md-2">
                                  <button class="btn btn-sm btn-success btn-block" name="ingresar" id="ingresar" type="submit">
                                      <span class="fa fa-btn fa-refresh"></span> Guardar
                                  </button>
                          </div>
                          <div class="col-md-1">

                          </div>
                          <div class="col-md-4"> </div>
                        </div>


                      <?php /*
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-refresh"></i> Reset Password
                                </button>
                            </div>
                        </div>
                       */?>
                    </form>
                </div>

@endsection
