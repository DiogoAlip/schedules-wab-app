<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;

class HorarioController extends Controller
{
    public function index(Request $request){
        $params = $request->all();
        $size = isset($params['size']) ? $params['size'] : 5;
        $horario = Horario::with('horario')->where('nombre',$params['nombre'])->get();
        return $horario;
    }

    public function store(Request $request){
        $params = $request->all();
        $horario = Horario::create([
            'dia' => $params['dia'],
            'hora_inicio' => $params['hora_inicio'],
            'hora_fin' => $params['hora_fin'],
            'id_aula' => $params['id_aula'],
            'id_curso' => $params['id_curso'],
            'id_docente' => $params['id_docente'],
        ]);

        return $horario;
    }

    public function show($id,Request $request){
        $horario = Horario::find($id);
        return $horario;
    }

    public function update(Request $request){
        $params = $request->all();
        $horario = Horario::update([
            'dia' => $params['dia'],
            'hora_inicio' => $params['hora_inicio'],
            'hora_fin' => $params['hora_fin'],
            'id_aula' => $params['id_aula'],
            'id_curso' => $params['id_curso'],
            'id_docente' => $params['id_docente'],
        ]);

        return $horario;
    }

    public function destroy($id,Request $request){
        $horario = Horario::find($id)->delete();
        return $horario;
    }
}
