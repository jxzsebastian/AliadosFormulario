<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;
    protected $table = 'idea';
    protected $fillable = [
        'nombre_idea',
        'descripcion_idea',
        'modelo_negocio',
        'producto_servicio',
        'validacion_producto',
        'idea_genera_ventas',
        'ventas_promedio_mes',
        'idea_cantidad_empleados_genera',
        'emprendedor_id',
];
}
