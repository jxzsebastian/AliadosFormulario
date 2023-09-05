<?php

namespace App\Livewire;

use App\Models\Emprendedor;
use App\Models\Emprendedor_AprendizEgresado;
use App\Models\Emprendedor_Empleado;
use App\Models\Emprendedor_InstructorSena;
use App\Models\Emprendedor_InvestigadorUniversidad;
use App\Models\EmprendedorIdea;
use App\Models\Empresa;
use App\Models\Formulario as FormularioVista;
use App\Models\Idea;
use App\Models\Programa_Sena_CentroFormacion;
use App\Models\Programa_Sena_Emprendimiento;
use App\Models\Programa_Sena_HubInnovacion;
use App\Models\Programa_Sena_Tecnoparque;
use Illuminate\Http\Request;
use Livewire\Wizard;
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
    public  $ocupacion_emprendedor,
            $otra_ocupacion_emprendedor,
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

    //Variables Nivel proyecto empresa
    public  $nivel_proyecto_empresa,
            $otro_nivel_proyecto_empresa;


    //Variables para Necesidades de Usuarios sin Proyecto concreto
    public $necesidad_asesoria_sena = [];

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

    //Variables para especificar programa de ingreso / Unidad sena ingreso proyecto-los hub
    public $programa_sena_ingreso;

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


    //
    public $successMessage = '';
    public $formProgress = [];

    public function render()
    {
        return view('livewire.formulario');
    }

    public function pasoPrimeroInformacionUsuario()
    {
       $validatedData = $this->validate([
            'nombre_emprendedor' => 'required',
            'numero_contacto_emprendedor' => 'required',
            'correo_emprendedor' => 'email',
            'identificacion_emprendedor' => 'required',
            'tipo_identificacion_emprendedor' => 'required',
            'ciudad_municipio_emprendedor' => 'required',
        ]);

        if (!in_array($this->currentStep, $this->formProgress)) {
            $this->formProgress[] = $this->currentStep;
        }
        $this->currentStep = 2;


    }

    public function pasoSegundoOcupacionEscolaridad()
    {
        $validatedData = $this->validate([
            'ocupacion_emprendedor' => 'required',
            'niveles_educacion_emprendedor' => 'required',
        ]);

        $this->ocupacion_emprendedor = $this->obtenerValorCampo($this->ocupacion_emprendedor, $this->ocupacion_emprendedor, $this->otra_ocupacion_emprendedor);

        $this->formProgress[] = $this->currentStep;

        switch ($this->ocupacion_emprendedor) {
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

        session(['formProgress' => $this->formProgress]);


    }

    public function pasoSiOcupacionEmpleado()
    {
        $validatedData = $this->validate([
            'empleado_idea_negocio' => 'required',
        ]);

        $this->empleado_idea_negocio = $this->obtenerValorCampo($this->empleado_idea_negocio, $this->empleado_idea_negocio, $this->otro_idea_negocio);
        $this->formProgress[] = $this->currentStep;


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

        session(['formProgress' => $this->formProgress]);

    }

    public function pasoTipoUsuario()
    {
        /* $validatedData = $this->validate([
            'tipo_usuario' => 'required',
        ]); */
        $this->tipo_usuario = $this->obtenerValorCampo($this->tipo_usuario, $this->tipo_usuario, $this->otro_tipo_usuario);
        $this->formProgress[] = $this->currentStep;

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

        session(['formProgress' => $this->formProgress]);

    }

    public function pasoSiTipoUsuarioEmpresa()
    {
        #tipo_empresa_persona_natural,tipo_empresa_persona_juridica
        $this->formProgress[] = $this->currentStep;

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

        session(['formProgress' => $this->formProgress]);

    }

    public function pasoSiTipoEmpresaJuridica()
    {
        $validatedData = $this->validate([
            'tipo_persona_juridica' => 'required',
        ]);

        $this->formProgress[] = $this->currentStep;

        $this->currentStep=7;

        session(['formProgress' => $this->formProgress]);

    }

    public function pasoUsuariosSinProyectoConcreto()
    {
        /*          $validatedData = $this->validate([
                    'necesidad_asesoria_sena' => 'required',
                ]);

            dd($this->necesidad_asesoria_sena);
        */

        $this->formProgress[] = $this->currentStep;

        $this->currentStep=9; //Programa o servicio por el que ingresa

        session(['formProgress' => $this->formProgress]);

    }


    public function pasoProgramaIngreso()
    {
        $validatedData = $this->validate([
            'programa_sena_ingreso' => 'required',
        ]);
        $this->formProgress[] = $this->currentStep;

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
                $this->currentStep=24; //final step
                break;
        }
        session(['formProgress' => $this->formProgress]);
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
        $this->formProgress[] = $this->currentStep;

        switch ($this->idea_genera_ventas) {
            case 'si':
                $this->currentStep = 12; //Ventas Promedio
                break;
            case 'no':
                $this->currentStep = 13; //Cuantos Empleados Genera
                break;
        }
        session(['formProgress' => $this->formProgress]);


    }
    public function pasoDatosEmpresa()
    {
        /* $validatedData = $this->validate([
            'empresa_nit' => 'required',
            'empresa_tamaño' => 'required',
            'empresa_innovacion_desarrollo_producto' => 'required',
            'empresa_proyecto_desarrollo_avances_requiere_prototipos' => 'required',
        ]); */
        $this->formProgress[] = $this->currentStep;

        switch ($this->empresa_proyecto_desarrollo_avances_requiere_prototipos) {
            case 'no':
                $this->currentStep = 8; //Formulario Usuarios sin Proyecto
                break;

            default:
                $this->currentStep = 23; //Nivel del Proyecto de Empresa
                break;
        }
        session(['formProgress' => $this->formProgress]);

    }

    public function pasoNivelProyecto()
    {

        $this->nivel_proyecto_empresa = $this->obtenerValorCampo($this->nivel_proyecto_empresa, $this->nivel_proyecto_empresa, $this->otro_nivel_proyecto_empresa);

        $this->formProgress[] = $this->currentStep;

        $this->currentStep = 11; //Formulario Idea proyecto
        session(['formProgress' => $this->formProgress]);

    }


    public function pasoFormularioEmprendedores()
    {
        $this->formProgress[] = $this->currentStep;

        switch ($this->emprendedores_nivel_idea) {
            case 'no_idea_innovacion':
                $this->currentStep = 8; //Formulario Usuarios sin Proyecto
                break;
            default:
                $this->currentStep = 11; //Elementos de la Idea/proyecto
                break;
        }

        session(['formProgress' => $this->formProgress]);

    }
    public function pasoVentasPorMesIdea()
    {
        $this->formProgress[] = $this->currentStep;

        $this->currentStep=13;

        session(['formProgress' => $this->formProgress]);


    }

    public function pasoEmpleadosGenera()
    {

        $this->formProgress[] = $this->currentStep;

        $this->currentStep=9;

        session(['formProgress' => $this->formProgress]);


    }

    public function pasoServicioTecnoparque()
    {

        $this->tecnoparque_postulado = $this->obtenerValorCampo($this->tecnoparque_postulado, $this->tecnoparque_postulado, $this->otro_tecnoparque_postulado);
        $this->formProgress[] = $this->currentStep;

        $this->currentStep=24; //final step

        session(['formProgress' => $this->formProgress]);



    }

    public function pasoServicioEmprendimiento()
    {

        $this->formProgress[] = $this->currentStep;

        $this->currentStep=24; //final step

        session(['formProgress' => $this->formProgress]);



    }

    public function pasoServicioCentrosFormacion()
    {
        $this->centro_formacion_servicios = $this->obtenerValorCampo($this->centro_formacion_servicios, $this->centro_formacion_servicios, $this->otro_centro_formacion_servicios);


        $this->formProgress[] = $this->currentStep;

        $this->currentStep=24; //final step

        session(['formProgress' => $this->formProgress]);

    }

    public function pasoServicioHubInnovacion()
    {

        $this->hub_innovacion_servicios = $this->obtenerValorCampo($this->hub_innovacion_servicios, $this->hub_innovacion_servicios, $this->otro_hub_innovacion_servicios);
        $this->formProgress[] = $this->currentStep;

        $this->currentStep=24; //final step
        session(['formProgress' => $this->formProgress]);

    }


    public function pasoSiAprendizEgresadoSENA()
    {

        $this->formProgress[] = $this->currentStep;

        $this->currentStep = 4; //Tipo de Usuario

        session(['formProgress' => $this->formProgress]);

    }

    public function pasoSiInstructorSENA()
    {
        $this->formProgress[] = $this->currentStep;

        switch ($this->parte_sennova) {
            case 'no':
                $this->currentStep = 10; //Formulario Emprendedores
                break;
            default:
                $this->currentStep=20;
                break;
        }
        session(['formProgress' => $this->formProgress]);



    }

    public function pasoSiInstructorSENNOVA()
    {
        $this->formProgress[] = $this->currentStep;


        switch ($this->sennova_semillero_investigacion) {
            case 'si':
                $this->currentStep = 21; //Formulario Emprendedores
                break;
            default:
                $this->currentStep=9; //Programa o servicio por el que ingresa
                break;
        }

        session(['formProgress' => $this->formProgress]);

    }

    public function pasoSiSennovaSemillero()
    {
        $this->formProgress[] = $this->currentStep;
        $this->currentStep=9; //Programa o servicio por el que ingresa


        session(['formProgress' => $this->formProgress]);

    }

    public function pasoSiInvestigadorUniversidad()
    {

        $this->formProgress[] = $this->currentStep;

        switch ($this->investigador_idea_capacidad_producto) {
            case 'si':
                $this->currentStep = 4; //Tipo de Usuario
                break;
            default:
                $this->currentStep = 8; //Formulario Usuarios sin Proyecto
                break;
        }

        session(['formProgress' => $this->formProgress]);

    }




    public function submit(Request $request)
    {
        $informacionUsuario = new  Emprendedor();
        $infoEmpleado = new  Emprendedor_Empleado();
        $infoEmpresa = new Empresa();
        $infoIdea = new Idea();
        $infoEmprendedorIdea = new EmprendedorIdea();
        $infoInstructor = new Emprendedor_InstructorSena();
        $infoAprendiz = new Emprendedor_AprendizEgresado();
        $infoInvestigador = new Emprendedor_InvestigadorUniversidad();
        $infoProgramaTecnoparque = new Programa_Sena_Tecnoparque();
        $infoProgramaEmprendimiento = new Programa_Sena_Emprendimiento();
        $infoProgramaHubInnovacion = new Programa_Sena_HubInnovacion();
        $infoProgramaCentroFormacion = new Programa_Sena_CentroFormacion();


        //Info persona
        $informacionUsuario ->nombre_emprendedor = $this->nombre_emprendedor;
        $informacionUsuario ->numero_contacto_emprendedor = $this->numero_contacto_emprendedor;
        $informacionUsuario ->correo_emprendedor = $this->correo_emprendedor;
        $informacionUsuario ->identificacion_emprendedor= $this->identificacion_emprendedor;
        $informacionUsuario ->tipo_identificacion_emprendedor= $this->tipo_identificacion_emprendedor;
        $informacionUsuario ->ciudad_municipio_emprendedor= $this->ciudad_municipio_emprendedor;
        $informacionUsuario ->tipo_usuario= $this->tipo_usuario;
        $informacionUsuario ->programa_sena_ingreso= $this->programa_sena_ingreso;
        $informacionUsuario ->ocupacion_emprendedor= $this->ocupacion_emprendedor;
        $informacionUsuario ->niveles_educacion_emprendedor= implode(', ', $this->niveles_educacion_emprendedor);

        if (empty($this->necesidad_asesoria_sena)) {
            $informacionUsuario->necesidad_asesoria_sena = "Ninguna";
        }
        else{
            $informacionUsuario->necesidad_asesoria_sena = implode(', ', $this->necesidad_asesoria_sena) ?? "Ninguna";

        }

        //Si es Empleado
        $infoEmpleado->empleado_idea_negocio= $this->empleado_idea_negocio;

        //Info Empresa
        $infoEmpresa ->tipo_empresa= $this->tipo_empresa;
        $infoEmpresa ->tipo_persona_juridica = $this->tipo_persona_juridica;
        $infoEmpresa ->empresa_nit= $this->empresa_nit;
        $infoEmpresa ->empresa_tamaño= $this->empresa_tamaño;
        $infoEmpresa ->empresa_innovacion_desarrollo_producto= $this->empresa_innovacion_desarrollo_producto;
        $infoEmpresa ->empresa_proyecto_desarrollo_avances_requiere_prototipos= $this->empresa_proyecto_desarrollo_avances_requiere_prototipos;
        $infoEmpresa ->nivel_proyecto_empresa= $this->nivel_proyecto_empresa;

        //Info idea
        $infoIdea ->nombre_idea= $this->nombre_idea;
        $infoIdea ->descripcion_idea= $this->descripcion_idea;
        $infoIdea ->producto_servicio= $this->producto_servicio;
        $infoIdea ->validacion_producto= implode(', ', $this->validacion_producto);
        $infoIdea ->modelo_negocio= $this->modelo_negocio;
        $infoIdea ->idea_genera_ventas= $this->idea_genera_ventas;
        $infoIdea ->ventas_promedio_mes= $this->ventas_promedio_mes;
        $infoIdea ->idea_cantidad_empleados_genera= $this->idea_cantidad_empleados_genera;

        //Nivel de idea y Info de idea
        $infoEmprendedorIdea ->emprendedores_nivel_idea= $this->emprendedores_nivel_idea;

        //Info aprendiz
        $infoAprendiz ->centro_formacion_actual_aprendiz= $this->centro_formacion_actual_aprendiz;
        $infoAprendiz ->programa_formacion_adscrito= $this->programa_formacion_adscrito;
        $infoAprendiz ->interes_emprendedor_es= $this->interes_emprendedor_es;

        //Info instructor
        $infoInstructor ->centro_formacion_actual_instructor= $this->centro_formacion_actual_instructor;
        $infoInstructor ->parte_sennova= $this->parte_sennova;
        $infoInstructor ->participacion_sennova= implode(', ', $this->participacion_sennova);
        $infoInstructor ->sennova_semillero_investigacion= $this->sennova_semillero_investigacion;
        $infoInstructor ->nombre_semillero= $this->nombre_semillero;
        $infoInstructor ->semillero_cantidad_integrantes= $this->semillero_cantidad_integrantes;
        $infoInstructor ->semillero_tema_trabajo= $this->semillero_tema_trabajo;

        //Info investigador
        $infoInvestigador ->investigador_universidad_nombre= $this->investigador_universidad_nombre;
        $infoInvestigador ->investigador_universidad_grupo_investigacion= $this->investigador_universidad_grupo_investigacion;
        $infoInvestigador ->investigador_idea_capacidad_producto= $this->investigador_idea_capacidad_producto;

        //Hub emprendimiento
        $infoProgramaEmprendimiento ->emprendimiento_servicios= $this->emprendimiento_servicios;

        //Programa hub innovacion
        $infoProgramaHubInnovacion ->hub_innovacion_servicios= $this->hub_innovacion_servicios;
        $infoProgramaHubInnovacion ->linea_tecnologica_hub= implode(', ', $this->linea_tecnologica_hub);
        $infoProgramaHubInnovacion ->conocimientos_lineas_seleccionada= $this->conocimientos_lineas_seleccionada;
        $infoProgramaHubInnovacion ->necesidad_puntual_proyecto= $this->necesidad_puntual_proyecto;
        $infoProgramaHubInnovacion ->cuenta_equipo_trabajo= $this->cuenta_equipo_trabajo;

        //Tecnoparque
        $infoProgramaTecnoparque ->tecnoparque_postulado= $this->tecnoparque_postulado;
        $infoProgramaTecnoparque ->servicios_accedidos_tecnoparque= $this->servicios_accedidos_tecnoparque;
        $infoProgramaTecnoparque ->linea_tecnica_adscribe_tecnoparque= implode(', ', $this->linea_tecnica_adscribe_tecnoparque);
        $infoProgramaTecnoparque ->condiciones_cumplidas_idea=implode(', ', $this->condiciones_cumplidas_idea);

        //Centro Formacion Servicios
        $infoProgramaCentroFormacion ->centro_formacion_servicios= $this->centro_formacion_servicios;


       dd($informacionUsuario, $infoEmpleado, $infoEmpresa, $infoIdea, $infoEmprendedorIdea, $infoInstructor, $infoAprendiz, $infoInvestigador, $infoProgramaTecnoparque,$infoProgramaEmprendimiento, $infoProgramaHubInnovacion, $infoProgramaCentroFormacion );

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
    public function back()
    {

        if (!empty($this->formProgress)) {
            // Si no estás en el primer paso
            if ($this->currentStep > 1) {

                // Elimina el último paso del registro
                $this->currentStep = end($this->formProgress);
                array_pop($this->formProgress);

            }

        }
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
