<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprendedor_InvestigadorUniversidad extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'emprendedor_investigador_universidad';
    protected $fillable = [
        'investigador_universidad_nombre',
        'investigador_universidad_grupo_investigacion',
        'investigador_idea_capacidad_producto',
        'emprendedor_id',
];
}
