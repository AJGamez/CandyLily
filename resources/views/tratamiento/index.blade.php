@extends('menu')
@section('contenido')
        <!-- Slider -->

        @foreach($tratamientos as $tra) <?php // modal paar desactivar el tratamiento?>
          <div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="delete-{{$tra->id}}">
            {!!Form::model($tra,['method'=>'PATCH','route'=>['tratamiento.update', $tra->id]])!!}
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                            <input type="hidden" name="modificar" value="2">
                        </button>

                        <h3>Desactivar: <span class="violet">{{ $tra->nombre }}</span></h3>
                    </div>

                    <div class="modal-body">
                        <h5>¿Seguro que quiere dar de baja el tratamiento?</h5>
                    </div>

                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-md-8" align="left">
                                <h6>* Se cambiará el estado del tratamiento a inactivo</h6>
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

        @foreach($tratamientos as $tra2) <?php //modal para activar tratamiento de salud?>
        <div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="delete2-{{$tra2->id}}">
            {!!Form::model($tra2,['method'=>'PATCH','route'=>['tratamiento.update', $tra2->id]])!!}
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>

                        <h3>Activación de <span class="violet">{{ $tra2->nombre }}</span></h3>
                    </div>
                    <input type="hidden" name="modificar" value="3">
                    <div class="modal-body">
                        <h5>¿Seguro que quiere dar de alta al tratamiento?</h5>
                    </div>

                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-md-8" align="left">
                                <h6>* Se cambiará el estado del tratamiento a activo</h6>
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




        <div class="well">
            <div class="container">

            	<div class="row">
            		<div class="col-md-12 thumbnail">

            			<div class="page-header">
                            <h3>Administración de <span class="violet">Tratamientos </span></h3>
						</div>

						<div class="row">
                		<div class="col-md-2">
                			<a href="{{url('tratamiento/create')}}">
                            <button class="btn btn-xs btn-success btn-block" name="nuevo" id="nuevo" type="button">
                                <span class="glyphicon glyphicon-plus"></span> Nuevo Tratamiento
                            </button>
                            </a>
                		</div>
                        <div class="col-md-7"></div>
                			<div class="col-md-3">
                                @include('tratamiento.buscar')
                            </div>
                		</div>

                		<br>
            			<table class="table table-striped table-bordered table-condensed table-hover">
            				<thead class="violet">
            					<td>CÓDIGO</td>
            					<td>TRATAMIENTO </td>
            					<td colspan="2">OPCIONES</td>
            				</thead>
                    <?php $corre =1; ?>

            				@foreach ($tratamientos as $tra)
        					<tr>
          						<td>{{ $corre}}</td>
          						<td>{{ $tra->nombre}}</td>

          						<td align="center"><div> <a href="{{URL::action('TratamientoController@edit', $tra->id)}}"> <span title="Modificar Tratamiento"><span class="glyphicon glyphicon-cog"></span></span> </a> </div></td>
                      @if($tra->estado == 1)
                      <td align="center"><div> <a href="" data-target="#delete-{{$tra->id}}" data-toggle="modal"> <span title="Dar de baja"><span class="glyphicon glyphicon-arrow-down"></span></span> </a> </div></td>

                      @endif
                      @if($tra->estado == 0)
                      <td align="center"><div> <a href="" data-target="#delete2-{{$tra->id}}" data-toggle="modal"> <span title="Dar de alta"><span class="glyphicon glyphicon-arrow-up"></span></span> </a> </div></td>
                      @endif
                          <?php $corre=$corre+1;?>
                    </tr>
                    		@endforeach
            			</table>


                        <div class="row">
                            <div class="col-md-4 container" align="left">
                                <ol class="breadcrumb">
                                  <li><a href="{{url('tratamiento')}}"><span class="violet">Tratamientos Activos</span></a></li>
                                  <li><a href="{{url('tratamientobaja')}}"><span class="violet">Tratamientos Inactivos</span></a></li>
                                </ol>
                            </div>
                            <div class="col-md-8" align="right">
                                {{$tratamientos->render()}}
                            </div>
                        </div>
            		</div>
            	</div>
            </div>
        </div>
@endsection
