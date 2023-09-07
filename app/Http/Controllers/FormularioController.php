<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Formulario;
use App\Models\Emprendedor;
class FormularioController extends Controller
{
    //

    public function index(){

    $formulario = Formulario::paginate();

        return view('lista.index', compact('formulario'));
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

        return view('lista.show', compact('emprendedor'));
    }

    public function listado (){
        $emprendedores = Emprendedor::with([
            'ideas'
        ])->get();

        return view('listado', compact('emprendedores'));
    }
}

