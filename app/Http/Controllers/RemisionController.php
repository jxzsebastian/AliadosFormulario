<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emprendedor;
use App\Models\HistorialSeguimiento;
use App\Models\Remision;

use function Laravel\Prompts\error;

class RemisionController extends Controller
{
    //

    public function remision ($id){

        $emprendedor = Emprendedor::with(['ideas'])->where('id', $id)->get();

        return view('usuarios-remision/formulario-remision', compact('emprendedor'));
    }


    public function listado_remitidos(Request $request){

        $estado = $request->input('estado', 'Todos');
        $filtro = $request->input('filtro');

        $query = Emprendedor::query();

        if($estado === 'Remitido') {
            $query->where('estado', 'Remitido');
        }elseif ($estado === 'Finalizado') {
            $query->where('estado', 'Finalizado');
        }else{
            $query->whereNotIn('estado', ['Caracterizacion']);
        }

        if ($filtro) {
            $query->where(function($subquery) use ($filtro) {
                $subquery->where('nombre_emprendedor', 'like', '%' . $filtro . '%')
                        ->orWhere('identificacion_emprendedor', 'like', '%' . $filtro . '%');
            });
        }

        $emprendedores = $query->with(['ideas', 'remisiones.historialSeguimiento.usuario'])->get();

        return view('usuarios-remision/remitidos', compact('emprendedores'));

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

        $emprendedores = Emprendedor::with(['remisiones.historialSeguimiento.usuario'])->where('estado', 'Remitido')->get();

       return redirect()->route('usuario.remitidos')->with('edit', 'ok');

    }


    public function update_remision(Request $request, $id){
        $remision = Remision::where('emprendedor_id', $id)->first(); // Obtener la primera remisión que cumple con el criterio

        if ($remision) {
            $historialSeguimiento = new HistorialSeguimiento([
                'user_id' => auth()->user()->id, // ID del usuario logeado
                'remision_id' => $remision->id, // ID de la remisión creada
                'notas' => $request->input('notas'),
                'seguimiento' => $request->input('seguimiento'),
            ]);
            $historialSeguimiento->save();
        } else {
            // Manejar el caso en el que no se encontró una remisión
        }

		return redirect()->route('usuario.remitidos')->with('edit', 'ok');

    }
}
