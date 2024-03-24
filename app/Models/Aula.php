<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;

    protected $tables = 'aulas';
    protected $fillable = [
        'nombre',
        'capacidad'
    ];

    public function horario(){
        return $this->hasOne(Horario::class,'id_aula');
    }
}
