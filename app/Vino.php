<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vino extends Model
{
  protected $fillable = [
      'nombre', 'color', 'fermentacion','grado_alcohol'
  ];
}
