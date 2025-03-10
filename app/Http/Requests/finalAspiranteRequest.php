<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class finalAspiranteRequest extends FormRequest
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
            'autorizacion_nombres_representante' => ['required','not_in:--seleccionar--'],
            'autorizacion_cedula_representante' => ['required','not_in:--seleccionar--'],
            'autorizacion_nombres_estudiante' => ['required','not_in:--seleccionar--'],
            'autorizacion_cedula_estudiante' => ['required','not_in:--seleccionar--'],
            'autorizacion_curso_estudiante' => ['required','not_in:--seleccionar--'],
            'autorizacion_direccion_representante' => ['required','not_in:--seleccionar--'],
            'autorizacion_telefono_representante' => ['required','not_in:--seleccionar--'],
            'autorizacion_email_representante' => ['required','not_in:--seleccionar--'],
        ];
    }
}
