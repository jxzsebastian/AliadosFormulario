<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Formulario;
use App\Models\Emprendedor;
use App\Models\HistorialSeguimiento;
use App\Models\Remision;

class FormularioController extends Controller
{
    //

    public function index(){

    $formulario = Formulario::paginate();

        return view('usuarios-caracterizacion.index', compact('formulario'));
    }



    public function mostrarEmprendedor($id)
    {
        $emprendedor = Emprendedor::with([
            'emprendedor_aprendiz',
            'emprendedor_empleado',
            'emprendedor_investigador',
            'emprendedor_instructor',
            'emprendedor_nivel_idea',
            'empresas',
            'ideas',
            'programaSenaCentroFormacion',
            'programaSenaEmprendimiento',
            'programaSenaHubInnovacion',
            'programaSenaTecnoparque',
        ])->findOrFail($id);
        return view('usuarios-caracterizacion.show', compact('emprendedor'));
    }

    public function listado (){
        $emprendedores = Emprendedor::with([
            'ideas'
        ])->orderByDesc('created_at')->get();

        return view('usuarios-caracterizacion/listado', compact('emprendedores'));
    }

}
