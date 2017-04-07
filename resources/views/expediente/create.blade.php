@extends('menu')
@section('contenido')                
			<div class="row well">
                <div class="col-md-1"></div>
               	<div class="col-md-10 thumbnail">

            	<div class="page-header">
            		<h3>Nuevo <span class="violet">Expediente</span></h3>
				</div>

                {!!Form::open(array('url'=>'expediente', 'method'=>'POST', 'autocomplete'=>'off'))!!}
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
                    <div class="col-md-2"></div>
                		<div class="col-md-4">
                			<div class="form-group has-feedback">
                				<label>Código ECOSF:</label>
                				<div class="input-group input-group-sm">
                					<span class="input-group-addon "><span class="fa fa-shield"></span></span>
                    				<input type="text" class="form-control" id="cecosf" name="cecosf" placeholder="Código ECOSF" onKeyUp="this.value=this.value.toUpperCase();">
                    				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    			</div>
                    		</div>
                    	</div>

                    	<div class="col-md-4">
                			<div class="form-group has-feedback">
                				<label>Número de expediente:</label>
                				<div class="input-group input-group-sm">
                    				<span class="input-group-addon "><span class="fa fa-shield"></span></span>
                    				<input name="nexpediente" id="nexpediente" type="text" class="form-control" placeholder="Número de expediente" onKeyUp="this.value=this.value.toUpperCase();">
                    				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                				</div>
           					</div>
                    	</div>              
                        <div class="col-md-2"></div>          
                </div>  

                    <div>
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#paciente" aria-controls="paciente" role="tab" data-toggle="tab">A. Datos del paciente</a></li>
                        <li role="presentation"><a href="#familia" aria-controls="familia" role="tab" data-toggle="tab">B. Datos de la familia</a></li>
                        <li role="presentation"><a href="#persona" aria-controls="persona" role="tab" data-toggle="tab">C. Datos de persona que proporcionó los datos</a></li>                        
                      </ul>

                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="paciente">
                            <!-- div class="page-header">
                    <h4>A. Datos del <span class="violet">Paciente</span></h4>
                </div -->              

                <br>
                <div class="row">                    
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Nombre:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del paciente" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Apellido:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                    <input name="apellido" id="apellido" type="text" class="form-control" placeholder="Apellido del paciente" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>              
                        
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Conocido por:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                    <input name="alias" id="alias" type="text" class="form-control" placeholder="Conocido por" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>              
                </div>

                <div class="row">                    
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Fecha de nacimiento:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-calendar"></span></span>
                                    <input type="date" class="form-control" id="fnac" name="fnac" placeholder="Fecha de nacimiento" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
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
                        
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Estado Civil:</label>
                                    <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="glyphicon glyphicon-list"></span></span>
                                    <select class="form-control" name="efamiliar" id="efamiliar" required>
                                    <option value="1">SOLTERO (A)</option>
                                    <option value="2">CASADO (A)</option>
                                    <option value="3">VIUDO (A)</option>
                                    <option value="4">DIVORCIADO (A)</option>
                                    <option value="5">ACOMPAÑADO (A)</option>
                                </select></div>
                            </div>
                        </div>              
                </div>

                <div class="row">                    
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Pais de nacimiento:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-certificate"></span></span>
                                    <input type="text" class="form-control" id="paisnac" name="paisnac" placeholder="Pais de nacimiento" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Departamento de naciento:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-circle"></span></span>
                                    <input name="departamentonac" id="departamentonac" type="text" class="form-control" placeholder="Departamento de naciento" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>              
                        
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Municipio de nacimiento:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-circle-thin"></span></span>
                                    <input name="municipionac" id="municipionac" type="text" class="form-control" placeholder="Municipio de nacimiento" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>              
                </div>

                <div class="row">                    
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Nacionalidad:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-certificate"></span></span>
                                    <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" placeholder="Nacionalidad" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Documento de identidad:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                    <input name="documentoidentidad" id="documentoidentidad" type="text" class="form-control" placeholder="Documento de identidad" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>              
                        
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Número de documento:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-plus"></span></span>
                                    <input name="ndocidenti" id="ndocidenti" type="text" class="form-control" placeholder="Número de documento" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>              
                </div>

                <div class="row">                    
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Teléfono:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-fax"></span></span>
                                    <input type="text" class="form-control" id="telefonopac" name="telefonopac" placeholder="Teléfono" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>

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
                </div>

                 <div class="row">                    
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Departamento:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-circle"></span></span>
                                    <input type="text" class="form-control" id="departamentodire" name="departamentodire" placeholder="Departamento" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Municipio:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-circle-thin"></span></span>
                                    <input name="municipiodire" id="municipiodire" type="text" class="form-control" placeholder="Municipio" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>              
                        
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Cantón:</label>
                                    <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="glyphicon glyphicon-list"></span></span>
                                    <select class="form-control" name="canton" id="canton" required>
                                    <option value="1">SI</option>
                                    <option value="2">NO</option>
                                </select></div>
                            </div>                            
                        </div>              
                </div>

                 <div class="row">                    
                        <div class="col-md-4">                            
                            <div class="form-group has-feedback">
                                <label>Área geográfica:</label>
                                    <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="glyphicon glyphicon-list"></span></span>
                                    <select class="form-control" name="ageografica" id="ageografica" required>
                                    <option value="1">URBANA</option>
                                    <option value="2">RURAL</option>
                                </select></div>
                            </div>
                        </div>              

                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Ocupación:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                    <input name="ocupacion" id="ocupacion" type="text" class="form-control" placeholder="Ocupación" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>              
                        
                        <div class="col-md-4"></div>                                        
                </div>

                <div class="row">                    
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Asegurado:</label>
                                    <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="glyphicon glyphicon-list"></span></span>
                                    <select class="form-control" name="asegurado" id="asegurado" required>
                                    <option value="1">SI</option>
                                    <option value="2">NO</option>
                                </select></div>
                            </div>
                        </div>              

                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Área de cotización:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-tree"></span></span>
                                    <input name="areacotiza" id="areacotiza" type="text" class="form-control" placeholder="Área de cotización" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>              
                        
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Número de afiliación:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-plus"></span></span>
                                    <input name="nafiliacion" id="nafiliacion" type="text" class="form-control" placeholder="Número de afiliación" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>              
                </div>

                <div class="row">                    
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Lugar de trabajo:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-home"></span></span>
                                    <input name="ltrabajo" id="ltrabajo" type="text" class="form-control" placeholder="Lugar de trabajo" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>               

                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Teléfono de trabajo:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-fax"></span></span>
                                    <input name="telefonotra" id="telefonotra" type="text" class="form-control" placeholder="Teléfono de trabajo" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>              
                        
                        <div class="col-md-4"></div>             
                </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="familia">
                            <!-- div class="page-header">
                    <h4>B. Datos de la <span class="violet">Familia</span></h4>
                </div --> 

                <br>
                <div class="row">                    
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Nombre del padre:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                    <input type="text" class="form-control" id="npadre" name="npadre" placeholder="Nombre del padre" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Nombre de la madre:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                    <input name="nmadre" id="nmadre" type="text" class="form-control" placeholder="Nombre de la madre" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>              
                        
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Nombre del cónyuge:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                    <input name="nconyuge" id="nconyuge" type="text" class="form-control" placeholder="Nombre del cónyuge" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>              
                </div>  

                <div class="row">                    
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Nombre del responsable:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                    <input type="text" class="form-control" id="nresponsable" name="nresponsable" placeholder="Nombre del responsable" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Parentesco del responsable:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                    <input name="parentescoresponsable" id="parentescoresponsable" type="text" class="form-control" placeholder="Parentesco del responsable" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>              
                        
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Teléfono del responsable:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-fax"></span></span>
                                    <input name="telefonores" id="telefonores" type="text" class="form-control" placeholder="Teléfono del responsable" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>              
                </div>

                <div class="row">                    
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Documento de identidad responsable:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                    <input type="text" class="form-control" id="docidentires" name="docidentires" placeholder="Documento identidad del responsable" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Número de documento de responsable:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-plus"></span></span>
                                    <input name="ndocidentires" id="ndocidentires" type="text" class="form-control" placeholder="Número de documento de responsable" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>              
                        
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Dirección del responsable:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-home"></span></span>
                                    <input name="direccionres" id="direccionres" type="text" class="form-control" placeholder="Dirección del responsable" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>              
                </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="persona">
                            <!-- div class="page-header">
                    <h4>C. Datos de la persona que proporcionó los <span class="violet">Datos</span></h4>
                </div --> 

                <br>
                <div class="row">                    
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Nombre quien proporcionó los datos:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                    <input type="text" class="form-control" id="nombrepdatos" name="nombrepdatos" placeholder="Nombre quien proporcionó los datos" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Parentesco:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                    <input name="parentescopdatos" id="parentescopdatos" type="text" class="form-control" placeholder="Parentesco" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>              
                        
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Documento de identidad:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                    <input name="docidentidadpdatos" id="docidentidadpdatos" type="text" class="form-control" placeholder="Documento de identidad" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>              
                </div>  

                <div class="row">                    
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Número de documento:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-plus"></span></span>
                                    <input type="text" class="form-control" id="ndocpdatos" name="ndocpdatos" placeholder="Número de documento" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-group has-feedback">
                                <label>Observaciones:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-eye"></span></span>
                                    <input name="observaciones" id="observaciones" type="text" class="form-control" placeholder="Observaciones" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>                                                              
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
                		<div class="col-md-4"></div>
                		<div class="col-md-2">
                            <button class="btn btn-sm btn-info btn-block" name="cancelar" id="cancelar" type="reset">
                                <span class="glyphicon glyphicon-remove"></span> Cancelar
                            </button>
                		</div>

                		<div class="col-md-2">
                            <button class="btn btn-sm btn-success btn-block" name="guardar" id="guardar" type="submit">
                                <span class="glyphicon glyphicon-edit"></span> Registrar
                            </button>
                		</div>
                		<div class="col-md-4"></div>
                	</div>                    

                	{!!Form::close()!!}
            		</div>
                    <div class="col-md-1"></div>
            	</div>
@endsection

<script type="text/javascript">
    $('#myTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    })
</script>