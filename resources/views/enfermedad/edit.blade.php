@extends('menu')
@section('contenido')
			<div class="row well">
                <div class="col-md-1"></div>
               	<div class="col-md-10 thumbnail">

            	<div class="page-header">
            		<h3>Datos de <span class="violet">Enfermedad </span></h3>
				</div>

                {!!Form::model($enfermedades,['method'=>'PATCH','route'=>['enfermedad.update', $enfermedades->id]])!!}
                {{Form::token()}}

                @if (count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <input type="hidden" name="modificar" value="1">

                <div class="row">
                		<div class="col-md-2"></div>

                    	<div class="col-md-8">
                			<div class="form-group has-feedback">
                				<label>Enfermedad:</label>
                				<div class="input-group input-group-sm">
                    				<span class="input-group-addon "><span class="fa fa-user"></span></span>
                    				<input name="nombre" id="nombre" type="text" class="form-control" value="{{$enfermedades->nombre}}" onKeyUp="this.value=this.value.toUpperCase();">
                    				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                				</div>
           					</div>
                    	</div>
											<div class="col-md-2"></div>
                </div>

                	<div class="row">
                		<div class="col-sm-12 wow fadeIn">
                			<div class="footer-border"></div>
                		</div>
                	</div>

                	<br>

                	<div class="row">
                		<div class="col-md-4"></div>
                		<div class="col-md-2">
                            <button class="btn btn-sm btn-info btn-block" name="cancelar" id="cancelar" type="reset">
                                <span class="glyphicon glyphicon-remove"></span> Cancelar
                            </button>
                		</div>

                		<div class="col-md-2">
                            <button class="btn btn-sm btn-success btn-block" name="guardar" id="guardar" type="submit">
                                <span class="glyphicon glyphicon-edit"></span> Registrar
                            </button>
                		</div>
                		<div class="col-md-4"></div>
                	</div>
                    {!!Form::close()!!}
            		</div>
                    <div class="col-md-1"></div>
            	</div>
@endsection
