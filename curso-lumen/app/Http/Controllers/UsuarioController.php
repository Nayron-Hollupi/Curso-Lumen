<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Iluminate\Request;

class UsuarioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function mostrarTodosUsuarios(){
        return response()->json(Usuario::all());
    }

    public function cadastrarUsuario(Request $request){
        //inserirndo um usuario
        $usuario = new Usuario;
        $usuario->email = $request->email;
        $usuario->usuario = $request->usuario;
        $usuario->password = $request->password;


        //Salvar usuario
        $usuario->save();
        return response()->json($usuario);
    }

    public function mostrarUmUsuario($id){
        return response()->json(Usuario::find($id));
    }

    public function atualizarUsuario($id, Request $request){

        $usuario = Usuario::find($id);
        $usuario->email = $request->email;
        $usuario->usuario = $request->usuario;
        $usuario->password = $request->password;

        //Salvar novamento
        $usuario->save();

        return response()->json($usuario);

    }
    //
}
