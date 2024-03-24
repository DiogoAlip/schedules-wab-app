<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $tables = 'cursos';
    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    public function horario(){
        return $this->hasOne(Horario::class,'id_curso');
    }
}
