<?php

namespace CandyLily;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table ='cargo';
    protected $primaryKey='idcargo';
    public $timestamps ='false';

    protected $fillable =[
      'nombre',
      'estado',
      'modusuario',
      'verusuario',
      'modcargo',
      'vercargo',
      'modcitas',
      'vercitas',
      'modpacientes',
      'verpaciente',
      'modrespaldo',
      'verespaldo',
      'modunidad',
      'verunidad',
      'modconsulta',
      'verconsulta',
      'moddiagnostico',
      'verdiagnostico',
      'modtratamiento',
      'vertratamiento',
      'verbitacora'
    ];
}
