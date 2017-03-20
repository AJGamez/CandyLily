

<script type="text/javascript">
function generarc(longitud) {
  long=parseInt(longitud);
  var caracteres = "0ab1cd2ef3gh4ij5km6np7qr8tu9vw0xy1zA2BC3DE4FG5HI6JK7LM8NP9QR1TU2VW3XY4Z5";
  var contraseña = "";
  for (i=0; i<long; i++) contraseña += caracteres.charAt(Math.floor(Math.random()*caracteres.length));
  return contraseña;
}

function clik($k) {
    document.getElementById("password").value=generarc('6');
    document.getElementById("username").value=$k;
}

function soloNumeros(e){
    //var del=document.getElementById("telefono").value;
    //var l = del.length;

    var key = window.Event ? e.which : e.keyCode

    /*if(l<=1) {
        return (key == 50 && key == 54 && key == 55)
    } else { */
        return (key >= 48 && key <= 57)
    //}
}

function vernum(){
    var del=document.getElementById("telefono").value;
    var l=del.length;

    if((l==1) && (del!=2 && del!=6 && del!=7)){
        document.getElementById("telefono").value="";
    }
}
</script>
@extends('menu')
@section('contenido')

                <?php
                    $nuevoId=DB::select('select * from users order by id asc');
                    //foreach ($nuevoId as $key) { }
                    //$nuevoId = "USER0".$key;
                ?>

                @foreach ($nuevoId as $key) @endforeach
                <?php
                    $kk=$key->id+1;
                    $ke="USER0".$kk;
                ?>

    <body onLoad="clik('<?php echo $ke ?>')">
			<div class="row well">
                <div class="col-md-1"></div>
               	<div class="col-md-10 thumbnail">

            	<div class="page-header">
            		<h3>Nuevo <span class="violet">Usuario</span></h3>
				</div>

                {!!Form::open(array('url'=>'usuario', 'method'=>'POST', 'autocomplete'=>'off'))!!}
                {{Form::token()}}

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
                		<div class="col-md-4">
                			<div class="form-group has-feedback">
                				<label>Nombre:</label>
                				<div class="input-group input-group-sm">
                					<span class="input-group-addon "><span class="fa fa-user"></span></span>
                    				<input type="text" class="form-control" id="name" name="name" placeholder="Nombre" onKeyUp="this.value=this.value.toUpperCase();">
                    				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    			</div>
                    		</div>
                    	</div>

                    	<div class="col-md-4">
                			<div class="form-group has-feedback">
                				<label>Apellido:</label>
                				<div class="input-group input-group-sm">
                    				<span class="input-group-addon "><span class="fa fa-user"></span></span>
                    				<input name="apellido" id="apellido" type="text" class="form-control" placeholder="Apellido" onKeyUp="this.value=this.value.toUpperCase();">
                    				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                				</div>
           					</div>
                    	</div>

                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>DUI:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-bars"></span></span>
                                    <input name="dui" id="dui" type="text" onKeyPress="return soloNumeros(event)" class="form-control" placeholder="DUI" onKeyUp="NDUI('dui');">
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
                                    <span class="input-group-addon "><span class="glyphicon glyphicon-list"></span></span>
                                    <select class="form-control" name="cargo" id="cargo" required>
                                    <?php
                                        $cargo=DB::select('select * from cargo');
                                    ?>
                                    @foreach ($cargo as $car)

                                    <option value="{{ $car->idcargo }}">{{ $car->nombre }}</option>

                                    @endforeach
                                </select></div>
           					</div>
                    	</div>

                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Teléfono:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-fax"></span></span>
                                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" onkeyup="vernum(); TELEFONO('telefono');" onKeyPress="return soloNumeros(event)">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
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
                            <div class="col-md-8">
                                <div class="form-group has-feedback">
                                    <label>Dirección:</label>
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon "><span class="fa fa-home"></span></span>
                                        <input name="direccion" id="direccion" type="text" class="form-control" placeholder="Dirección" onKeyUp="this.value=this.value.toUpperCase();">
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group has-feedback">
                                    <label>Estado Civil:</label>
                                        <div class="input-group input-group-sm">
                                        <span class="input-group-addon "><span class="glyphicon glyphicon-list"></span></span>
                                        <select class="form-control" name="civil" id="civil" required>
                                        <option value="1">SOLTER@</option>
                                        <option value="2">CASAD@</option>
                                        <option value="3">VIUD@</option>
                                        <option value="4">DIVORCIAD@</option>
                                        <option value="5">ACOMPAÑAD@</option>
                                    </select></div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group has-feedback">
                                    <label>Sexo:</label>
                                        <div class="input-group input-group-sm">
                                        <span class="input-group-addon "><span class="glyphicon glyphicon-list"></span></span>
                                        <select class="form-control" name="sexo" id="sexo" required>
                                        <option value="1">MASCULINO</option>
                                        <option value="2">FEMENINO</option>
                                    </select></div>
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
                		<div class="col-md-4"></div>
                		<div class="col-md-2">
                            <button class="btn btn-sm btn-info btn-block" name="cancelar" id="cancelar" type="reset">
                                <span class="glyphicon glyphicon-remove"></span> Cancelar
                            </button>
                		</div>

                		<div class="col-md-2">
                            <button class="btn btn-sm btn-success btn-block" name="guardar" id="guardar" type="button" data-toggle="modal" data-target="#terminar">
                                <span class="glyphicon glyphicon-arrow-right"></span> Siguiente
                            </button>
                		</div>
                		<div class="col-md-4"></div>
                	</div>

                    <div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="terminar">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>

                                    <h3>Datos <span class="violet">importantes</span></h3>
                                </div>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-2"></div>

                                        <div class="col-md-4">
                                            <label>Nombre de Usuario:</label>
                                            <div class="form-group has-feedback">
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                                    <input type="text" class="form-control" id="username" name="username" onFocus="this.blur()">
                                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label>Contraseña:</label>
                                            <div class="form-group has-feedback">
                                                <div class="input-group input-group-sm">
                                                    <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                                    <input type="text" class="form-control" id="password" name="password" onFocus="this.blur()">
                                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2"></div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <div class="row">
                                        <div class="col-md-10" align="left">
                                            <h6>* Para terminar el guardado presione "Registrar"</h6>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-sm btn-success btn-block">
                                            <span class="glyphicon glyphicon-edit"></span> Registrar</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                	{!!Form::close()!!}
            		</div>
                    <div class="col-md-1"></div>
            	</div>
                </body>

@endsection
