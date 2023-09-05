<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprendedor extends Model
{
    use HasFactory;
    protected $table = 'emprendedor';
    protected $fillable = [
    'nombre_emprendedor',
    'numero_contacto_emprendedor',
    'correo_emprendedor',
    'tipo_identificacion_emprendedor',
    'identificacion_emprendedor',
    'niveles_educacion_emprendedor',
    'ocupacion_emprendedor',
    'tipo_usuario',
    'programa_sena_ingreso',
    'necesidad_asesoria_sena',
];
}
