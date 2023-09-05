<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa_Sena_CentroFormacion extends Model
{
    use HasFactory;
    protected $table = 'programa_sena_centro_formacion';
    protected $fillable = [
        'centro_formacion_servicios',
        'emprendedor_id',
];
}
