<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;

class DocenteController extends Controller
{
    public function index(Request $request){
        $params = $request->all();
        $size = isset($params['size']) ? $params['size'] : 5;
        $docente = Docente::with('horario')->where('nombre',$params['nombre'])->get();
        return $docente;
    }

    public function store(Request $request){
        $params = $request->all();
        $docente = Docente::create([
            'nombre' => $params['nombre'],
            'especialidad' => $params['especialidad']
        ]);

        return $docente;
    }

    public function show($id,Request $request){
        $docente = Docente::find($id);
        return $docente;
    }

    public function update(Request $request){
        $params = $request->all();
        $docente = Docente::update([
            'nombre' => $params['nombre'],
            'especialidad' => $params['especialidad']
        ]);

        return $docente;
    }

    public function destroy($id,Request $request){
        $docente = Docente::find($id)->delete();
        return $docente;
    }
}
