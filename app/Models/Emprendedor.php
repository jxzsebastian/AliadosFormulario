<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprendedor extends Model
{
    use HasFactory;
    protected $table = 'emprendedor';
    protected $fillable = [
        'nombre_emprendedor',
        'estado',
        'numero_contacto_emprendedor',
        'correo_emprendedor',
        'tipo_identificacion_emprendedor',
        'identificacion_emprendedor',
        'niveles_educacion_emprendedor',
        'ocupacion_emprendedor',
        'tipo_usuario',
        'programa_sena_ingreso',
        'necesidad_asesoria_sena',
        'ciudad_municipio_emprendedor',
    ];

    public function remisiones()
    {
        return $this->hasMany(Remision::class);
    }

    public function emprendedor_aprendiz(){
        return $this->hasMany(Emprendedor_AprendizEgresado::class);
    }
    public function emprendedor_empleado(){
        return $this->hasMany(Emprendedor_Empleado::class);
    }
    public function emprendedor_investigador(){
        return $this->hasMany(Emprendedor_InvestigadorUniversidad::class);
    }
    public function emprendedor_instructor(){
        return $this->hasMany(Emprendedor_InstructorSena::class);
    }
    public function emprendedor_nivel_idea(){
        return $this->hasMany(EmprendedorIdea::class);
    }
    public function empresas(){
        return $this->hasMany(Empresa::class);
    }
    public function ideas(){
        return $this->hasMany(Idea::class);
    }
    public function programaSenaCentroFormacion(){
        return $this->hasMany(Programa_Sena_CentroFormacion::class);
    }
    public function programaSenaEmprendimiento(){
        return $this->hasMany(Programa_Sena_Emprendimiento::class);
    }
    public function programaSenaHubInnovacion(){
        return $this->hasMany(Programa_Sena_HubInnovacion::class);
    }
    public function programaSenaTecnoparque(){
        return $this->hasMany(Programa_Sena_Tecnoparque::class);
    }
}
