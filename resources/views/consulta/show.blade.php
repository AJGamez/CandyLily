@extends('menu')
@section('contenido')

<link rel="stylesheet" href="{{url('css/metro.css')}}">
    <body>
            <div class="row well">
                <div class="col-md-1"></div>
                <div class="col-md-10 thumbnail">

                <div class="page-header">
                    <h3>Datos de <span class="violet">Consulta</span></h3>
                </div>               

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
                                    <input name="nexpediente" id="nexpediente" type="text" class="form-control" placeholder="Número de expediente" onFocus="this.blur()" value="{{$consulta->nexpediente}}">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Nombre:</label>
                                <?php                                        
                                        $history=DB::select( DB::raw("SELECT * FROM expediente WHERE nexpediente = '$consulta->nexpediente'") );
                                    ?>
                                    @foreach ($history as $hol)

                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                    <input type="text" class="form-control" id="nombre" onFocus="this.blur()" value="{{$hol->nombre}} {{$hol->apellido}}" name="nombre" placeholder="Nombre">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Fecha de consulta:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                    <input name="fconsulta" id="fconsulta" type="text" class="form-control" placeholder="Fecha de consulta" onFocus="this.blur()" value="{{$consulta->fconsulta}}">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>                        
                </div>

                <div class="row"> 
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Procedencia:</label>                                    

                                    <?php
                                        $cargo=DB::select('select * from unidad where idunidad='.$consulta->procedencia);
                                    ?>
                                    @foreach ($cargo as $car)

                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                        <input name="fconsulta" id="fconsulta" type="text" class="form-control" placeholder="Fecha de consulta" onFocus="this.blur()" value="{{$car->nombre}}">
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    </div>

                                    @endforeach                                
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Embarazada:</label> <br>                                                                                

                                <?php if ($consulta->si==1) { ?>

                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                        <input name="si" id="si" type="text" class="form-control" onFocus="this.blur()" value="SI">
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    </div>

                                <?php } else { ?>
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                        <input name="no" id="no" type="text" class="form-control" onFocus="this.blur()" value="NO">
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>                        

                        <div class="col-md-4"> </div>
                            <div class="form-group has-feedback">
                                <label>Tipo:</label> <br>                                                                                                                

                                <?php if ($consulta->pv==1) { ?>

                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                        <input name="pv" id="pv" type="text" class="form-control" onFocus="this.blur()" value="PRIMERA VEZ">
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    </div>

                                <?php } else { ?>
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                        <input name="ss" id="ss" type="text" class="form-control" onFocus="this.blur()" value="SUB-SECUENTE">
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>                                                             
</div>

<div id="segundaparte">    
                <div class="row">
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Fecha inscripción de médico:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-bars"></span></span>
                                    <input name="fim" id="fim" type="text" onFocus="this.blur()" value="{{$consulta->fim}}" class="form-control">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Fecha inscripción de odontólogo:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                    <input type="text" class="form-control" id="fio" name="fio" onFocus="this.blur()" value="{{$consulta->fio}}">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Verificación de fecha:</label> <br>                                                                                                               

                                <?php if ($consulta->vf1==1) { ?>

                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                        <input name="vf1" id="vf1" type="text" class="form-control" onFocus="this.blur()" value="SI">
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    </div>

                                <?php } else { ?>
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                        <input name="vf2" id="vf2" type="text" class="form-control" onFocus="this.blur()" value="NO">
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>                        
                </div>
</div>

<div id="terceraparte">
                <div class="row"> 
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Semanas de amenorréa:</label>
                                    <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="glyphicon glyphicon-list"></span></span>
                                    <?php if($consulta->amenorrea==1) { ?>
                                    <input name="amenorrea" id="amenorrea" type="text" class="form-control" onFocus="this.blur()" value="0 - 12 SEMANAS">
                                    <?php } else if($consulta->amenorrea==2) { ?>
                                    <input name="amenorrea" id="amenorrea" type="text" class="form-control" onFocus="this.blur()" value="13 - 24 SEMANAS">
                                    <?php } else if($consulta->amenorrea==3) { ?>
                                    <input name="amenorrea" id="amenorrea" type="text" class="form-control" onFocus="this.blur()" value="25 - 36 SEMANAS">
                                    <?php } ?>                                                                        </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Alta antes de 24 semanas:</label> <br>                                                                                                                

                                <?php if ($consulta->av1==1) { ?>

                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                        <input name="av1" id="av1" type="text" class="form-control" onFocus="this.blur()" value="SI">
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    </div>

                                <?php } else { ?>
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                        <input name="av2" id="av2" type="text" class="form-control" onFocus="this.blur()" value="NO">
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>                        

                        <div class="col-md-4"> 
                            <div class="form-group has-feedback">
                                <label>Alta antes de 36 semanas:</label> <br>                                                                                               

                                <?php if ($consulta->at1==1) { ?>

                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                        <input name="at1" id="at1" type="text" class="form-control" onFocus="this.blur()" value="SI">
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    </div>

                                <?php } else { ?>
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                        <input name="at2" id="at2" type="text" class="form-control" onFocus="this.blur()" value="NO">
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div> 
</div>

<div id="cuartaparte">
                    <div class="row"> 
                        <div class="col-md-4">
                            <div class="form-group has-feedback">
                                <label>Diagnóstico:</label>                                    

                                    <?php
                                        $diagnostico=DB::select('select * from diagnostico where id='.$consulta->diagnostico);
                                    ?>
                                    @foreach ($diagnostico as $diag)

                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                        <input name="diagnostico" id="diagnostico" type="text" class="form-control" onFocus="this.blur()" value="{{ $diag->nombre }}">
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    </div>                                    

                                    @endforeach                                
                            </div>
                        </div>

                        <div class="col-md-4">
                             <div class="form-group has-feedback">
                                <label>Tratamiento:</label>                            

                                    <?php
                                        $tratamiento=DB::select('select * from tratamiento where id='.$consulta->tratamiento);
                                    ?>
                                    @foreach ($tratamiento as $trat)

                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                        <input name="tratamiento" id="tratamiento" type="text" class="form-control" onFocus="this.blur()" value="{{ $trat->nombre }}">
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    </div>             

                                    @endforeach                                
                            </div>
                        </div>                        

                        <div class="col-md-4"> 
                            <div class="form-group has-feedback">
                                <label>Enfermedad base:</label>                                    

                                    <?php
                                        $ebase=DB::select('select * from enfermedad where id='.$consulta->ebase);
                                    ?>
                                    @foreach ($ebase as $ebas)

                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                        <input name="ebase" id="ebase" type="text" class="form-control" onFocus="this.blur()" value="{{ $ebas->nombre }}">
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    </div>             

                                    @endforeach                                
                            </div>
                        </div>
                    </div>                     

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label>Observaciones:</label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-addon "><span class="fa fa-bars"></span></span>
                                    <input name="observaciones" id="observaciones" type="text" class="form-control" onFocus="this.blur()" value="{{$consulta->observaciones}}" onKeyUp="this.value=this.value.toUpperCase();">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label>Médico encargado:</label>
                                    <?php
                                        $medi=DB::select('select * from users where id='.$consulta->idmedi);
                                    ?>
                                    @foreach ($medi as $me)

                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon "><span class="fa fa-user"></span></span>
                                        <input name="idmedi" id="idmedi" type="text" class="form-control" onFocus="this.blur()" value="{{ $me->name }} {{ $me->apellido }}">
                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    </div>             

                                    @endforeach 
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
                        <div class="col-md-5"></div>                       

                        <div class="col-md-2">
                            <a href="{{url('consulta')}}">
                            <button class="btn btn-sm btn-success btn-block" name="guardar" id="guardar" type="button">
                                <span class="glyphicon glyphicon-edit"></span> Aceptar
                            </button>
                        </a>
                        </div>
                        <div class="col-md-5"></div>
                    </div>                    

</div>

                    {!!Form::close()!!}
                    </div>
                    <div class="col-md-1"></div>
                </div>
                </body>

@endsection