<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remision extends Model
{
    use HasFactory;
    protected $table = 'remisiones';

    protected $fillable = [
        'estrategia_llegada',
        'contacto_recepcion',
        'emprendedor_id',
    ];
    public function emprendedor()
    {
        return $this->belongsTo(Emprendedor::class);
    }

    public function historialSeguimiento()
    {
        return $this->hasMany(HistorialSeguimiento::class, 'remision_id');
    }
}
