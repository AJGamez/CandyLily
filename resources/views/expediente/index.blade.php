@extends('menu')
@section('contenido')               
        <!-- Slider -->
        <div class="well">
            <div class="container">
            	
            	<div class="row">
            		<div class="col-md-12 thumbnail">
                                                
            			<div class="page-header"> 
                            <h3>Administración de <span class="violet">Expedientes</span></h3>                            
						</div>                        

						<div class="row">                		
                		<div class="col-md-2">                            
                			<a href="{{url('expediente/create')}}">
                            <button class="btn btn-xs btn-success btn-block" name="nuevo" id="nuevo" type="button">
                                <span class="glyphicon glyphicon-plus"></span> Nuevo Expediente
                            </button>
                            </a>                           
                		</div>
                        <div class="col-md-7"></div>
                			<div class="col-md-3">
                                @include('expediente.buscar')
                            </div>
                		</div> 

                		<br>
            			<table class="table table-striped table-bordered table-condensed table-hover">
            				<thead class="violet">
            					<td>NÚMERO DE EXPEDIENTE</td>
            					<td>NOMBRE</td>                                    				
                                <td>FECHA DE NACIMIENTO</td>
            					<td colspan="2">OPCIONES</td>                              
            				</thead>

            				@foreach ($expedientes as $expe)            				
        					<tr>
          						<td>{{ $expe->nexpediente}}</td>
          						<td>{{ $expe->nombre." ".$expe->apellido }}</td>          						
                                <td>{{ $expe->fnac}}</td>
                                
          						<td align="center"><div> <a href="{{URL::action('ExpedienteController@edit', $expe->id)}}"> <span title="Modificar expediente"><span class="glyphicon glyphicon-cog"></span></span> </a> </div></td>
          						<!--td align="center"><div> <a href="" data-target="#delete-{{$expe->id}}" data-toggle="modal"> <span title="Dar de baja"><span class="glyphicon glyphicon-arrow-down"></span></span> </a> </div></td-->                              
                    		</tr>                            
                    		@endforeach
            			</table>

                        @foreach ($expedientes as $expe)                           
                        <div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="delete-{{$expe->id}}">
                            {{Form::Open(array('action'=>array('ExpedienteController@destroy', $expe->id), 'method'=>'delete'))}}
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                                            
                                        <h3>Eliminación de <span class="violet">Expedientes</span></h3>
                                    </div>
                                    
                                    <div class="modal-body">    
                                        <h5>¿Seguro que quiere dar de baja el expediente?</h5>
                                    </div>

                                    <div class="modal-footer"> 
                                        <div class="row">
                                            <div class="col-md-8" align="left">
                                                <h6>* Se cambiará el estado del expediente a inactivo</h6> 
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
                                <!--ol class="breadcrumb">
                                  <li><a href="{{url('expediente')}}"><span class="violet">Expedientes Activos</span></a></li>
                                  <li><a href="{{url('expedienteinac')}}"><span class="violet">Expedientes Inactivos</span></a></li>                                         
                                </ol-->                            
                            </div>            
                            <div class="col-md-8" align="right">
                                {{$expedientes->render()}}         			
                            </div>  
                        </div>
            		</div>
            	</div>
            </div>
        </div>                                 
@endsection