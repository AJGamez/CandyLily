@extends('menu')
@section('contenido')

<style type="text/css">
/* Hiding the checkbox, but allowing it to be focused */
.badgebox {
    opacity: 0;
}

.badgebox + .badge {
    /* Move the check mark away when unchecked */
    text-indent: -999999px;
    /* Makes the badge's width stay the same checked and unchecked */
    width: 27px;
}

.badgebox:focus + .badge {
    /* Set something to make the badge looks focused */
    /* This really depends on the application, in my case it was: */

    /* Adding a light border */
    box-shadow: inset 0px 0px 5px;
    /* Taking the difference out of the padding */
}

.badgebox:checked + .badge {
    /* Move the check mark back when checked */
    text-indent: 0;
}
</style>

			<div class="row well">
                <div class="col-md-1"></div>
               	<div class="col-md-10 thumbnail">

            	<div class="page-header">
            		<h3>Datos de <span class="violet">Usuario</span></h3>
				</div>

                @if (count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="row">
                		<div class="col-md-4">
                			<div class="form-group has-feedback">
                				<label>Nombre:</label>
                				<div class="input-group input-group-sm">
                					<span class="input-group-addon "><span class="fa fa-user"></span></span>
                    				<input type="text" onFocus="this.blur()" class="form-control" id="name" name="name" value="{{$usuario->name}}">
                    				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    			</div>
                    		</div>
                    	</div>

                    	<div class="col-md-4">
                			<div class="form-group has-feedback">
                				<label>Apellido:</label>
                				<div class="input-group input-group-sm">
                    				<span class="input-group-addon "><span class="fa fa-user"></span></span>
                    				<input onFocus="this.blur()" name="apellido" id="apellido" type="text" class="form-control" value="{{$usuario->apellido}}">
                    				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                				</div>
           					</div>
                    	</div>

                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>DUI:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-bars"></span></span>
                                    <input onFocus="this.blur()" name="dui" id="dui" type="text" class="form-control" value="{{$usuario->dui}}">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                </div>

                <div class="row">
                		<div class="col-md-4">
                			<div class="form-group has-feedback">
                				<label>Cargo:</label>
                                    <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="glyphicon glyphicon-briefcase"></span></span>
                                    <?php
                                        $cargo=DB::select('select * from cargo where idcargo='.$usuario->idcargo);
                                    ?>
                                    @foreach ($cargo as $car) @endforeach

                                    <input onFocus="this.blur()" name="cargo" id="cargo" type="text" class="form-control" value="{{$car->nombre}}">
                                </div>
           					</div>
                    	</div>

                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Teléfono:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-fax"></span></span>
                                    <input type="text" onFocus="this.blur()" class="form-control" id="telefono" name="telefono" value="{{$usuario->telefono}}">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>E-mail:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-envelope"></span></span>
                                    <input onFocus="this.blur()" name="email" id="email" type="text" class="form-control" value="{{$usuario->email}}">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>

                		</div>

                		<div class="row">
                            <div class="col-md-8">
                                <div class="form-group has-feedback">
                                    <label>Dirección:</label>
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon "><span class="fa fa-home"></span></span>
                                        <input onFocus="this.blur()" name="direccion" id="direccion" type="text" class="form-control" value="{{$usuario->direccion}}">
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group has-feedback">
                                    <label>Estado Civil:</label>
                                    	<div class="input-group input-group-sm">
		                                    <span class="input-group-addon "><span class="glyphicon glyphicon-link"></span></span>
		                                    @if($usuario->civil==1)
		                                    <input onFocus="this.blur()" name="civil" id="civil" type="text" class="form-control" value="SOLTER@">
		                                    @elseif($usuario->civil==2)
		                                    <input onFocus="this.blur()" name="civil" id="civil" type="text" class="form-control" value="CASAD@">
		                                    @elseif($usuario->civil==3)
		                                    <input onFocus="this.blur()" name="civil" id="civil" type="text" class="form-control" value="VIUD@">
		                                    @elseif($usuario->civil==4)
		                                    <input onFocus="this.blur()" name="civil" id="civil" type="text" class="form-control" value="DIVORCIAD@">
		                                    @elseif($usuario->civil==5)
		                                    <input onFocus="this.blur()" name="civil" id="civil" type="text" class="form-control" value="ACOMPAÑAD@">
		                                    @endif
		                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
		                                </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group has-feedback">
                                    <label>Sexo:</label>
                                    	<div class="input-group input-group-sm">
		                                    <span class="input-group-addon "><span class="glyphicon glyphicon-user"></span></span>
		                                    @if($usuario->sexo==1)
		                                    <input onFocus="this.blur()" name="sexo" id="sexo" type="text" class="form-control" value="MASCULINO">
		                                    @elseif($usuario->sexo==2)
		                                    <input onFocus="this.blur()" name="sexo" id="sexo" type="text" class="form-control" value="FEMENINO">
		                                    @endif
		                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
		                                </div>
                                </div>
                            </div>
                		</div>

                					<div class="row">
                                        <div class="col-md-4">
                                            <label>Nombre de Usuario:</label>
                                            <div class="form-group has-feedback">
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                                    <input type="text" onFocus="this.blur()" class="form-control" id="username" name="username" value="{{$usuario->username}}">
                                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
			                                <div class="form-group has-feedback">
			                                    <label>Estado:</label>
			                                    <div class="input-group input-group-sm">
			                                        <span class="input-group-addon "><span class="glyphicon glyphicon-off"></span></span>
					                                @if($usuario->estado==0)
					                                <input onFocus="this.blur()" name="estado" id="estado" type="text" class="form-control" value="INACTIVO">
					                                @elseif($usuario->estado==1)
					                                <input onFocus="this.blur()" name="estado" id="estado" type="text" class="form-control" value="ACTIVO">
					                                @endif
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
                		<div class="col-md-5"></div>


                		<div class="col-md-2">
                            <button class="btn btn-sm btn-success btn-block" name="guardar" id="guardar" type="button">
                                <span class="glyphicon glyphicon-print"></span> Imprimir
                            </button>
                		</div>
                		<div class="col-md-5"></div>
                	</div>
            		</div>
                    <div class="col-md-1"></div>
            	</div>
@endsection
