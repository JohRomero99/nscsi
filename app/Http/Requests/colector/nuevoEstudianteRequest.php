<?php

namespace App\Http\Requests\colector;

use Illuminate\Foundation\Http\FormRequest;

class nuevoEstudianteRequest extends FormRequest
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
            'cedula' => ['required','numeric','digits:10','unique:persona,cedula','different:cedula_representante'],
            'primer_nombre' => ['required', 'regex:/^[\p{L}ñÑáéíóúÁÉÍÓÚ\s]+$/u'],
            'segundo_nombre' => ['required', 'regex:/^[\p{L}ñÑáéíóúÁÉÍÓÚ\s]+$/u'],
            'apellido_paterno' => ['required', 'regex:/^[\p{L}ñÑáéíóúÁÉÍÓÚ\s]+$/u'],
            'apellido_materno' => ['required', 'regex:/^[\p{L}ñÑáéíóúÁÉÍÓÚ\s]+$/u'],

            'cedula_representante' => ['required','numeric','digits:10','unique:persona,cedula','different:cedula'],
            'primer_nombre_representante' => ['required', 'regex:/^[\p{L}ñÑáéíóúÁÉÍÓÚ\s]+$/u'],
            'segundo_nombre_representante' => ['required', 'regex:/^[\p{L}ñÑáéíóúÁÉÍÓÚ\s]+$/u'],
            'apellido_paterno_representante' => ['required', 'regex:/^[\p{L}ñÑáéíóúÁÉÍÓÚ\s]+$/u'],
            'apellido_materno_representante' => ['required', 'regex:/^[\p{L}ñÑáéíóúÁÉÍÓÚ\s]+$/u'],
            'telefono' => ['required','regex:/^(0[2-7][0-9]{7}|09[0-9]{8})$/'],
            'email' => ['required','email'],
            
            'curso' => ['required','not_in:1'],
            'paralelo' => ['required','not_in:1'],
            'motivo_matriculacion' => ['required','not_in:1'],
            'otro_motivo_matriculacion' => ['nullable','required_if:motivo_matriculacion,5'],
            'valor_matriculacion' => ['required','not_in:1'],
            'otro_valor_matricula' => ['nullable','required_if:valor_matriculacion,12'],
            'valor_pension' => ['required','not_in:--seleccionar--'],
            'seguro' => ['required','not_in:1'],
            'ambiente_digital' => ['required','not_in:1'],
        ];
    }
}
