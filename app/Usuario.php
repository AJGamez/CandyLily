<?php

namespace CandyLily;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='users';

    protected $primaryKey='id';

    public $timestamps=true;

    protected $fillable =[
    	'name',
        'apellido',
        'dui',
        'direccion',
        'telefono',
        'email',
        'civil',
        'sexo',
        'username',
        'password',
        'estado',
        'idcargo',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $guarded =[

    ];

    public static function buscar($id){
      $usuario1=Usuario::findOrFail($id);
      $cargo=Cargo::findOrFail($usuario1->idcargo);
      return $cargo;
  }
}
