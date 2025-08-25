<?php

namespace App\Http\Requests\admision;

use Illuminate\Foundation\Http\FormRequest;

class datosEstudianteRequest extends FormRequest
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
            'nacionalidad_id' => ['required', 'not_in:1'],
            'lugar_nacimiento_id' => ['required', 'regex:/^[\p{L}\p{M}0-9\s\.\,\-\(\)\/\'"]+$/u', 'max:100'],
            'sexo_id' => ['required', 'not_in:1'],
            'fecha_nacimiento' => ['required'],
            'repite_ano' => ['required', 'not_in:--seleccionar--'],
            'anio_academico_id' => ['required', 'not_in:1'],
            'direccion_domiciliaria' => ['required', 'regex:/^[\p{L}\p{M}0-9\s\.\,\-\#\/\(\)\'\"\&]+$/u', 'max:150'],
            'tipo_vivienda' => ['required', 'not_in:1'],
            'anos_domicilio' => ['required', 'not_in:--seleccionar--'],
            'convivienteEstudiante' => ['required', 'not_in:1'],

            'boletin_ultimo_ano' => ['required', 'file', 'mimes:pdf', 'max:5120'],
            'scan_cedula_front' => ['required', 'file', 'mimes:pdf', 'max:5120'],
            'scan_cedula_back' => ['required', 'file', 'mimes:pdf', 'max:5120'],

            'referencia_familiar.0' => ['required','regex:/^[\p{L}ñÑáéíóúÁÉÍÓÚ\s]+$/u'],
            'referencia_familiar.1' => ['required', 'not_in:1'],
            'referencia_familiar.2' => ['required', 'numeric','digits:10'],
            'referencia_familiar.3' => ['required','regex:/^[\p{L}ñÑáéíóúÁÉÍÓÚ\s]+$/u'],
            'referencia_familiar.4' => ['required', 'not_in:1'],
            'referencia_familiar.5' => ['required', 'numeric','digits:10'],
            'referencia_familiar.6' => ['required','regex:/^[\p{L}ñÑáéíóúÁÉÍÓÚ\s]+$/u'],
            'referencia_familiar.7' => ['required', 'not_in:1'],
            'referencia_familiar.8' => ['required', 'numeric','digits:10'],
        ];
    }
}
