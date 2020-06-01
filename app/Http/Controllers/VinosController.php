<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vino;
use App\Duracion;
use App\Clasificacion;
use Validator;

class VinosController extends Controller
{
    public function index()
    {
      $vinos = Vino::all();
      return view('cons_vino', compact('vinos', 'vinos'));
    }
  
}
