<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aula;

class AulaController extends Controller
{
    public function index(Request $request){
        $params = $request->all();
        $size = isset($params['size']) ? $params['size'] : 5;
        $aula = Aula::with('horario')->get();
        return $aula;
    }

    public function store(Request $request){
        $params = $request->all();
        $aula = Aula::create([
            'nombre' => $params['nombre'],
            'capacidad' => $params['capacidad']
        ]);

        return $aula;
    }

    public function show($id,Request $request){
        $aula = Aula::find($id);
        return $aula;
    }

    public function update(Request $request){
        $params = $request->all();
        $aula = Aula::update([
            'nombre' => $params['nombre'],
            'capacidad' => $params['capacidad']
        ]);

        return $aula;
    }

    public function destroy($id,Request $request){
        $aula = Aula::find($id)->delete();
        return $aula;
    }
}
