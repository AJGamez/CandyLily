@extends('menu')
@section('contenido')
        <!-- Slider -->
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
                                <span class="glyphicon glyphicon-plus"></span> Cargo
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

            				@foreach ($cargos as $car)

        					<tr>
                      <td>{{ $car->idcargo}}</td>
          						<td>{{ $car->nombre}}</td>
          						<td align="center"><div> <a href=""> <span title="Ver usuario"><span class="glyphicon glyphicon-eye-open"></span></span> </a> </div></td>
          						<td align="center"><div> <a href=""> <span title="Dar de baja"><span class="glyphicon glyphicon-arrow-down"></span></span> </a> </div></td>
                    		</tr>
                    		@endforeach
            			</table>

            		</div>
            	</div>
            </div>
        </div>
@endsection
