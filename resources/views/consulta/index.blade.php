@extends('menu')
@section('contenido')
        <!-- Slider -->
        <div class="well">
            <div class="container">

            	<div class="row">
            		<div class="col-md-12 thumbnail">
            			<div class="page-header">
            				<h3>Administración de <span class="violet">Consultas</span></h3>
						</div>

						<div class="row">
                		<div class="col-md-2">
                			<a href="{{url('consulta/create')}}">
                            <button class="btn btn-xs btn-success btn-block" name="nuevo" id="nuevo" type="button">
                                <span class="glyphicon glyphicon-plus"></span> Nueva Consulta
                            </button>
                            </a>
                		</div>
                        <div class="col-md-7"></div>
                			<div class="col-md-3">
                                @include('consulta.buscar')
                            </div>
                		</div>

                		<br>
            			<table class="table table-striped table-bordered table-condensed table-hover">
            				<thead class="violet">
            					<td>No EXPEDIENTE</td>
            					<td>NOMBRE DEL PACIENTE</td>            					          					
            					<td>OPCIONES</td>
            				</thead>

            				@foreach ($consultas as $con)
            				
                            <?php
								$usuario=DB::select('select * from expediente');
							?>							
							
                            @foreach ($usuario as $usu)                            
                                @if($usu->nexpediente==$con->nexpediente)                              
            					<tr>
              						<td>{{ $con->nexpediente}}</td>                                  
              					    <td>{{ $usu->nombre." ".$usu->apellido}}</td>                                                                             						        						
              						
              						<td align="center"><div> <a href="" data-target="#delete-{{$con->nexpediente}}" data-toggle="modal"> <span title="Ver historial"><span class="glyphicon glyphicon-eye-open"></span></span> </a> </div></td>
                        		</tr>
                                @endif
                            @endforeach

                            @include('consulta.modal')
                    		@endforeach
            			</table>

                        <div class="row">
                            <div class="col-md-12" align="right">
                                {{$consultas->render()}}
                            </div>
                        </div>
            		</div>
            	</div>
            </div>
        </div>

        @foreach($consultas as $tra) <?php // modal para ver historial ?>
          <div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="delete-{{$tra->nexpediente}}">            
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>                            
                        </button>

                        <h4>Historial de consulta <span class="violet">{{ $tra->nombre }} {{ $tra->apellido }}</span></h4>
                        <h5>Número de expediente <span class="violet">{{ $tra->nexpediente }}</span></h5>
                    </div>

                    <div class="modal-body">
                        <table class="table table-striped table-bordered table-condensed table-hover">
                            <thead class="violet">
                                <td>FECHA DE CONSULTA</td>
                                <td>MÉDICO ENCARGADO</td>                                                            
                                <td>OPCIONES</td>
                            </thead>                            
                            
                            <?php
                                //$history=DB::select('select * from consulta where nexpediente='.$tra->nexpediente);
                                $history=DB::select( DB::raw("SELECT * FROM consulta WHERE nexpediente = '$tra->nexpediente'") );
                            ?>                          
                            
                            @foreach ($history as $his)                                                            
                                <tr>
                                    <td>{{ $his->fconsulta}}</td>                                  
                                    <?php
                                        $medi=DB::select('select * from users where id='.$his->idmedi);
                                        //$medi=DB::select( DB::raw("SELECT * FROM users WHERE id = '$tra->idmedi'") );
                                    ?>                          
                            
                                    @foreach ($medi as $usu)                                                            
                                        <td>{{ $usu->name." ".$usu->apellido}}</td>                                                                                                                                   
                                    @endforeach
                                    
                                   <td align="center"><div> <a href="{{URL::action('ConsultaController@show', $his->id)}}"> <span title="Ver datos de consulta"><span class="glyphicon glyphicon-eye-open"></span></span> </a> </div></td>
                                </tr>                            
                            @endforeach                                                        
                        </table>
                    </div>                   
                </div>
            </div>            
        </div>
        @endforeach
@endsection
