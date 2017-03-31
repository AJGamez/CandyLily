@extends('menu')
@section('contenido')               
        <!-- Slider -->
        <div class="well">
            <div class="container">
            	
            	<div class="row">
            		<div class="col-md-12 thumbnail">
                                                                       
            			<div class="page-header"> 
                            <h3>Diagnósticos <span class="violet">Inactivos</span></h3> 
                        </div>                        

						<div class="row">                		                		
                        <div class="col-md-9"></div>
                			<div class="col-md-3">
                                @include('diagnostico.buscar')
                            </div>
                		</div> 

                		<br>
            			<table class="table table-striped table-bordered table-condensed table-hover">
            				<thead class="violet">
            					<td>CÓDIGO</td>
            					<td>DIAGNÓSTICO</td>
                                <td>OPCIONES</td>                                
            				</thead>

            				@foreach ($diagnosticos as $diag)            				
        					<tr>
          						<td>{{ $diag->codigo}}</td>
          						<td>{{ $diag->nombre}}</td>          						

                                <td align="center"><div> <a href="" data-target="#uplete-{{$diag->id}}" data-toggle="modal"> <span title="Dar de alta"><span class="glyphicon glyphicon-arrow-up"></span></span> </a> </div></td>                                
                    		</tr>                            
                    		@endforeach
            			</table>
                
                        @foreach ($diagnosticos as $diag)                           
                        <div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="uplete-{{$diag->id}}">
                            {{Form::Open(array('action'=>array('DiagnosticoinacController@destroy', $diag->id), 'method'=>'delete'))}}
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                                            
                                        <h3>Activación de <span class="violet">Diagnóstico</span></h3>
                                    </div>                                    
                                    <div class="modal-body">    
                                        <h5>¿Seguro que quiere dar de alta al diagnóstico?</h5>
                                    </div>

                                    <div class="modal-footer"> 
                                        <div class="row">
                                            <div class="col-md-8" align="left">
                                                <h6>* Se cambiará el estado del diagnóstico a activo</h6> 
                                            </div>
                                            <div class="col-md-2">
                                                <button type="button" class="btn btn-sm btn-success btn-block" data-dismiss="modal">
                                                <span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                                            </div>
                                            <div class="col-md-2">
                                                <button type="submit" class="btn btn-sm btn-success btn-block">
                                                <span class="glyphicon glyphicon-edit"></span> Aceptar</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>  
                            {{Form::Close()}} 
                        </div>
                        @endforeach

                        <div class="row">
                            <div class="col-md-4 container" align="left">                            
                                <ol class="breadcrumb">
                                  <li><a href="{{url('diagnostico')}}"><span class="violet">Diagnósticos Activos</span></a></li>
                                  <li><a href="{{url('diagnosticoinac')}}"><span class="violet">Diagnósticos Inactivos</span></a></li>                                         
                                </ol>                            
                            </div>            
                            <div class="col-md-8" align="right">
                                {{$diagnosticos->render()}}         			
                            </div>  
                        </div>
            		</div>
            	</div>
            </div>
        </div>                                 
@endsection