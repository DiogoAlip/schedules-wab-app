<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index(Request $request){
        $params = $request->all();
        $size = isset($params['size']) ? $params['size'] : 5;
        $curso = Curso::with('horario')->get();
        return $curso;
    }

    public function store(Request $request){
        $params = $request->all();
        $curso = Curso::create([
            'nombre' => $params['nombre'],
            'descripcion' => $params['descripcion']
        ]);

        return $curso;
    }

    public function show($id,Request $request){
        $curso = Curso::find($id);
        return $curso;
    }

    public function update(Request $request){
        $params = $request->all();
        $curso = Curso::update([
            'nombre' => $params['nombre'],
            'descripcion' => $params['descripcion']
        ]);

        return $curso;
    }

    public function destroy($id,Request $request){
        $curso = Curso::find($id)->delete();
        return $curso;
    }
}
