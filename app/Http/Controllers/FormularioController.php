<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Formulario;
class FormularioController extends Controller
{
    //

    public function store(Request $request){


        $nombre_emprendedor = request('nombre_emprendedor');
        $numero_contacto_emprendedor = request('numero_contacto_emprendedor');
        $correo_emprendedor = request('correo_emprendedor');
        $tipo_identificacion_emprendedor = request('tipo_identificacion_emprendedor');
        $identificacion_emprendedor =request('identificacion_emprendedor');
        $programa_formacion_adscrito =request('programa_formacion_adscrito');
        $ciudad_municipio_emprendedor =request('ciudad_municipio_emprendedor');
        $ocupacion = $this->obtenerValorCampo($request, 'ocupacion', 'otra_ocupacion');
        $parte_sennova =request('parte_sennova');
        $sennova_semillero_investigacion =request('sennova_semillero_investigacion');
        $investigador_universidad_nombre =request('investigador_universidad_nombre');
        $investigador_universidad_grupo_investigacion =request('investigador_universidad_grupo_investigacion');
        $investigador_idea_capacidad_producto =request('investigador_idea_capacidad_producto');
        $tipo_usuario = $this->obtenerValorCampo($request, 'tipo_usuario', 'otro_tipo_usuario');
        $nombre_semillero =request('nombre_semillero');
        $semillero_cantidad_integrantes =request('semillero_cantidad_integrantes');
        $semillero_tema_trabajo =request('semillero_tema_trabajo');
        $tipo_persona_juridica =request('tipo_persona_juridica');
        $empresa_nit =request('empresa_nit');
        $empresa_innovacion_desarrollo_producto =request('empresa_innovacion_desarrollo_producto');
        $empresa_proyecto_desarrollo_avances_requiere_prototipos =request('empresa_proyecto_desarrollo_avances_requiere_prototipos');
        $nivel_proyecto_empresa = $this->obtenerValorCampo($request, 'nivel_proyecto_empresa', 'otro_nivel_proyecto_empresa');
        $nombre_idea =request('nombre_idea');
        $descripcion_idea =request('descripcion_idea');
        $idea_genera_ventas =request('idea_genera_ventas');
        $ventas_promedio_mes =request('ventas_promedio_mes');
        $idea_cantidad_empleados_genera =request('idea_cantidad_empleados_genera');
        $programa_sena_ingreso =request('programa_sena_ingreso');
        $centro_formacion_servicios = $this->obtenerValorCampo($request, 'centro_formacion_servicios', 'otro_centro_formacion_servicios');
        $hub_innovacion = $this->obtenerValorCampo($request, 'hub_innovacion_servicios', 'otro_hub_innovacion_servicios');
        $linea_tecnologias_hub = $this->obtenerValorCampo($request, 'linea_tecnologica_hub', 'otro_linea_tecnologica_hub');
        $conocimientos_lineas_seleccionada =request('conocimientos_lineas_seleccionada');
        $necesidad_puntual_proyecto =request('necesidad_puntual_proyecto');
        $cuenta_equipo_trabajo =request('cuenta_equipo_trabajo');
        $tecnoparque_postulado = $this->obtenerValorCampo($request, 'tecnoparque_postulado', 'otro_tecnoparque_postulado');
        $linea_tecnica_adscribe_tecnoparque =request('linea_tecnica_adscribe_tecnoparque');
        $ciudad_municipio_emprendedor =request('ciudad_municipio_emprendedor');




        // dd($nombre_emprendedor);
         
        // $empleado = $this->obtenerValorCampo($request, 'empleado_idea_negocio', 'otro_idea_negocio');
        // $nivel_proyecto_empresa = $this->obtenerValorCampo($request, 'nivel_proyecto_empresa', 'otro_nivel_proyecto_empresa');
        // $centro_formacion_servicios = $this->obtenerValorCampo($request, 'centro_formacion_servicios', 'otro_centro_formacion_servicios');
        // $hub_innovacion = $this->obtenerValorCampo($request, 'hub_innovacion_servicios', 'otro_hub_innovacion_servicios');
        // $linea_tecnologias_hub = $this->obtenerValorCampo($request, 'linea_tecnologica_hub', 'otro_linea_tecnologica_hub'); //Ver array
        // $tecnoparque_postulado = $this->obtenerValorCampo($request, 'tecnoparque_postulado', 'otro_tecnoparque_postulado');
        // dd($request->all());

        // dd($ocupacion, $empleado, $tipo_usuario, $nivel_proyecto_empresa, $centro_formacion_servicios, $hub_innovacion, $linea_tecnologias_hub, $tecnoparque_postulado);

        $formulario = new  formulario();
        $formulario -> nombre_emprendedor =$request -> nombre_emprendedor;
        $formulario ->  numero_contacto_emprendedor =$request -> nombre_emprendedor;
        $formulario -> correo_emprendedor  =$request -> correo_emprendedor ;
        $formulario ->  tipo_identificacion_emprendedor =$request -> tipo_identificacion_emprendedor ;
        $formulario -> identificacion_emprendedor =$request -> identificacion_emprendedor ;
        $formulario -> programa_formacion_adscrito  =$request -> programa_formacion_adscrito ;
        $formulario -> ciudad_municipio_emprendedor =$request -> ciudad_municipio_emprendedor;
        $formulario -> ocupacion_emprendedor =$ocupacion;
        // $formulario -> ocupacion_emprendedor =$request -> ocupacion_emprendedor ;
        // $formulario -> otro_idea_negocio =$request -> otro_idea_negocio ;
        $formulario -> parte_sennova =$request -> parte_sennova ;
        $formulario -> sennova_semillero_investigacion =$request -> sennova_semillero_investigacion ;
        $formulario -> investigador_universidad_nombre =$request -> investigador_universidad_nombre ;
        $formulario -> investigador_universidad_grupo_investigacion =$request -> investigador_universidad_grupo_investigacion ;
        $formulario -> investigador_idea_capacidad_producto =$request -> investigador_idea_capacidad_producto ;
        $formulario -> tipo_usuario =$tipo_usuario;
        $formulario -> nombre_semillero =$request -> nombre_semillero;
        $formulario -> semillero_cantidad_integrantes =$request -> semillero_cantidad_integrantes;
        $formulario -> semillero_tema_trabajo =$request -> semillero_tema_trabajo;
        $formulario -> tipo_persona_juridica =$request -> tipo_persona_juridica;
        $formulario -> empresa_nit =$request -> empresa_nit;
        $formulario -> empresa_innovacion_desarrollo_producto =$request -> empresa_innovacion_desarrollo_producto;
        $formulario -> empresa_proyecto_desarrollo_avances_requiere_prototipos =$request -> empresa_proyecto_desarrollo_avances_requiere_prototipos;
        $formulario -> otro_nivel_proyecto_empresa =$nivel_proyecto_empresa;
        $formulario -> nombre_idea =$request -> nombre_idea;
        $formulario -> descripcion_idea =$request -> descripcion_idea;
        $formulario -> idea_genera_ventas =$request -> idea_genera_ventas;
        $formulario -> ventas_promedio_mes =$request -> ventas_promedio_mes;
        $formulario -> idea_cantidad_empleados_genera =$request -> idea_cantidad_empleados_genera;
        $formulario -> programa_sena_ingreso =$request -> programa_sena_ingreso;
        $formulario -> otro_centro_formacion_servicios =$centro_formacion_servicios;
        $formulario -> otro_hub_innovacion_servicios =$hub_innovacion;
        $formulario -> otro_linea_tecnologica_hub = $linea_tecnologias_hub;
        $formulario -> conocimientos_lineas_seleccionada =$request -> conocimientos_lineas_seleccionada;
        $formulario -> necesidad_puntual_proyecto =$request -> necesidad_puntual_proyecto;
        $formulario -> cuenta_equipo_trabajo =$request -> cuenta_equipo_trabajo;
         $formulario -> otro_tecnoparque_postulado = $tecnoparque_postulado ;
        $formulario -> linea_tecnica_adscribe_tecnoparque =$request -> linea_tecnica_adscribe_tecnoparque;
        $formulario -> ciudad_municipio_emprendedor =$request -> ciudad_municipio_emprendedor;








        // $formulario -> numero_contacto_emprendedor =$request -> numero_contacto_emprendedor;
        // $formulario -> correo_emprendedor =$request -> correo_emprendedor;
        // $formulario -> tipo_identificacion_emprendedor =$request -> tipo_identificacion_emprendedor;
        // $formulario -> identificacion_emprendedor =$request -> identificacion_emprendedor;
        // $formulario -> nombre_idea =$request -> nombre_idea;

        $formulario->save();
        
        $formulario = Formulario::paginate();

        return view('lista.index', compact('formulario'));

       

    }

    private function obtenerValorCampo(Request $request, $campoPrincipal, $campoOtro){

        if ($request->input($campoPrincipal) === 'otro') {
            return $request->input($campoOtro);
        }
        else{
            return $request->input($campoPrincipal);

        }


    }
    public function index(){

    $formulario = Formulario::paginate();

        return view('lista.index', compact('formulario'));
    }
    public function show ($id){


        $formulario = Formulario::find($id);


        return view('lista.show', compact('formulario'));

    }
}

