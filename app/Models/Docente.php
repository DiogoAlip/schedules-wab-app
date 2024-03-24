<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    
    protected $tables = 'docentes';
    protected $fillable = [
        'nombre',
        'especialidad'
    ];

    public function horario(){
        return $this->hasOne(Horario::class,'id_docente');
    }
}
