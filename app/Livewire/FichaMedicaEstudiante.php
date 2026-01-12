<?php

namespace App\Livewire;
use App\Models\tipos_discapacidad;
use App\Models\porcentaje;
use App\Models\estudiante;
use App\Models\condicionMedica;
use App\Models\tiposEnfermedadesHereditarias;
use App\Models\relacionFamiliar;
use App\Models\dosisMedicamento;
use App\Models\frecuenciaMedicamento;
use App\Models\vacuna;
use App\Models\tiposAlergia;
use App\Models\tiposIntervencionesQuirurgicas;
use App\Models\escalaCalificacion;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;

use Livewire\Component;

#[Layout('layouts.app')]

class FichaMedicaEstudiante extends Component
{
    public $cedula;
    public $primer_nombre;
    public $segundo_nombre;
    public $apellido_paterno;
    public $apellido_materno;
    public $peso;
    public $estatura;
    public $fecha_ultima_desparacitacion;

    public string $discapacidad_si_no = '';
    public array $discapacidades = [];

    public string $medicacion_si_no = '';
    public array $medicacion = [];

    public string $alergia_si_no = '';
    public array $alergia = [];
    public ?string $detalle_tipo_alergia = null;

    public string $condicion_medica_si_no = '';
    public array $condicion_medica = [];

    public string $intervencion_quirurgica_si_no = '';
    public array $intervencion_quirurgica = [];

    public string $vacuna_si_no = '';
    public array $vacuna = [];
    public ?string $detalle_vacuna = null;

    public string $dificultad_dormir_si_no = '';
    public array $dificultad_dormir = [];

    public string $historial_patologico_si_no = '';
    public array $historial_patologico = [];

    protected function rules()
    {
        return [
            'cedula' => 'digits:10',
            'primer_nombre' => 'regex:/^[\p{L}ñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'segundo_nombre' => 'regex:/^[\p{L}ñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'apellido_paterno' => 'regex:/^[\p{L}ñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'apellido_materno' => 'regex:/^[\p{L}ñÑáéíóúÁÉÍÓÚ\s]+$/u',
            'peso' => 'required|numeric',
            'estatura' => 'required|numeric',

            'discapacidad_si_no' => 'required|in:Si,No',
            'discapacidades.*.tipo_discapacidad' => 'exclude_if:discapacidad_si_no,No|required_if:discapacidad_si_no,Si|integer|gt:0',
            'discapacidades.*.procentaje_discapacidad' => 'exclude_if:discapacidad_si_no,No|required_if:discapacidad_si_no,Si|integer|gt:0',
            'discapacidades.*.detalle_discapacidad' => 'exclude_if:discapacidad_si_no,No|required_if:discapacidad_si_no,Si',

            'medicacion_si_no' => 'required|in:Si,No',
            'medicacion.*.medicamento_forma_permanente' => 'exclude_if:medicacion_si_no,No|required_if:medicacion_si_no,Si|in:Si,No',
            'medicacion.*.nombre_medicamento' => 'exclude_if:medicacion_si_no,No|required_if:medicacion_si_no,Si',
            'medicacion.*.dosis_medicamento' => 'exclude_if:medicacion_si_no,No|required_if:medicacion_si_no,Si|integer|gt:0',
            'medicacion.*.frecuencia_medicamento' => 'exclude_if:medicacion_si_no,No|required_if:medicacion_si_no,Si|integer|gt:0',

            'alergia_si_no' => 'required|in:Si,No',
            'alergia' => 'exclude_if:alergia_si_no,No|required_if:alergia_si_no,Si|array|min:1',
            'alergia.*' => 'exclude_if:alergia_si_no,No|required_if:alergia_si_no,Si|exists:tipos_alergia,id',
            'detalle_tipo_alergia' => 'required_if:alergia.*,99',

            'condicion_medica_si_no' => 'required|in:Si,No',
            'condicion_medica.*.enfermedad' => 'exclude_if:condicion_medica_si_no,No|required_if:condicion_medica_si_no,Si|integer|gt:0',
            'condicion_medica.*.otra_enfermedad' => 'exclude_if:condicion_medica_si_no,No|required_if:condicion_medica_si_no,Si|regex:/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/u',

            'intervencion_quirurgica_si_no' => 'required|in:Si,No',
            'intervencion_quirurgica.*.tipos_intervenciones_quirurgicas' => 'exclude_if:intervencion_quirurgica_si_no,No|required_if:intervencion_quirurgica_si_no,Si|integer|gt:0',
            'intervencion_quirurgica.*.detalle_especificacion_quirurgica' => 'exclude_if:intervencion_quirurgica_si_no,No|required_if:intervencion_quirurgica_si_no,Si',
            
            'fecha_ultima_desparacitacion' => 'required',

            'vacuna_si_no' => 'required|in:Si,No',
            'vacuna' => 'exclude_if:vacuna_si_no,No|required_if:vacuna_si_no,Si|array|min:1',
            'vacuna.*' => 'exclude_if:vacuna_si_no,No|required_if:vacuna_si_no,Si|exists:vacuna,id',
            'detalle_vacuna' => 'required_if:vacuna.*,16',

            'dificultad_dormir_si_no' => 'required|in:Si,No',
            'dificultad_dormir.*.problemas_dormir' => 'exclude_if:dificultad_dormir_si_no,No|required_if:dificultad_dormir_si_no,Si|max:500',
            'dificultad_dormir.*.frecuencia_problemas_dormir' => 'exclude_if:dificultad_dormir_si_no,No|required_if:dificultad_dormir_si_no,Si|integer|gt:0',
            'dificultad_dormir.*.tratamiento_si_no' => 'exclude_if:dificultad_dormir_si_no,No|required_if:dificultad_dormir_si_no,Si|in:Si,No',
            'dificultad_dormir.*.tratamiento_a_seguir' => 'exclude_if:dificultad_dormir_si_no,No|required_if:dificultad_dormir_si_no,Si|max:500',

            'historial_patologico_si_no' => 'required|in:Si,No',
            'historial_patologico.*.tipos_enfermedades_hereditarias' => 'exclude_if:historial_patologico_si_no,No|required_if:historial_patologico_si_no,Si|integer|gt:0',
            'historial_patologico.*.relacion_familiar' => 'exclude_if:historial_patologico_si_no,No|required_if:historial_patologico_si_no,Si|integer|gt:0',
            'historial_patologico.*.estado_actual' => 'exclude_if:historial_patologico_si_no,No|required_if:historial_patologico_si_no,Si',
        ];
    }

    public function mount($estudianteId)
    {
        // Siempre empieza con un bloque
        $this->discapacidades[] = [
            'tipo_discapacidad' => 0,
            'procentaje_discapacidad' => 0,
            'detalle_discapacidad' => '',
        ];

        // Siempre empieza con un bloque
        $this->medicacion[] = [
            'medicamento_forma_permanente' => 0,
            'nombre_medicamento' => '',
            'dosis_medicamento' => 0,
            'frecuencia_medicamento' => 0,
        ];

        // Siempre empieza con un bloque
        $this->condicion_medica[] = [
            'enfermedad' => 0,
            'otra_enfermedad' => '',
        ];

        // Siempre empieza con un bloque
        $this->intervencion_quirurgica[] = [
            'tipos_intervenciones_quirurgicas' => 0,
            'detalle_especificacion_quirurgica' => '',
        ];

        // Siempre empieza con un bloqueintervencion_quirurgica
        $this->dificultad_dormir[] = [
            'problemas_dormir' => '',
            'frecuencia_problemas_dormir' => 0,
            'tratamiento_si_no' => 0,
            'tratamiento_a_seguir' => '',
        ];

        // Siempre empieza con un bloqueintervencion_quirurgica
        $this->historial_patologico[] = [
            'tipos_enfermedades_hereditarias' => 0,
            'relacion_familiar' => 0,
            'estado_actual' => '',
        ];        

        $estudiante = estudiante::find($estudianteId);

        $this->cedula = $estudiante->persona->cedula;
        $this->primer_nombre = $estudiante->persona->primer_nombre;
        $this->segundo_nombre = $estudiante->persona->segundo_nombre;
        $this->apellido_paterno = $estudiante->persona->apellido_paterno;
        $this->apellido_materno = $estudiante->persona->apellido_materno;

    }

    public function save(){

        try {

            $this->validate();

        } catch (ValidationException $e) {

            $this->dispatch('alerta',
                tipo: 'error',
                titulo: 'Formulario incompleto',
                texto: 'Revisa los campos obligatorios'
            );

            throw $e; // 👈 clave
        }

        $this->dispatch('alerta', 
            tipo: 'success',
            titulo: '¡Éxito!',
            texto: 'Datos guardados con éxito'
        );

    }

    // Agregar un nuevo bloque "Historial Patologico".
    public function agregarHistorialPatologico()
    {
        $this->historial_patologico[] = [
            'tipos_enfermedades_hereditarias' => 0,
            'relacion_familiar' => 0,
            'estado_actual' => '',
        ];
    }

    // Quitar un bloque "Historial Patologico".
    public function quitarHistorialPatologico($index)
    {
        unset($this->historial_patologico[$index]);
        $this->historial_patologico = array_values($this->historial_patologico);
    }


    // Agregar un nuevo bloque "Dificultad para dormir".
    public function agregarDificultadDormir()
    {
        $this->dificultad_dormir[] = [
            'problemas_dormir' => '',
            'frecuencia_problemas_dormir' => 0,
            'tratamiento_si_no' => 0,
            'tratamiento_a_seguir' => ''
        ];
    }

    // Quitar un bloque "Dificultad para dormir".
    public function quitarDificultadDormir($index)
    {
        unset($this->dificultad_dormir[$index]);
        $this->dificultad_dormir = array_values($this->dificultad_dormir);
    }


    // Agregar un nuevo bloque "Intervención Quirurgica".
    public function agregarIntervencionQuirurgica()
    {
        $this->intervencion_quirurgica[] = [
            'tipos_intervenciones_quirurgicas' => 0,
            'detalle_especificacion_quirurgica' => '',
        ];
    }

    // Quitar un bloque "Intervención Quirurgica".
    public function quitarIntervencionQuirurgica($index)
    {
        unset($this->intervencion_quirurgica[$index]);
        $this->intervencion_quirurgica = array_values($this->intervencion_quirurgica);
    }


    // Agregar un nuevo bloque "Condicion Medica".
    public function agregarCondicionMedica()
    {
        $this->condicion_medica[] = [
            'enfermedades' => 0,
            'otra_enfermedad' => '',
        ];
    }

    // Quitar un bloque "Condicion Medica".
    public function quitarCondicionMedica($index)
    {
        unset($this->condicion_medica[$index]);
        $this->condicion_medica = array_values($this->condicion_medica);
    }


    // Agregar un nuevo bloque "Medicacion"
    public function agregarMedicacion()
    {
        $this->medicacion[] = [
            'medicamento_forma_permanente' => 0,
            'nombre_medicamento' => 0,
            'dosis_medicamento' => '',
            'frecuencia_medicamento' => 0,
        ];
    }

    // Quitar un bloque "Medicacion"
    public function quitarMedicacion($index)
    {
        unset($this->medicacion[$index]);
        $this->medicacion = array_values($this->medicacion);
    }


    // Agregar un nuevo bloque "discapacidad"
    public function agregarDiscapacidad()
    {
        $this->discapacidades[] = [
            'tipo_discapacidad' => 0,
            'procentaje_discapacidad' => 0,
            'detalle_discapacidad' => '',
        ];
    }

    // Quitar un bloque "Medicacion"
    public function quitarDiscapacidad($index)
    {
        unset($this->discapacidades[$index]);
        $this->discapacidades = array_values($this->discapacidades);
    }


    public function render()
    {
        // Obtengo todos los datos registrados en la tabla "tipos_discapacidad".
        $tiposDiscapacidad = tipos_discapacidad::all();

        // Obtengo todos los datos registrados en la tabla "porcentaje".
        $porcentaje = porcentaje::all();

        // Obtengo todos los datos registrados en la tabla "condicionMedica".
        $condicionMedica = condicionMedica::all();

        // Obtengo todos los datos registrados en la tabla "relaciionFamiliar".
        $relacionFamiliar = relacionFamiliar::all();

        // Obtengo todos los datos registrados en la tabla "tipos de enfermedades hereditarias".
        $tipoEnfermedadesHereditarias =  tiposEnfermedadesHereditarias::all();

        // Obtengo todos los datos registrados en la tabla "Dosis Medicamentos".
        $dosisMedicamento = dosisMedicamento::all();

        // Obtengo todos los datos registrados en la tabla "Frecuencia Medicamento".
        $frecuenciaMedicamento = frecuenciaMedicamento::all();

        // Obtengo todos los datos registrados en la tabla "tipos de vacuna".
        $tipoVacuna =  vacuna::all();

        // Obtengo todos los datos registrados en la tabla "tipos de Alergia".
        $tiposAlergia =  tiposAlergia::all();

        // Obtengo todos los datos registrados en la tabla "tipos intervenciones quirurgicas".
        $tiposIntervencionesQuirurgicas = tiposIntervencionesQuirurgicas::all();

        // Obtengo todos los datos registrados en la tabla "Escala califiación".
        $escalaCalificacion = escalaCalificacion::all();

        return view('livewire.ficha-medica-estudiante', compact('tiposDiscapacidad','porcentaje','condicionMedica','relacionFamiliar','tipoEnfermedadesHereditarias','dosisMedicamento','frecuenciaMedicamento','tipoVacuna','tiposAlergia','tiposIntervencionesQuirurgicas','escalaCalificacion'));
    }
}
