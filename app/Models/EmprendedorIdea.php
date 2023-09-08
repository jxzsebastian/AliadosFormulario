<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmprendedorIdea extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'emprendedor_idea';
    protected $fillable = [
        'emprendedores_nivel_idea',
        'emprendedor_id',
];
}
