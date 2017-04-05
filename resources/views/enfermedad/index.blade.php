@extends('menu')
@section('contenido')
        <!-- Slider -->

        @foreach($enfermedades as $enf) <?php // modal paar desactivar la enfermedad?>
          <div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="delete-{{$enf->id}}">
            {!!Form::model($enf,['method'=>'PATCH','route'=>['enfermedad.update', $enf->id]])!!}
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                            <input type="hidden" name="modificar" value="2">
                        </button>

                        <h3>Desactivar: <span class="violet">{{ $enf->nombre }}</span></h3>
                    </div>

                    <div class="modal-body">
                        <h5>¿Seguro que quiere dar de baja a la enfermedad?</h5>
                    </div>

                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-md-8" align="left">
                                <h6>* Se cambiará el estado de la Enfermedad a inactivo</h6>
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

        @foreach($enfermedades as $enf2) <?php //modal para activar enfermedad de salud?>
        <div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="delete2-{{$enf2->id}}">
            {!!Form::model($enf2,['method'=>'PATCH','route'=>['enfermedad.update', $enf2->id]])!!}
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>

                        <h3>Activación de <span class="violet">{{ $enf2->nombre }}</span></h3>
                    </div>
                    <input type="hidden" name="modificar" value="3">
                    <div class="modal-body">
                        <h5>¿Seguro que quiere dar de alta la Enfermedad?</h5>
                    </div>

                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-md-8" align="left">
                                <h6>* Se cambiará el estado de la Enfermedad a activo</h6>
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
                            <h3>Administración de <span class="violet">Enfermedades Base</span></h3>
						</div>

						<div class="row">
                		<div class="col-md-2">
                			<a href="{{url('enfermedad/create')}}">
                            <button class="btn btn-xs btn-success btn-block" name="nuevo" id="nuevo" type="button">
                                <span class="glyphicon glyphicon-plus"></span> Nueva Enfermedad
                            </button>
                            </a>
                		</div>
                        <div class="col-md-7"></div>
                			<div class="col-md-3">
                                @include('enfermedad.buscar')
                            </div>
                		</div>

                		<br>
            			<table class="table table-striped table-bordered table-condensed table-hover">
            				<thead class="violet">
            					<td>CÓDIGO</td>
            					<td>EFERMEDADES</td>
            					<td colspan="2">OPCIONES</td>
            				</thead>

            				@foreach ($enfermedades as $enf)
        					<tr>
          						<td>{{ $enf->codigo}}</td>
          						<td>{{ $enf->nombre}}</td>

          						<td align="center"><div> <a href="{{URL::action('EnfermedadController@edit', $enf->id)}}"> <span title="Modificar enfermedad de Salud"><span class="glyphicon glyphicon-cog"></span></span> </a> </div></td>
                      @if($enf->estado == 1)
                      <td align="center"><div> <a href="" data-target="#delete-{{$enf->id}}" data-toggle="modal"> <span title="Dar de baja"><span class="glyphicon glyphicon-arrow-down"></span></span> </a> </div></td>

                      @endif
                      @if($enf->estado == 0)
                      <td align="center"><div> <a href="" data-target="#delete2-{{$enf->id}}" data-toggle="modal"> <span title="Dar de alta"><span class="glyphicon glyphicon-arrow-up"></span></span> </a> </div></td>
                      @endif

                    </tr>
                    		@endforeach
            			</table>


                        <div class="row">
                            <div class="col-md-4 container" align="left">
                                <ol class="breadcrumb">
                                  <li><a href="{{url('enfermedad')}}"><span class="violet">Enfermedades Activas</span></a></li>
                                  <li><a href="{{url('enfermedadbaja')}}"><span class="violet">Enfermedades Inactivas</span></a></li>
                                </ol>
                            </div>
                            <div class="col-md-8" align="right">
                                {{$enfermedades->render()}}
                            </div>
                        </div>
            		</div>
            	</div>
            </div>
        </div>
@endsection
