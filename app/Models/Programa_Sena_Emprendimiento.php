<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa_Sena_Emprendimiento extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'programa_sena_emprendimiento';
    protected $fillable = [
    'emprendimiento_servicios',
    'emprendedor_id',
];
}
