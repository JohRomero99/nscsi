<?php

namespace App\Http\Requests\admision;

use Illuminate\Foundation\Http\FormRequest;

class fichaMedicaEstudianteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cedula' => ['required', 'digits:10'],
            'primer_nombre' => ['required', 'regex:/^[\p{L}ñÑáéíóúÁÉÍÓÚ\s]+$/u'],
            'segundo_nombre' => ['required', 'regex:/^[\p{L}ñÑáéíóúÁÉÍÓÚ\s]+$/u'],
            'apellido_paterno' => ['required', 'regex:/^[\p{L}ñÑáéíóúÁÉÍÓÚ\s]+$/u'],
            'apellido_materno' => ['required', 'regex:/^[\p{L}ñÑáéíóúÁÉÍÓÚ\s]+$/u'],
            'peso' => ['required','numeric'],
            'estatura' => ['required','numeric'],

            'discapacidad_si_no' => ['required','in:Si,No'],
            'tipo_discapacidad' => ['exclude_if:discapacidad_si_no,No','required_if:discapacidad_si_no,Si','integer','gt:0'],
            'procentaje_discapacidad' => ['exclude_if:discapacidad_si_no,No','required_if:discapacidad_si_no,Si','integer','gt:0'],
            'detalle_discapacidad' => ['exclude_if:discapacidad_si_no,No','required_if:discapacidad_si_no,Si','max:500'],

            'medicacion_si_no' => ['required','not_in:--seleccionar--'],
            'medicamento_forma_permanente' => ['required','not_in:--seleccionar--'],
            'nombre_medicamento' => ['required','string','max:100','regex:/^[A-Za-zÁÉÍÓÚáéíóúÑñ0-9\s]+$/'],
            'dosis_medicamento' => ['required','not_in:1'],
            'frecuencia_medicamento' => ['required','not_in:1'],
            
            'intervencion_quirurgica_si_no' => ['required','not_in:--seleccionar--'],
            'tipos_intervenciones_quirurgicas' => ['required','not_in:1'],
            'detalle_especificacion_quirurgica' => ['string','max:500'],
            'fecha_ultima_desparacitacion' => ['date'],
            'vacuna_si_no' => ['required','not_in:--seleccionar--'],
            'bordered-checkbox' => [''],
            'dificultad_dormir_si_no' => ['required','not_in:--seleccionar--'],
            'problemas_dormir' => ['string','max:500'],
            'frecuencia_problemas_dormir' => ['required','not_in:--seleccionar--'],
            'tratamiento_si_no' => ['required','not_in:--seleccionar--'],
            'tratamiento_a_seguir' => ['string','max:500'],
            'historial_patologico_si_no' => ['required','not_in:--seleccionar--'],
            'tipos_enfermedades_hereditarias' => ['required','not_in:1'],
            'relacion_familiar' => ['required','not_in:1'],
            'estado_actual' => ['string','max:500'],
        ];
    }
}
