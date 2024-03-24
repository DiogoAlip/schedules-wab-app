<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    protected $tables = 'horarios';
    protected $fillable = [
        'dia',
        'hora_inicio',
        'hora_fin',
        'id_aula',
        'id_curso',
        'id_docente'
    ];

    public function aula(){
        return $this->belongsTo(Aula::class,'id_aula');
    }

    public function curso(){
        return $this->belongsTo(Curso::class,'id_curso');
    }

    public function docente(){
        return $this->belongsTo(Docente::class,'id_docente');
    }
}
