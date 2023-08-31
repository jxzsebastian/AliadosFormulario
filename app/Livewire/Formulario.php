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


        $validatedData = $this->validate([
            'ocupacion' => 'required',
            'niveles_educacion_emprendedor' => 'required',
        ]);
        $ocupacion = $this->obtenerValorCampo($this->ocupacion, $this->ocupacion, $this->otra_ocupacion);

        dd($ocupacion);
        switch ($this->ocupacion) {
            case 'empleado':
                dd("empleado");
                break;
            case 'trabajador_independiente':
                dd("tabajador_independiente");
                break;
            case 'egresado_sena':
                dd("egresado_sena o aprendiz");
                break;
            case 'aprendiz_sena':
                dd("aprendiz sena");
                break;
            case 'estudiante_universitario':
                dd("estudiante_universitario");
                break;
            case 'instructor_sena':
                dd("instructor_sena");
                break;
            case 'investigador_universidad':
                dd("investigador_universidad");
                break;
            case 'estudiante_universitario':
                dd("estudiante_universitario");
                break;
        }

        $this->currentStep = 3;
    }
    public function thirdStepSubmit()
    {

        $this->currentStep = 4;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForm()
    {
        FormularioVista::create([
            'nombre_emprendedor' => $this->nombre_emprendedor,
            'numero_contacto_emprendedor' => $this->numero_contacto_emprendedor,
            'correo_emprendedor' => $this->correo_emprendedor,
            'identificacion_emprendedor' => $this->identificacion_emprendedor,

        ]);

        $this->successMessage = 'Product Created Successfully.';

        $this->clearForm();

        $this->currentStep = 1;
    }

    private function obtenerValorCampo($ocupacion, $campoPrincipal, $campoOtro){

        if ($campoPrincipal === 'otro') {
            return $ocupacion = $campoOtro;
        }
        else{
            return $ocupacion = $campoPrincipal;

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
