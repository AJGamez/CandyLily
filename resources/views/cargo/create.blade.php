@extends('menu')
@section('contenido')
        <!-- Slider -->
<style>
        .checkbox {
    padding-left: 20px; }
.checkbox label {
    display: inline-block;
    position: relative;
    padding-left: 5px; }
.checkbox label::before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 17px;
    height: 17px;
    left: 0;
    margin-left: -20px;
    border: 1px solid #cccccc;
    border-radius: 3px;
    background-color: #fff;
    -webkit-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
    -o-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
    transition: border 0.15s ease-in-out, color 0.15s ease-in-out; }
.checkbox label::after {
    display: inline-block;
    position: absolute;
    width: 16px;
    height: 16px;
    left: 0;
    top: 0;
    margin-left: -20px;
    padding-left: 3px;
    padding-top: 1px;
    font-size: 11px;
    color: #555555; }
.checkbox input[type="checkbox"] {
    opacity: 0; }
.checkbox input[type="checkbox"]:focus + label::before {
    outline: thin dotted;
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px; }
.checkbox input[type="checkbox"]:checked + label::after {
    font-family: 'FontAwesome';
    content: "\f00c"; }
.checkbox input[type="checkbox"]:disabled + label {
    opacity: 0.65; }
.checkbox input[type="checkbox"]:disabled + label::before {
    background-color: #eeeeee;
    cursor: not-allowed; }
.checkbox.checkbox-circle label::before {
    border-radius: 50%; }
.checkbox.checkbox-inline {
    margin-top: 0; }

.checkbox-primary input[type="checkbox"]:checked + label::before {
    background-color: #428bca;
    border-color: #428bca; }
.checkbox-primary input[type="checkbox"]:checked + label::after {
    color: #fff; }

.checkbox-danger input[type="checkbox"]:checked + label::before {
    background-color: #d9534f;
    border-color: #d9534f; }
.checkbox-danger input[type="checkbox"]:checked + label::after {
    color: #fff; }

.checkbox-info input[type="checkbox"]:checked + label::before {
    background-color: #5bc0de;
    border-color: #5bc0de; }
.checkbox-info input[type="checkbox"]:checked + label::after {
    color: #fff; }

.checkbox-warning input[type="checkbox"]:checked + label::before {
    background-color: #f0ad4e;
    border-color: #f0ad4e; }
.checkbox-warning input[type="checkbox"]:checked + label::after {
    color: #fff; }

.checkbox-success input[type="checkbox"]:checked + label::before {
    background-color: #5cb85c;
    border-color: #5cb85c; }
.checkbox-success input[type="checkbox"]:checked + label::after {
    color: #fff; }

.radio {
    padding-left: 20px; }
.radio label {
    display: inline-block;
    position: relative;
    padding-left: 5px; }
.radio label::before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 17px;
    height: 17px;
    left: 0;
    margin-left: -20px;
    border: 1px solid #cccccc;
    border-radius: 50%;
    background-color: #fff;
    -webkit-transition: border 0.15s ease-in-out;
    -o-transition: border 0.15s ease-in-out;
    transition: border 0.15s ease-in-out; }
.radio label::after {
    display: inline-block;
    position: absolute;
    content: " ";
    width: 11px;
    height: 11px;
    left: 3px;
    top: 3px;
    margin-left: -20px;
    border-radius: 50%;
    background-color: #555555;
    -webkit-transform: scale(0, 0);
    -ms-transform: scale(0, 0);
    -o-transform: scale(0, 0);
    transform: scale(0, 0);
    -webkit-transition: -webkit-transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);
    -moz-transition: -moz-transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);
    -o-transition: -o-transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);
    transition: transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33); }
.radio input[type="radio"] {
    opacity: 0; }
.radio input[type="radio"]:focus + label::before {
    outline: thin dotted;
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px; }
.radio input[type="radio"]:checked + label::after {
    -webkit-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1); }
.radio input[type="radio"]:disabled + label {
    opacity: 0.65; }
.radio input[type="radio"]:disabled + label::before {
    cursor: not-allowed; }
.radio.radio-inline {
    margin-top: 0; }

.radio-primary input[type="radio"] + label::after {
    background-color: #428bca; }
.radio-primary input[type="radio"]:checked + label::before {
    border-color: #428bca; }
.radio-primary input[type="radio"]:checked + label::after {
    background-color: #428bca; }

.radio-danger input[type="radio"] + label::after {
    background-color: #d9534f; }
.radio-danger input[type="radio"]:checked + label::before {
    border-color: #d9534f; }
.radio-danger input[type="radio"]:checked + label::after {
    background-color: #d9534f; }

.radio-info input[type="radio"] + label::after {
    background-color: #5bc0de; }
.radio-info input[type="radio"]:checked + label::before {
    border-color: #5bc0de; }
.radio-info input[type="radio"]:checked + label::after {
    background-color: #5bc0de; }

.radio-warning input[type="radio"] + label::after {
    background-color: #f0ad4e; }
.radio-warning input[type="radio"]:checked + label::before {
    border-color: #f0ad4e; }
.radio-warning input[type="radio"]:checked + label::after {
    background-color: #f0ad4e; }

.radio-success input[type="radio"] + label::after {
    background-color: #5cb85c; }
.radio-success input[type="radio"]:checked + label::before {
    border-color: #5cb85c; }
.radio-success input[type="radio"]:checked + label::after {
    background-color: #5cb85c; }
</style>


    <div class="row well">
          <div class="col-md-1"></div>
                 	<div class="col-md-10 thumbnail">

              	<div class="page-header">
              		<h3>Nuevo <span class="violet">Cargo</span></h3>
  				          </div>
                    {!!Form::open(array('url'=>'cargo', 'method'=>'POST', 'autocomplete'=>'off'))!!}
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
                    <div class="col-md-4"></div>
                		<div class="col-md-4">
                			<div class="form-group has-feedback">
                				<label>Nombre:</label>
                				<div class="input-group input-group-sm">
                					<span class="input-group-addon "><span class="fa fa-user"></span></span>
                    				<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" onkeyup="this.value=this.value.toUpperCase();">
                    				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    			</div>
                    		</div>
                    	</div>
                    <div class="col-md-4"></div>
                    </div>

                    <div class="page-header">
                      <h3><span class="violet">Administración de Permisos</span></h3>
                        </div>
                    <div class="row">
                        <div class="col-md-2 "></div>
                        <div class="col-md-3 thumbnail">
                        <div class="page-header">
                      		<h5><span class="violet">Paciente</span></h5>
          				       </div>

                         <table class="table table-striped table-bordered table-condensed table-hover">
                   				<thead class="violet">
                   					<td>Submodulo</td>

                              <td align="center"><div> <a href=""> <span title="Ver submodulo"><span class="glyphicon glyphicon-eye-open"></span></span> </a> </div></td>
                   						<td align="center"><div> <a href=""> <span title="Modificar Submodulo"><span class="glyphicon glyphicon-cog"></span></span> </a> </div></td>

                   				</thead>
               					<tr>
                 						<td>Expediente</td>
                 						<td align="center"><div class="checkbox checkbox-primary"><input id="verpaciente" name='verpaciente' type="checkbox" checked> <label for="verpaciente"></label></div></td>
                            <td align="center"><div class="checkbox checkbox-primary"><input id="modpaciente" name="modpaciente" type="checkbox" checked> <label for="modpaciente"></label></div></td>
                 				</tr>
                        <tr>
                 						<td>Consultas</td>
                 						<td align="center"><div class="checkbox checkbox-primary"><input id="verconsulta" name="verconsulta" type="checkbox" checked> <label for="verconsulta"></label></div></td>
                            <td align="center"><div class="checkbox checkbox-primary"><input id="modconsulta" name="modconsulta" type="checkbox" checked> <label for="modconsulta"></label></div></td>
                 				</tr>
                        <tr>
                 						<td align="center">Citas</td>
                 						<td align="center"><div class="checkbox checkbox-primary"><input id="vercitas" name="vercitas" type="checkbox" checked> <label for="vercitas"></label></div></td>
                            <td align="center"><div class="checkbox checkbox-primary"><input id="modcitas" name="modcitas" type="checkbox" checked> <label for="modcitas"></label></div></td>
                 				</tr>
                   			</table>

                      </div>

                      <div class="col-md-2"></div>

                      <div class="col-md-3 thumbnail">
                        <div class="page-header">
                      		<h5><span class="violet">Administración</span></h5>
          				       </div>
                         <table class="table table-striped table-bordered table-condensed table-hover">
                   				<thead class="violet">
                   					<td>Submodulo</td>

                              <td align="center"><div> <a href=""> <span title="Ver submodulo"><span class="glyphicon glyphicon-eye-open"></span></span> </a> </div></td>
                   						<td align="center"><div> <a href=""> <span title="Modificar Submodulo"><span class="glyphicon glyphicon-cog"></span></span> </a> </div></td>

                   				</thead>
               					<tr>
                 						<td>Unidades de Salud</td>
                 						<td align="center"><div class="checkbox checkbox-primary"><input id="verunidad" name="verunidad" type="checkbox" checked> <label for="verunidad"></label></div></td>
                            <td align="center"><div class="checkbox checkbox-primary"><input id="modunidad" name="modunidad" type="checkbox" checked> <label for="modunida"></label></div></td>
                 				</tr>
                        <tr>
                 						<td>Tratamientos</td>
                 						<td align="center"><div class="checkbox checkbox-primary"><input id="vertratamiento" name="vertratamiento" type="checkbox" checked> <label for="vertratamiento"></label></div></td>
                            <td align="center"><div class="checkbox checkbox-primary"><input id="modtratamiento" name="modtratamiento" type="checkbox" checked> <label for="modtratamiento"></label></div></td>
                 				</tr>
                        <tr>
                 						<td align="center">Diagnósticos</td>
                 						<td align="center"><div class="checkbox checkbox-primary"><input id="verdiagnostico" name="verdiagnostico" type="checkbox" checked> <label for="verdiagnostico"></label></div></td>
                            <td align="center"><div class="checkbox checkbox-primary"><input id="moddiagnostico"  name="moddiagnostico" type="checkbox" checked> <label for="moddiagnostico"></label></div></td>
                 				</tr>
                   			</table>

                      </div>

                    <div class="col-md-2 "></div>
                  </div>

                    <br>
                    <div class="row">
                        <div class="col-md-2 "></div>
                      <div class="col-md-3 thumbnail">
                        <div class="page-header">
                      		<h5><span class="violet">RRHH</span></h5>
          				          </div>

                            <table class="table table-striped table-bordered table-condensed table-hover">
                      				<thead class="violet">
                      					<td>Submodulo</td>

                                 <td align="center"><div> <a href=""> <span title="Ver submodulo"><span class="glyphicon glyphicon-eye-open"></span></span> </a> </div></td>
                      						<td align="center"><div> <a href=""> <span title="Modificar Submodulo"><span class="glyphicon glyphicon-cog"></span></span> </a> </div></td>

                      				</thead>
                  					<tr>
                    						<td>Usuarios</td>
                    						<td align="center"><div class="checkbox checkbox-primary"><input id="verusuario" name="verusuario" type="checkbox" checked> <label for="verusuario"></label></div></td>
                               <td align="center"><div class="checkbox checkbox-primary"><input id="modusuario" name="modusuario" type="checkbox" checked> <label for="modusuario"></label></div></td>
                    				</tr>
                           <tr>
                    						<td>Cargos</td>
                    						<td align="center"><div class="checkbox checkbox-primary"><input id="vercargo" name="vercargo" type="checkbox" checked> <label for="vercargo"></label></div></td>
                               <td align="center"><div class="checkbox checkbox-primary"><input id="modcargo" name="modcargo" type="checkbox" checked> <label for="modcargo"></label></div></td>
                    				</tr>

                      			</table>

                      </div>

                      <div class="col-md-2"></div>

                      <div class="col-md-3 thumbnail">
                        <div class="page-header">
                      		<h5><span class="violet">Seguridad</span></h5>
                        </div>
                            <table class="table table-striped table-bordered table-condensed table-hover">
                      				<thead class="violet">
                      					<td>Submodulo</td>
                                 <td align="center"><div> <a href=""> <span title="Ver submodulo"><span class="glyphicon glyphicon-eye-open"></span></span> </a> </div></td>
                      						<td align="center"><div> <a href=""> <span title="Modificar Submodulo"><span class="glyphicon glyphicon-cog"></span></span> </a> </div></td>
                      				</thead>
                  					<tr>
                    						<td>Respaldo</td>
                    						<td align="center"><div class="checkbox checkbox-primary"><input id="verespaldo" name="verespaldo" type="checkbox" checked> <label for="verespaldo"></label></div></td>
                               <td align="center"><div class="checkbox checkbox-primary"><input id="modrespaldo" name="modrespaldo" type="checkbox" checked> <label for="modrespaldo"></label></div></td>
                    				</tr>
                           <tr>
                               <tr>
                        						<td>Bitacora</td>
                    						<td align="center"><div class="checkbox checkbox-primary"><input id="verbitacora" name="verbitacora" type="checkbox" checked> <label for="verbitacora"></label></div></td>
                                <td align="center"><div class="checkbox checkbox-primary"><input id="verbitacora" name="verbitacora" type="checkbox" checked> <label for="verbitacora"></label></div></td>
                               </tr>

                      			</table>

                      </div>
                      <div class="col-md-2 "></div>
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
                			<a href="{{url('cargo')}}">
                        <button class="btn btn-sm btn-info btn-block" name="cancelar" id="cancelar" type="reset">
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
