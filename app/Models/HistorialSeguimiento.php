<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialSeguimiento extends Model
{
    use HasFactory;
    protected $table = 'historiales_seguimientos';
    protected $fillable = [
        'user_id',
        'remision_id',
        'notas',
        'seguimiento',
        'estado',
    ];
    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function remision()
    {
        return $this->belongsTo(Remision::class, 'remision_id');
    }
}
