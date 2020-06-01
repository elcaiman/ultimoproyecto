<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;

class IndexController extends Controller
{
  public fuction index(){
    return view ('index');
  }
}
