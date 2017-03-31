@extends('menu')
@section('contenido')
        <!-- Slider -->
        <div class="well">
            <div class="container">

            	<div class="row">
            		<div class="col-md-12 thumbnail">
            			<div class="page-header">
            				<h3>Administración de <span class="violet">Usuarios</span></h3>
						</div>

						<div class="row">
                		<div class="col-md-2">
                			<a href="{{url('usuario/create')}}">
                            <button class="btn btn-xs btn-success btn-block" name="nuevo" id="nuevo" type="button">
                                <span class="glyphicon glyphicon-plus"></span> Nuevo Usuario
                            </button>
                            </a>
                		</div>
                        <div class="col-md-7"></div>
                			<div class="col-md-3">
                                @include('usuario.buscar')
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

          						<td align="center"><div> <a href="{{URL::action('UsuarioController@show', $usu->id)}}"> <span title="Ver usuario"><span class="glyphicon glyphicon-eye-open"></span></span> </a> </div></td>
          						<td align="center"><div> <a href="" data-target="#delete-{{$usu->id}}" data-toggle="modal"> <span title="Dar de baja"><span class="glyphicon glyphicon-arrow-down"></span></span> </a> </div></td>
                    		</tr>
                            @include('usuario.modal')
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
