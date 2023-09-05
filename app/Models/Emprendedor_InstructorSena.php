<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprendedor_InstructorSena extends Model
{
    use HasFactory;
    protected $table = 'emprendedor_instructor_sena';
    protected $fillable = [
    'centro_formacion_actual_instructor',
    'parte_sennova',
    'participacion_sennova',
    'sennova_semillero_investigacion',
    'nombre_semillero',
    'semillero_cantidad_integrantes',
    'semillero_tema_trabajo',
    'emprendedor_id',
];
}
