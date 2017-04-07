@extends('menu')
@section('contenido')
        <!-- Slider -->

        @foreach($unidades as $uni) <?php // modal paar desactivar la unidad?>
          <div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="delete-{{$uni->idunidad}}">
            {!!Form::model($uni,['method'=>'PATCH','route'=>['unidad.update', $uni->idunidad]])!!}
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                            <input type="hidden" name="modificar" value="2">
                        </button>

                        <h3>Desactivar: <span class="violet">{{ $uni->nombre }}</span></h3>
                    </div>

                    <div class="modal-body">
                        <h5>¿Seguro que quiere dar de baja a la unidad?</h5>
                    </div>

                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-md-8" align="left">
                                <h6>* Se cambiará el estado de la unidad a inactivo</h6>
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

        @foreach($unidades as $uni2) <?php //modal para activar unidad de salud?>
        <div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="delete2-{{$uni2->idunidad}}">
            {!!Form::model($uni2,['method'=>'PATCH','route'=>['unidad.update', $uni2->idunidad]])!!}
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>

                        <h3>Activación de <span class="violet">{{ $uni2->nombre }}</span></h3>
                    </div>
                    <input type="hidden" name="modificar" value="3">
                    <div class="modal-body">
                        <h5>¿Seguro que quiere dar de alta la unidad?</h5>
                    </div>

                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-md-8" align="left">
                                <h6>* Se cambiará el estado de la unidad a activo</h6>
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
                            <h3>Administración de <span class="violet">Unidades de Salud</span></h3>
						</div>

						<div class="row">
                		<div class="col-md-2">
                			<a href="{{url('unidad/create')}}">
                            <button class="btn btn-xs btn-success btn-block" name="nuevo" id="nuevo" type="button">
                                <span class="glyphicon glyphicon-plus"></span> Nueva Unidad
                            </button>
                            </a>
                		</div>
                        <div class="col-md-7"></div>
                			<div class="col-md-3">
                                @include('unidad.buscar')
                            </div>
                		</div>
<?php $corre =1; ?>
                		<br>
            			<table class="table table-striped table-bordered table-condensed table-hover">
            				<thead class="violet">
            					<td>Número</td>
            					<td>UNIDAD DE SALUD</td>
            					<td colspan="2">OPCIONES</td>
            				</thead>

            				@foreach ($unidades as $uni)
        					<tr>
          						<td>{{ $corre}}</td>
          						<td>{{ $uni->nombre}}</td>

          						<td align="center"><div> <a href="{{URL::action('UnidadController@edit', $uni->idunidad)}}"> <span title="Modificar Unidad de Salud"><span class="glyphicon glyphicon-cog"></span></span> </a> </div></td>
                      @if($uni->estado == 1)
                      <td align="center"><div> <a href="" data-target="#delete-{{$uni->idunidad}}" data-toggle="modal"> <span title="Dar de baja"><span class="glyphicon glyphicon-arrow-down"></span></span> </a> </div></td>

                      @endif
                      @if($uni->estado == 0)
                      <td align="center"><div> <a href="" data-target="#delete2-{{$uni->idunidad}}" data-toggle="modal"> <span title="Dar de alta"><span class="glyphicon glyphicon-arrow-up"></span></span> </a> </div></td>
                      @endif
                      <?php $corre=$corre+1;?>

                    </tr>
                    		@endforeach
            			</table>


                        <div class="row">
                            <div class="col-md-4 container" align="left">
                                <ol class="breadcrumb">
                                  <li><a href="{{url('unidad')}}"><span class="violet">Unidades Activas</span></a></li>
                                  <li><a href="{{url('unidadbaja')}}"><span class="violet">Unidades Inactivas</span></a></li>
                                </ol>
                            </div>
                            <div class="col-md-8" align="right">
                                {{$unidades->render()}}
                            </div>
                        </div>
            		</div>
            	</div>
            </div>
        </div>
@endsection
