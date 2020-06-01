<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clasificacion extends Model
{
  protected $fillable = [
      'idDuracion', 'tipo', 'tiempo'
  ];
}
