<?php

namespace CandyLily;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    //
    protected $table ='tratamiento';
    protected $primaryKey='id';
  //  public $timestamps ='false';

    protected $fillable =[
      'nombre',
      'estado'

    ];
}
