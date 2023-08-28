<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    //

    public function store(Request $request){

        $ocupacion = $this->obtenerValorCampo($request, 'ocupacion', 'otra_ocupacion');
        $empleado = $this->obtenerValorCampo($request, 'empleado_idea_negocio', 'otro_idea_negocio');
        $tipo_usuario = $this->obtenerValorCampo($request, 'tipo_usuario', 'otro_tipo_usuario');
        $nivel_proyecto_empresa = $this->obtenerValorCampo($request, 'nivel_proyecto_empresa', 'otro_nivel_proyecto_empresa');
        $centro_formacion_servicios = $this->obtenerValorCampo($request, 'centro_formacion_servicios', 'otro_centro_formacion_servicios');
        $hub_innovacion = $this->obtenerValorCampo($request, 'hub_innovacion_servicios', 'otro_hub_innovacion_servicios');
        $linea_tecnologias_hub = $this->obtenerValorCampo($request, 'linea_tecnologica_hub', 'otro_linea_tecnologica_hub'); //Ver array
        $tecnoparque_postulado = $this->obtenerValorCampo($request, 'tecnoparque_postulado', 'otro_tecnoparque_postulado');
        dd($request->except(null));

        dd($ocupacion, $empleado, $tipo_usuario, $nivel_proyecto_empresa, $centro_formacion_servicios, $hub_innovacion, $linea_tecnologias_hub, $tecnoparque_postulado);


    }

    private function obtenerValorCampo(Request $request, $campoPrincipal, $campoOtro){

        if ($request->input($campoPrincipal) === 'otro') {
            return $request->input($campoOtro);
        }
        else{
            return $request->input($campoPrincipal);
        }


    }
}
