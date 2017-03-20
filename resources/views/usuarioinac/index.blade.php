@extends('menu')
@section('contenido')               
        <!-- Slider -->
        <div class="well">
            <div class="container">
            	
            	<div class="row">
            		<div class="col-md-12 thumbnail">
            			<div class="page-header"> 
            				<h3>Usuarios <span class="violet">Inactivos</span></h3>
						</div>

						<div class="row">                		                		
                        <div class="col-md-9"></div>
                			<div class="col-md-3">
                                @include('usuarioinac.buscar')
                            </div>
                		</div> 

                		<br>
            			<table class="table table-striped table-bordered table-condensed table-hover">
            				<thead class="violet">
            					<td>#</td>
            					<td>NOMBRE</td>
            					<td>CARGO</td>
            					<td>TELÉFONO</td>
            					<td>E-MAIL</td>
            					<td colspan="2">OPCIONES</td>
            				</thead>

            				@foreach ($usuarios as $usu)
            				<?php
								$cargo=DB::select('select * from cargo where idcargo='.$usu->idcargo);
							?>
							@foreach ($cargo as $car)
							@endforeach
        					<tr>
          						<td>{{ $usu->id}}</td>
          						<td>{{ $usu->name." ".$usu->apellido}}</td>
          						<td>{{ $car->nombre}}</td>
          						<td>{{ $usu->telefono}}</td>	       
          						<td>{{ $usu->email}}</td>  

          						<td align="center"><div> <a href="{{URL::action('UsuarioinacController@show', $usu->id)}}"> <span title="Ver usuario"><span class="glyphicon glyphicon-eye-open"></span></span> </a> </div></td>
          						<td align="center"><div> <a href="" data-target="#delete-{{$usu->id}}" data-toggle="modal"> <span title="Dar de alta"><span class="glyphicon glyphicon-arrow-up"></span></span> </a> </div></td>
                    		</tr>
                            @include('usuarioinac.modal')
                    		@endforeach
            			</table>

                        <div class="row">
                            <div class="col-md-4 container" align="left">                            
                                <ol class="breadcrumb">
                                  <li><a href="{{url('usuario')}}"><span class="violet">Usuarios Activos</span></a></li>
                                  <li><a href="{{url('usuarioinac')}}"><span class="violet">Usuarios Inactivos</span></a></li>                                         
                                </ol>                            
                            </div>            
                            <div class="col-md-8" align="right">
                                {{$usuarios->render()}}         			
                            </div>  
                        </div>
            		</div>
            	</div>
            </div>
        </div>                                 
@endsection