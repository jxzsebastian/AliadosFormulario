<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa_Sena_HubInnovacion extends Model
{
    use HasFactory;
    protected $table = 'programa_sena_hub_innovacion';
    protected $fillable = [
        'hub_innovacion_servicios',
        'linea_tecnologica_hub',
        'conocimientos_lineas_seleccionada',
        'necesidad_puntual_proyecto',
        'cuenta_equipo_trabajo',
        'emprendedor_id',
];
}
