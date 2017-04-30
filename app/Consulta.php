<?php

namespace CandyLily;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $table='consulta';

    protected $primaryKey='id';

    public $timestamps=true;

    protected $fillable =[
    	'nexpediente',    	
    	'fconsulta',
    	'procendencia',
    	'si',
    	'no',
    	'pv',
    	'ss',
    	'fim',
    	'fio',
    	'vf1',
    	'vf2',
    	'amenorrea',
    	'av1',
    	'av2',
    	'at1',
    	'at2',
    	'diagnostico',
    	'tratamiento',
    	'ebase',
    	'observaciones',
    ];
   
    protected $guarded =[

    ];
}
