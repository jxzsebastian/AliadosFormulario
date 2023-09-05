<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprendedor_AprendizEgresado extends Model
{
    use HasFactory;
    protected $table = 'emprendedor_aprendiz_egresado';
    protected $fillable = [
        'centro_formacion_actual_aprendiz',
        'programa_formacion_adscrito',
        'interes_emprendedor_es',
        'emprendedor_id',
];
}
