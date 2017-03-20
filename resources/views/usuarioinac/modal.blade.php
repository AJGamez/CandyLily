<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="delete-{{$usu->id}}">
    {{Form::Open(array('action'=>array('UsuarioinacController@destroy', $usu->id), 'method'=>'delete'))}}
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                                    
                <h3>Activación de <span class="violet">Usuario</span></h3>
            </div>

            <div class="modal-body">    
                <h5>¿Seguro que quiere dar de alta al usuario?</h5>
            </div>

            <div class="modal-footer"> 
                <div class="row">
                    <div class="col-md-8" align="left">
                        <h6>* Se cambiará el estado del usuario a activo</h6> 
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