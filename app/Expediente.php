<?php

namespace CandyLily;

use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    protected $table='expediente';

    protected $primaryKey='id';

    public $timestamps=true;

    protected $fillable =[
    	'nexpediente',
        'cecosf',
        'nombre',
        'apellido',
        'alias',
        'fnac',
        'sexo',
        'efamiliar',
        'municipionac',
        'departamentonac',
        'paisnac',
        'nacionalidad',
        'documentoidentidad',
        'ndocidenti',
        'telefonopac',
        'ocupacion',
        'direccion',
        'departamentodire',
        'municipiodire',
        'canton',
        'ageografica',
        'asegurado',
        'areacotiza',
        'nafiliacion',
        'ltrabajo',
        'telefonotra',
        'npadre',
        'nmadre',
        'nconyuge',
        'parentescoresponsable',
        'nresponsable',
        'docidentires',
        'ndocidentires',
        'direccionres',
        'telefonores',
        'parentescopdatos',
        'nombrepdatos',
        'docidentidadpdatos',
        'ndocpdatos',
        'observaciones',
        'estado',
        'idtinfo',
    ];
   
    protected $guarded =[

    ];
}
