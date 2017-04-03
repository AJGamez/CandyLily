<?php

namespace CandyLily;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
  protected $table ='unidad';
  protected $primaryKey='idunidad';
//  public $timestamps ='false';

  protected $fillable =[
    'nombre',
    'estado',
    'codigo'
  ];
}
