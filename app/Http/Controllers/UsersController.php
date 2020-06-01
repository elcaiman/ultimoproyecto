<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Hash;

class UsersController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index()
      {
        $users = User::all();
        return view('cons_user', compact('users', 'users'));
      }


  public function store(Request $request){
    $validador = Validator::make($request->all(), [
        'name'=>'required|max:255|min:3',
        'email'=>'required|email',
        'pass1'=>'required|max:255|min:5|required_with:pass2|same:pass2',
        'pass2'=>'required|max:255|min:5',
        'nivel'=>'required',
        'img'=>'required|image|max:900|min:3',
      ]);
      if($validador->fails()){
        return back()
          ->withInput()
          ->with('ErrorInsert', 'Favor de llenar todos los campos')
          ->withErrors($validador);
      } else {
        //CODIGO PARA SUBIR LA IMAGEN
        $imagen = $request->file('img');
        $nombre = time().".".$imagen->getClientOriginalExtension();
        $destino = public_path('/users');
        $request->img->move($destino,$nombre);

        $usuario = User::create([
          'name' => $request->name,
          'email' => $request->email,
          'password' =>Hash::make($request->pass1),
          'nivel' =>$request->nivel,
          'img' =>$nombre,
        ]);
        $usuario->save();
        return back()->with('Listo','Se ha insertado correctamente');
      }
  }
  public function edit(Request $request)
  {
    $usuario = User::find($request->id);
    $validador = Validator::make($request->all(), [
        'name'=>'required|max:255|min:3',
        'email'=>'required|email',
      ]);
      if($validador->fails()){
        return back()
          ->withInput()
          ->withErrors($validador);
      } else {

        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->save();
        return back()->with('Listo','Se ha editado correctamente');
      }//llave else validator
  }//llave funcion
  public function destroy($id)
  {
    $user = User::find($id);
    if($user->img != 'default.jpg'){
      if(file_exists( public_path('users/'.$user->img) )){
        unlink( public_path('users/'.$user->img));
      }
    }
    $user->delete();
    return back()->with('Listo','El registro se eliminó correctamente');
  }
}
