<?php

namespace CandyLily;

use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    protected $table='diagnostico';

    protected $primaryKey='id';

    public $timestamps=true;

    protected $fillable =[
    	'codigo',
    	'nombre',
    	'estado',
    ];
   
    protected $guarded =[

    ];
}
