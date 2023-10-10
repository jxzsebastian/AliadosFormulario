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

    public function remision ($id){

        $emprendedor = Emprendedor::with(['ideas'])->where('id', $id)->get();

        return view('usuarios-remision/formulario-remision', compact('emprendedor'));
    }

    public function listado_remitidos(){

        return view('usuarios-remision/remitidos');
    }


    public function remitir_usuario(Request $request){


        $emprendedorId = $request->input('emprendedor_id');

        $datos = $request->validate([
            'contacto_recepcion' => 'required',
            'estrategia_llegada' => 'required',
            'seguimiento' => 'required',
            'notas' => 'required',
            'emprendedor_id' => 'required',

        ]);

        $remision = new Remision([
            'estrategia_llegada' => $request->input('estrategia_llegada'),
            'contacto_recepcion' => $request->input('contacto_recepcion'),
            'emprendedor_id' => $request->input('emprendedor_id'), // Asignar el ID del emprendedor
        ]);

        $remision->save();

    // Cambia el estado del emprendedor a remitido (esto depende de tu lógica de negocios)
        $emprendedor = Emprendedor::find($emprendedorId);
        $emprendedor->estado = 'Remitido';
        $emprendedor->save();

        $historialSeguimiento = new HistorialSeguimiento([
            'user_id' => auth()->user()->id, // ID del usuario logeado
            'remision_id' => $remision->id, // ID de la remisión creada
            'notas' => $request->input('notas'),
            'seguimiento' => $request->input('seguimiento'),
        ]);
        $historialSeguimiento->save();
    }
}
