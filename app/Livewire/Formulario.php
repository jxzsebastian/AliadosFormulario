<?php

namespace App\Livewire;
use App\Models\Formulario as FormularioVista;
use Illuminate\Http\Request;

use Livewire\Component;

class Formulario extends Component
{
    public $currentStep = 1;

    //Variables para los datos del usuario
    public  $nombre_emprendedor,
            $numero_contacto_emprendedor,
            $correo_emprendedor,
            $status = 1,
            $identificacion_emprendedor,
            $tipo_identificacion_emprendedor,
            $ciudad_municipio_emprendedor;

    //Variables para los datos del usuario de ocupacion y escolaridad
    public  $ocupacion,
            $otra_ocupacion,
            $niveles_educacion_emprendedor = [];

    //Variables para el fomulario de empleados
    public  $empleado_idea_negocio,
            $otro_idea_negocio;

    //Variables para el tipo de usuario
    public  $tipo_usuario,
            $otro_tipo_usuario;

    //Variables para el tipo de empresa
    public  $tipo_empresa;
    //Variables para el tipo de empresa juridica
    public  $tipo_persona_juridica;

    //Variables para los datos de la empresa
    public  $empresa_nit,
            $empresa_tamaño,
            $empresa_innovacion_desarrollo_producto,
            $empresa_proyecto_desarrollo_avances_requiere_prototipos;

    //Variables para Necesidades de Usuarios sin Proyecto concreto
    public $necesidad_asesoria_sena = [];

    //Variables para especificar programa de ingreso / Unidad sena ingreso proyecto
    public $programa_sena_ingreso;

    //Variables para el formulario de Emprendedores
    public  $emprendedores_nivel_idea;

    //Variables para el formulario de Elementos de la Idea/proyecto
    public $nombre_idea,
            $descripcion_idea,
            $modelo_negocio,
            $producto_servicio,
            $validacion_producto = [],
            $idea_genera_ventas;

    //Variables para formulario ventas promedio
    public $ventas_promedio_mes;

    //Variables para cuantos empleados genera
    public $idea_cantidad_empleados_genera;


    //Variables Emprendimientos Servicios SENA
    public $emprendimiento_servicios;

    //Variables Tencoparque Servicios SENA
    public  $tecnoparque_postulado,
            $otro_tecnoparque_postulado,
            $servicios_accedidos_tecnoparque,
            $linea_tecnica_adscribe_tecnoparque = [],
            $condiciones_cumplidas_idea = [];


    //Variables Centro de formacion Servicios SENA

    public  $centro_formacion_servicios,
            $otro_centro_formacion_servicios;

    //Variables Hub Innovacion Servicios SENA

    public  $hub_innovacion_servicios,
            $linea_tecnologica_hub = [],
            $otro_hub_innovacion_servicios,
            $otro_linea_tecnologica_hub,
            $conocimientos_lineas_seleccionada,
            $necesidad_puntual_proyecto,
            $cuenta_equipo_trabajo;

    //Variables si es Aprendiz o Egresado SENA
    public  $centro_formacion_actual_aprendiz,
            $programa_formacion_adscrito,
            $interes_emprendedor_es;

    //Variables si es Instructor SENA
    public  $centro_formacion_actual_instructor,
            $parte_sennova;

    //Variables si es Instructor SENA es parte SENNOVA
    public  $participacion_sennova = [],
            $sennova_semillero_investigacion;

    //Variables si es SENNOVA cuenta con Semillero
    public  $nombre_semillero,
            $semillero_cantidad_integrantes,
            $semillero_tema_trabajo;


    //Variables si es Investigador Universidad
    public  $investigador_universidad_nombre,
            $investigador_universidad_grupo_investigacion,
            $investigador_idea_capacidad_producto;

    //Variables Nivel proyecto empresa
    public  $nivel_proyecto_empresa,
            $otro_nivel_proyecto_empresa;
    //
    public $successMessage = '';



    public function render()
    {
        return view('livewire.formulario');
    }

    public function pasoPrimeroInformacionUsuario()
    {
        /*         $validatedData = $this->validate([
            'nombre_emprendedor' => 'required',
            'numero_contacto_emprendedor' => 'required',
            'correo_emprendedor' => 'required',
            'identificacion_emprendedor' => 'required',
            'tipo_identificacion_emprendedor' => 'required',
            'ciudad_municipio_emprendedor' => 'required',
        ]); */

        $this->currentStep = 2;
    }

    public function pasoSegundoOcupacionEscolaridad()
    {

        /*
                $validatedData = $this->validate([
                    'ocupacion' => 'required',
                    'niveles_educacion_emprendedor' => 'required',
                ]); */
        $this->ocupacion = $this->obtenerValorCampo($this->ocupacion, $this->ocupacion, $this->otra_ocupacion);


        switch ($this->ocupacion) {
            case 'empleado':
                $this->currentStep = 3; //Formulario Empleado
                break;
            case 'trabajador_independiente':
                $this->currentStep = 4; //Tipo de Usuario
                break;
            case 'egresado_sena':
                $this->currentStep = 18; //Formulario Egresado Sena y Aprendiz
                break;
            case 'aprendiz_sena':
                $this->currentStep = 18; //Formulario Egresado Sena y Aprendiz
                break;
            case 'estudiante_universitario':
                $this->currentStep = 4; //Tipo de Usuario
                break;
            case 'instructor_sena':
                $this->currentStep = 19; //Formulario Instructor SENA
                break;
            case 'investigador_universidad':
                $this->currentStep = 22; //Formulario Investigador Universidad
                break;
            default:
                $this->currentStep = 4; //Tipo de Usuario
                break;

        }

    }

    public function pasoSiOcupacionEmpleado()
    {
        /*         $validatedData = $this->validate([
            'empleado_idea_negocio' => 'required',
        ]); */
        $this->empleado_idea_negocio = $this->obtenerValorCampo($this->empleado_idea_negocio, $this->empleado_idea_negocio, $this->otro_idea_negocio);
        #, proyecto_empresa_empleado

        switch ($this->empleado_idea_negocio) {
            case 'proyecto_propio_idea':
                $this->currentStep = 4; //Tipo de Usuario
                break;
            case 'proyecto_empresa_empleado':
                $this->currentStep = 5; //Tipo de Empresa
                break;
            default:
                dd($this->empleado_idea_negocio);
                break;
        }

    }

    public function pasoTipoUsuario()
    {
        /* $validatedData = $this->validate([
            'tipo_usuario' => 'required',
        ]); */
        $this->tipo_usuario = $this->obtenerValorCampo($this->tipo_usuario, $this->tipo_usuario, $this->otro_tipo_usuario);
        switch ($this->tipo_usuario) {
            case 'tipo_usuario_emprendedor':
                $this->currentStep = 10; //Formulario Emprendedores
                break;
            case 'tipo_usuario_empresa':
                $this->currentStep = 5; //Tipo de Empresa
                break;
            default:
                dd($this->tipo_usuario);
                break;
        }
    }

    public function pasoSiTipoUsuarioEmpresa()
    {
        #tipo_empresa_persona_natural,tipo_empresa_persona_juridica
        switch ($this->tipo_empresa) {
            case 'tipo_empresa_persona_natural':
                $this->currentStep = 7; //Datos Empresa

                break;
            case 'tipo_empresa_persona_juridica':
                $this->currentStep = 6; //Tipo de Empresa
                break;
            default:
                dd($this->tipo_usuario);
                break;
        }
    }

    public function pasoSiTipoEmpresaJuridica()
    {
        /*         $validatedData = $this->validate([
                    'tipo_persona_juridica' => 'required',
                ]);
                dd($this->tipo_persona_juridica);
        */
        $this->currentStep=7;

    }




    public function pasoUsuariosSinProyectoConcreto()
    {
        /*          $validatedData = $this->validate([
                    'necesidad_asesoria_sena' => 'required',
                ]);

            dd($this->necesidad_asesoria_sena);
        */


        $this->currentStep=9;
    }


    public function pasoProgramaIngreso()
    {
         /* $validatedData = $this->validate([
            'programa_sena_ingreso' => 'required',
        ]); */

        #centros_formacion, emprendimiento, hub_innovacion, tecnoparque, extensionismo
        switch ($this->programa_sena_ingreso) {
            case 'centros_formacion':
                $this->currentStep = 16; //Formulario centros_formacion
                break;
            case 'emprendimiento':
                $this->currentStep = 15; //Formulario emprendimiento
                break;
            case 'hub_innovacion':
                $this->currentStep = 17; //Formulario hub_innovacion
                break;
            case 'tecnoparque':
                $this->currentStep = 14; //Formulario tecnoparque
                break;
            case 'extensionismo':
                $this->currentStep=26; //final step
                break;
        }

    }


    public function pasoFormularioIdeaProyecto()
    {
         /* $validatedData = $this->validate([
            'programa_sena_ingreso' => 'required',
        ]); */

        /* dd(
        $this->nombre_idea,
        $this->descripcion_idea,
        $this->modelo_negocio,
        $this->producto_servicio,
        $this->validacion_producto,
        $this->idea_genera_ventas,); */

        switch ($this->idea_genera_ventas) {
            case 'si':
                $this->currentStep = 12; //Ventas Promedio
                break;
            case 'no':
                $this->currentStep = 13; //Cuantos Empleados Genera
                break;
        }

    }
    public function pasoDatosEmpresa()
    {
        /* $validatedData = $this->validate([
            'empresa_nit' => 'required',
            'empresa_tamaño' => 'required',
            'empresa_innovacion_desarrollo_producto' => 'required',
            'empresa_proyecto_desarrollo_avances_requiere_prototipos' => 'required',
        ]); */

        $this->currentStep=8;
        switch ($this->empresa_proyecto_desarrollo_avances_requiere_prototipos) {
            case 'no':
                $this->currentStep = 8; //Formulario Usuarios sin Proyecto
                break;

            default:
                $this->currentStep = 23; //Nivel del Proyecto de Empresa
                break;
        }
    }
    public function pasoFormularioEmprendedores()
    {
        dd($this->emprendedores_nivel_idea);
        switch ($this->emprendedores_nivel_idea) {
            case 'no_idea_innovacion':
                $this->currentStep = 8; //Formulario Usuarios sin Proyecto
                break;
            default:
                $this->currentStep = 11; //Elementos de la Idea/proyecto
                break;
        }

    }
    public function pasoVentasPorMesIdea()
    {
        $this->currentStep=13;


    }

    public function pasoEmpleadosGenera()
    {
        $this->currentStep=14;


    }

    public function pasoServicioTecnoparque()
    {
        $this->tecnoparque_postulado = $this->obtenerValorCampo($this->tecnoparque_postulado, $this->tecnoparque_postulado, $this->otro_tecnoparque_postulado);


        $this->currentStep=26; //final step

    }

    public function pasoServicioEmprendimiento()
    {
        $this->currentStep=26; //final step


    }

    public function pasoServicioCentrosFormacion()
    {
        $this->centro_formacion_servicios = $this->obtenerValorCampo($this->centro_formacion_servicios, $this->centro_formacion_servicios, $this->otro_centro_formacion_servicios);

        $this->currentStep=26; //final step

    }

    public function pasoServicioHubInnovacion()
    {
        $this->hub_innovacion_servicios = $this->obtenerValorCampo($this->hub_innovacion_servicios, $this->hub_innovacion_servicios, $this->otro_hub_innovacion_servicios);

        $this->currentStep=26; //final step

    }


    public function pasoSiAprendizEgresadoSENA()
    {

        $this->currentStep=19;

    }

    public function pasoSiInstructorSENA()
    {


        $this->currentStep=20;

    }

    public function pasoSiInstructorSENNOVA()
    {
        $this->currentStep=21;
    }

    public function pasoSiSennovaSemillero()
    {

        $this->currentStep=22;
    }

    public function pasoSiInvestigadorUniversidad()
    {

        dd(
            $this->investigador_universidad_nombre,
            $this->investigador_universidad_grupo_investigacion,
            $this->investigador_idea_capacidad_producto,

        );

        $this->currentStep=23;
    }

    public function pasoNivelProyecto()
    {

        $this->nivel_proyecto_empresa = $this->obtenerValorCampo($this->nivel_proyecto_empresa, $this->nivel_proyecto_empresa, $this->otro_nivel_proyecto_empresa);

        $this->currentStep = 11; //Formulario Idea proyecto

    }


    public function submitForm()
    {
        $this->successMessage = 'Product Created Successfully.';

        $this->clearForm();

        $this->currentStep = 1;
    }

    private function obtenerValorCampo($campo, $campoPrincipal, $campoOtro){

        if ($campoPrincipal === 'otro') {
            return $campo = $campoOtro;
        }
        else{
            return $campo = $campoPrincipal;

        }
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function back($step)
    {
        $this->currentStep = $step;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function clearForm()
    {
        $this->nombre_emprendedor= '';
        $this->numero_contacto_emprendedor= '';
        $this->correo_emprendedor= '';
        $this->identificacion_emprendedor= '';
        $this->tipo_identificacion_emprendedor= '';
        $this->ciudad_municipio_emprendedor= '';
        $this->status = 1;

    }
}
