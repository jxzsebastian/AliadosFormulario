<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa_Sena_Tecnoparque extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'programa_sena_tecnoparque';
    protected $fillable = [
    'tecnoparque_postulado',
    'servicios_accedidos_tecnoparque',
    'linea_tecnica_adscribe_tecnoparque',
    'condiciones_cumplidas_idea',
    'emprendedor_id',
];
}
