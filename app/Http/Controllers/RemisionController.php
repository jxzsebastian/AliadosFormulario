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


    public function listado_remitidos(Request $request)
    {
        $estado = $request->input('estado', 'Todos');
        $filtro = $request->input('filtro');

        // Cambios en la consulta para utilizar paginate
        $query = Emprendedor::where('estado', '!=', 'Caracterizacion');

        if ($estado != 'Todos') {
            $query->whereHas('remisiones.historialSeguimiento', function ($query) use ($estado) {
                $query->where('estado', $estado);
            });
        } else {
            $query->with(['remisiones.historialSeguimiento.usuario']);
        }

        // Filtrar por nombre o identificación si hay un filtro
        if ($filtro) {
            $query->where(function ($query) use ($filtro) {
                $query->where('nombre_emprendedor', 'like', '%' . $filtro . '%')
                    ->orWhere('identificacion_emprendedor', 'like', '%' . $filtro . '%');
            });
        }

        // Agregar ordenación por fecha de creación
        $query->orderBy('updated_at', 'desc');

        // Obtener los resultados paginados
        $emprendedores = $query->paginate(12); // Puedes ajustar el número de elementos por página

        // Devolver la vista con los datos paginados
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
            'programa_sena_actual' => $request->input('estrategia_llegada'),
        ]);

        $historialSeguimiento->save();

        $emprendedores = Emprendedor::with(['remisiones.historialSeguimiento.usuario'])->where('estado', 'Remitido')->get();

       return redirect()->route('usuario.remitidos')->with('remitido', 'ok');

    }


    public function update_remision(Request $request, $id){
        $remision = Remision::where('emprendedor_id', $id)->first(); // Obtener la primera remisión que cumple con el criterio

        if ($remision) {
            $historialSeguimiento = new HistorialSeguimiento([
                'user_id' => auth()->user()->id, // ID del usuario logeado
                'remision_id' => $remision->id, // ID de la remisión creada
                'notas' => $request->input('notas'),
                'seguimiento' => $request->input('seguimiento'),
                'estado' => $request->input('estado'),
                'programa_sena_actual' => $request->input('programa_sena_actual'),
            ]);
            $historialSeguimiento->save();
        } else {
            // Manejar el caso en el que no se encontró una remisión
        }

		return redirect()->route('usuario.remitidos')->with('edit', 'ok');

    }

/*     public function update_remision_estado(Request $request, $id){
        $remision = Remision::where('emprendedor_id', $id)->first(); // Obtener la primera remisión que cumple con el criterio
        if ($remision) {

            $historialSeguimiento = new HistorialSeguimiento([
                'user_id' => auth()->user()->id, // ID del usuario logeado
                'remision_id' => $remision->id, // ID de la remisión creada
                'notas' => $request->input('notas'),
                'seguimiento' => $request->input('seguimiento'),
                'estado' => $request->input('estado'),
            ]);

            $historialSeguimiento->save();

        } else {
            dd(' no success');
        }

		return redirect()->route('usuario.remitidos')->with('edit', 'ok');

    } */
}
