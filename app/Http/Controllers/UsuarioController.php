<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index(Request $request){
        $params = $request->all();
        $size = isset($params['size']) ? $params['size'] : 5;
        $usuario = Usuario::with('horario')->get();
        return $usuario;
    }

    public function store(Request $request){
        $params = $request->all();
        $usuario = Usuario::create([
            'nombre' => $params['nombre'],
            'tipo' => $params['tipo'],
            'contraseña' => $params['contraseña']
        ]);

        return $usuario;
    }

    public function show($id,Request $request){
        $usuario = Usuario::find($id);
        return $usuario;
    }

    public function update(Request $request){
        $params = $request->all();
        $usuario = Usuario::update([
            'nombre' => $params['nombre'],
            'tipo' => $params['tipo'],
            'contraseña' => $params['contraseña']
        ]);

        return $usuario;
    }

    public function destroy($id,Request $request){
        $usuario = Usuario::find($id)->delete();
        return $usuario;
    }
}
