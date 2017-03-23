@extends('menu')
@section('contenido')
        <!-- Slider -->

        @foreach($cargos as $car) <?php // modal paar desactivar el cargo?>
          <div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="delete-{{$car->idcargo}}">
            {!!Form::model($car,['method'=>'PATCH','route'=>['cargo.update', $car->idcargo]])!!}
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                            <input type="hidden" name="modificar" value="2">
                        </button>

                        <h3>Desactivar: <span class="violet">{{ $car->nombre }}</span></h3>
                    </div>

                    <div class="modal-body">
                        <h5>¿Seguro que quiere dar de baja al Cargo?</h5>
                    </div>

                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-md-8" align="left">
                                <h6>* Se cambiará el estado del Cargo a inactivo</h6>
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

        @foreach($cargos as $car2) <?php //modal para activar cargo?>
        <div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="delete2-{{$car2->idcargo}}">
            {!!Form::model($car,['method'=>'PATCH','route'=>['cargo.update', $car->idcargo]])!!}
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>

                        <h3>Activación de <span class="violet">{{ $car->nombre }}</span></h3>
                    </div>
                    <input type="hidden" name="modificar" value="3">
                    <div class="modal-body">
                        <h5>¿Seguro que quiere dar de alta al cargo?</h5>
                    </div>

                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-md-8" align="left">
                                <h6>* Se cambiará el estado del cargo a activo</h6>
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
            				<h3>Administración de <span class="violet">Cargos</span></h3>
						</div>

						<div class="row">
                		<div class="col-md-2">
                			<a href="cargo/create">
                            <button class="btn btn-xs btn-success btn-block" name="nuevo" id="nuevo" type="button">
                                <span class="glyphicon glyphicon-plus"></span> Nuevo Cargo
                            </button>
                            </a>
                		</div>
                        <div class="col-md-7"></div>
                			<div class="col-md-3">
                                @include('cargo.buscar')
                            </div>
                		</div>

                		<br>

            			<table class="table table-striped table-bordered table-condensed table-hover">
            				<thead class="violet">
            					<td>#</td>
            					<td>CARGO</td>
            					<td colspan="2">OPCIONES</td>
            				</thead>
                    <?php $corre=1; ?>
            				@foreach ($cargos as $car)

        					<tr>
                      <td>{{ $corre}}</td>
          						<td>{{ $car->nombre}}</td>
          						<td align="center"><div> <a href={!! asset('/cargo/'.$car->idcargo.'/edit') !!}> <span title="Modificar Cargo"><span class="glyphicon glyphicon-cog"></span></span> </a> </div></td>
                      @if($car->estado == 1)
                      <td align="center"><div> <a href="" data-target="#delete-{{$car->idcargo}}" data-toggle="modal"> <span title="Dar de baja"><span class="glyphicon glyphicon-arrow-down"></span></span> </a> </div></td>

                      @endif
                      @if($car->estado == 0)
                      <td align="center"><div> <a href="" data-target="#delete2-{{$car->idcargo}}" data-toggle="modal"> <span title="Dar de alta"><span class="glyphicon glyphicon-arrow-up"></span></span> </a> </div></td>
                      @endif

                  </tr>


                  <?php $corre=$corre+1;?>
                    		@endforeach
            			</table>

                  <div class="row">
                      <div class="col-md-4 container" align="left">
                          <ol class="breadcrumb">
                            <li><a href="{{url('cargo')}}"><span class="violet">Cargos Activos</span></a></li>
                            <li><a href="{{url('cargobaja')}}"><span class="violet">Cargos Inactivos</span></a></li>
                          </ol>
                      </div>
                      <div class="col-md-8" align="right">
                          {{$cargos->render()}}
                      </div>
                  </div>

            		</div>
            	</div>
            </div>
        </div>
@endsection
