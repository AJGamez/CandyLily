@extends('menu')
@section('contenido')

<link rel="stylesheet" href="{{url('css/metro.css')}}">
    <body>
			<div class="row well">
                <div class="col-md-1"></div>
               	<div class="col-md-10 thumbnail">

            	<div class="page-header">
            		<h3>Nueva <span class="violet">Consulta</span></h3>
				</div>

                {!!Form::open(array('url'=>'consulta', 'method'=>'POST', 'autocomplete'=>'off','name'=>'formBuy','id'=>'formBuy'))!!}
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

<div id="primeraparte">    
                <div class="row">                                            
                        <div class="col-md-4" id="aux">
                            <div class="form-group has-feedback">
                                <label>Número expediente:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-bars"></span></span>
                                    <input name="nexpediente" id="nexpediente" type="text" onKeyPress="" class="form-control" placeholder="Número de expediente">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>

                		<div class="col-md-4">
                			<div class="form-group has-feedback">
                				<label>Nombre:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                    <input type="text" class="form-control" id="nombre" onFocus="this.blur()" name="nombre" placeholder="Nombre">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                    		</div>
                    	</div>
                    
                    	<div class="col-md-4">
                			<div class="form-group has-feedback">
                				<label>Fecha de consulta:</label>
                				<div class="input-group input-group-sm">
                    				<span class="input-group-addon "><span class="fa fa-user"></span></span>
                    				<input name="fconsulta" id="fconsulta" type="text" class="form-control" placeholder="Fecha de consulta" value="<?php echo date('d-m-Y'); ?>" onFocus="this.blur()">
                    				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                				</div>
           					</div>
                    	</div>                        
                </div>

                <div class="row"> 
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Procedencia:</label>
                                    <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="glyphicon glyphicon-list"></span></span>
                                    <select class="form-control" name="procedencia" id="procedencia" required>
                                        <option value="erro">[SELECCIONE]</option>

                                    <?php
                                        $cargo=DB::select('select * from unidad where estado=1');
                                    ?>
                                    @foreach ($cargo as $car)

                                        <option value="{{ $car->idunidad }}">{{ $car->nombre }}</option>

                                    @endforeach
                                </select></div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Embarazada:</label> <br>                                                                                

                                <label class="switch">
                                    SI &nbsp <input type="checkbox" id="si" name="si" checked onClick="checkear('1');">
                                    <span class="check"></span>
                                </label>
                                &nbsp &nbsp
                                <label class="switch">
                                    NO &nbsp <input type="checkbox" id="no" name="no" onClick="checkear('0');">
                                    <span class="check"></span>
                                </label>

                            </div>
                        </div>                        

                        <div class="col-md-4"> </div>
                            <div class="form-group has-feedback">
                                <label>Tipo:</label> <br>                                                                                

                                <label class="switch">
                                    PRIMERA VEZ &nbsp <input type="checkbox" id="pv" name="pv" checked onClick="checkear1('2');">
                                    <span class="check"></span>
                                </label>
                                &nbsp &nbsp
                                <label class="switch">
                                    SUB-SECUENTE &nbsp <input type="checkbox" id="ss" name="ss" onClick="checkear1('3');">
                                    <span class="check"></span>
                                </label>

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
                            <button class="btn btn-sm btn-success btn-block" name="siguiente" id="siguiente" type="button" onClick="sigue();">
                                <span class="glyphicon glyphicon-arrow-right"></span> Siguiente
                            </button>
                		</div>
                		<div class="col-md-4"></div>
                	</div>                    

</div>

<div id="segundaparte" style="display:none;">    
                <div class="row">
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Fecha inscripción de médico:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-bars"></span></span>
                                    <input name="fim" id="fim" type="date" onKeyPress="" class="form-control">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Fecha inscripción de odontólogo:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                    <input type="date" class="form-control" id="fio" name="fio" onKeyUp="">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Verificación de fecha:</label> <br>                                                                                

                                <label class="switch">
                                    SI &nbsp <input type="checkbox" id="vf1" name="vf1" onClick="">
                                    <span class="check"></span>
                                </label>
                                &nbsp &nbsp
                                <label class="switch">
                                    NO &nbsp <input type="checkbox" id="vf2" name="vf2" onClick="">
                                    <span class="check"></span>
                                </label>

                            </div>
                        </div>                        
                </div>
</div>

<div id="terceraparte" style="display:none;">
                <div class="row"> 
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Semanas de amenorréa:</label>
                                    <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="glyphicon glyphicon-list"></span></span>
                                    <select class="form-control" name="amenorrea" id="amenorrea" required>                                    

                                    <option value="0">[SELECCIONE]</option>
                                    <option value="1"> 0 - 12 SEMANAS</option>
                                    <option value="2">13 - 24 SEMANAS</option>
                                    <option value="3">25 - 37 SEMANAS</option>
                                    
                                </select></div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Alta antes de 24 semanas:</label> <br>                                                                                

                                <label class="switch">
                                    SI &nbsp <input type="checkbox" id="av1" name="av1" onClick="checkear2('6');">
                                    <span class="check"></span>
                                </label>

                                <label class="switch">
                                    NO &nbsp <input type="checkbox" id="av2" name="av2" onClick="checkear2('7');" checked>
                                    <span class="check"></span>
                                </label>

                            </div>
                        </div>                        

                        <div class="col-md-4"> 
                            <div class="form-group has-feedback">
                                <label>Alta antes de 36 semanas:</label> <br>                                                                                

                                <label class="switch">
                                    SI &nbsp <input type="checkbox" id="at1" name="at1" onClick="checkear2('8');">
                                    <span class="check"></span>
                                </label>

                                <label class="switch">
                                    NO &nbsp <input type="checkbox" id="at2" name="at2" onClick="checkear2('9');" checked>
                                    <span class="check"></span>
                                </label>

                            </div>
                        </div>
                    </div> 
</div>

<div id="cuartaparte" style="display:none;">
                    <div class="row"> 
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Diagnóstico:</label>
                                    <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="glyphicon glyphicon-list"></span></span>
                                    <select class="form-control" name="diagnostico" id="diagnostico" required>
                                    
                                    <option value="derro">[SELECCIONE]</option>

                                    <?php
                                        $diagnostico=DB::select('select * from diagnostico where estado=1');
                                    ?>
                                    @foreach ($diagnostico as $diag)

                                    <option value="{{ $diag->id }}">{{ $diag->nombre }}</option>

                                    @endforeach
                                </select></div>
                            </div>
                        </div>

                        <div class="col-md-4">
                             <div class="form-group has-feedback">
                                <label>Tratamiento:</label>
                                    <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="glyphicon glyphicon-list"></span></span>
                                    <select class="form-control" name="tratamiento" id="tratamiento" required>
                                    
                                    <option value="terro">[SELECCIONE]</option>

                                    <?php
                                        $tratamiento=DB::select('select * from tratamiento where estado=1');
                                    ?>
                                    @foreach ($tratamiento as $trat)

                                    <option value="{{ $trat->id }}">{{ $trat->nombre }}</option>

                                    @endforeach
                                </select></div>
                            </div>
                        </div>                        

                        <div class="col-md-4"> 
                            <div class="form-group has-feedback">
                                <label>Enfermedad base:</label>
                                    <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="glyphicon glyphicon-list"></span></span>
                                    <select class="form-control" name="ebase" id="ebase" required>
                                    
                                    <option value="eberro">[SELECCIONE]</option>

                                    <?php
                                        $ebase=DB::select('select * from enfermedad where estado=1');
                                    ?>
                                    @foreach ($ebase as $ebas)

                                    <option value="{{ $ebas->id }}">{{ $ebas->nombre }}</option>

                                    @endforeach
                                </select></div>
                            </div>
                        </div>
                    </div>                     

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group has-feedback">
                                <label>Observaciones:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-bars"></span></span>
                                    <input name="observaciones" id="observaciones" type="text" class="form-control" onKeyUp="this.value=this.value.toUpperCase();">
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
                            <button class="btn btn-sm btn-info btn-block" name="atras" id="atras" type="button" onClick="atra();">
                                <span class="glyphicon glyphicon-arrow-left"></span> Atrás
                            </button>
                        </div>

                        <div class="col-md-2">
                            <button class="btn btn-sm btn-success btn-block" name="guardar" id="guardar" type="button" onClick="Registro2();">
                                <span class="glyphicon glyphicon-edit"></span> Aceptar
                            </button>
                        </div>
                        <div class="col-md-4"></div>
                    </div>                    

</div>

                	{!!Form::close()!!}
            		</div>
                    <div class="col-md-1"></div>
            	</div>
                </body>

@endsection

  <script src="{{url('js/jquery-2.1.3.min.js')}}"></script>
  <script src="{{url('js/alertify.min.js')}}"></script>

  <link rel="stylesheet" href="{{url('css/alertify.default.css')}}">
  <link rel="stylesheet" href="{{url('css/alertify.core.css')}}">

<script type="text/javascript">

    $(document).ready(function(){
        $('#aux').on('change','#nexpediente',function (){
            var producto=$("#nexpediente").val();
            var ruta="/CandyLily/public/llenadoProducto2/"+producto;

            $("#nombre").val("");
            $("#nexpediente").val("");

            $.get(ruta, function(res){
                $(res).each(function(key,value){    
                    $("#nexpediente").val(value.nexpediente);
                    $("#nombre").val(value.nombre+" "+value.apellido);
                });
            });
        });
    });

    function checkear(num){
        if(num==1){            
            document.getElementById("no").checked = 0;
            document.getElementById("si").checked = 1;
        }else{            
            document.getElementById("si").checked = 0;
            document.getElementById("no").checked = 1;
        }
    }

    function checkear1(num){
        if(num==2){            
            document.getElementById("ss").checked = 0;
            document.getElementById("pv").checked = 1;
        }else{            
            document.getElementById("pv").checked = 0;
            document.getElementById("ss").checked = 1;
        }
    }

    function checkear2(num){
        if(num==6){            
            document.getElementById("av1").checked = 1;
            document.getElementById("av2").checked = 0;
            document.getElementById("at1").checked = 0;
            document.getElementById("at2").checked = 1;
        }else if(num==7){            
            document.getElementById("av1").checked = 0;
            document.getElementById("av2").checked = 1;
            document.getElementById("at1").checked = 0;
            document.getElementById("at2").checked = 1;
        }else if(num==8){            
            document.getElementById("av1").checked = 0;
            document.getElementById("av2").checked = 1;
            document.getElementById("at1").checked = 1;
            document.getElementById("at2").checked = 0;
        }else if(num==9){            
            document.getElementById("av1").checked = 0;
            document.getElementById("av2").checked = 1;
            document.getElementById("at1").checked = 0;
            document.getElementById("at2").checked = 1;
        }
    }

    function sigue() {
        var op=document.getElementById("nombre").value;
        var opp=document.getElementById("procedencia").value;

        if (op=="") {
           alertify.error("Por favor complete el campo Número expediente");           
        } else if (opp=="erro"){
            alertify.error("Por favor complete el campo Procedencia");
        } else {
            document.getElementById("primeraparte").style.display = 'none';
            document.getElementById("segundaparte").style.display = 'block';
            document.getElementById("terceraparte").style.display = 'block';
            document.getElementById("cuartaparte").style.display = 'block';
        }
    }

    function atra() {
        document.getElementById("primeraparte").style.display = 'block';
        document.getElementById("segundaparte").style.display = 'none';
        document.getElementById("terceraparte").style.display = 'none';
        document.getElementById("cuartaparte").style.display = 'none';
    }  

    function Registro2() {
        var f1=document.getElementById("fim").value;
        var f2=document.getElementById("fio").value;

        var f = new Date().toJSON().slice(0,10);

        if (f1>f || f2>f) {
           alertify.error("Fechas incorrectas");           
        } else if (f1>f2){
            alertify.error("Error, fecha de inscripción de médico debe ser menor");           
        } else if (f1=="" || f2=="") {
            alertify.error("Ingrese fechas de inscripción"); 
        } else {
            document.forms["formBuy"].submit();        
        }
      }    
</script>