<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $table = 'empresa';
    protected $fillable = [
    'tipo_empresa',
    'tipo_persona_juridica',
    'empresa_nit',
    'empresa_tamaño',
    'empresa_innovacion_desarrollo_producto',
    'empresa_proyecto_desarrollo_avances_requiere_prototipos',
    'nivel_proyecto_empresa',
    'emprendedor_id',
    ];
}
