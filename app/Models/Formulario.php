<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    use HasFactory;
    protected $table = 'form';
    protected $fillable = [
    'nombre_emprendimiento',
    'nombre_emprendedor',
    'tipo_identificacion_emprendedor',
    'identificacion_emprendedor',
    'numero_contacto_emprendedor',
    'correo_emprendedor',
    'ocupacion_emprendedor',
    'niveles_eduacion_emprendedor',
];
}
