{!! Form::open(array('url'=>'enfermedad', 'method'=>'GET', 'autocomplete'=>'off', 'role'=>'search')) !!}
<div class="form-group">
	<div class="input-group">
      <input type="text" class="form-control" name="searchText" placeholder="Buscar" value="{{$searchText}}" onKeyUp="this.value=this.value.toUpperCase();">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">Buscar</button>
      </span>
    </div>
</div>
{{Form::close()}}
