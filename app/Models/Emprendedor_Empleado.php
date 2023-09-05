<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprendedor_Empleado extends Model
{
    use HasFactory;
    protected $table = 'emprendedor_empleado';
    protected $fillable = [
        'empleado_idea_negocio',
        'emprendedor_id',
];
}
