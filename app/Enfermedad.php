<?php

namespace CandyLily;

use Illuminate\Database\Eloquent\Model;

class Enfermedad extends Model
{
  protected $table ='enfermedad';
  protected $primaryKey='id';
//  public $timestamps ='false';

  protected $fillable =[
    'nombre',
    'estado',
    'codigo'
  ];
}
