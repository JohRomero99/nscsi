<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class admisionRequest extends FormRequest
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

        // Condicional según el valor de 'setup'
        if ($this->input('setup') == 1) {
            return [
                'cedula' => ['required','numeric','document_ec:ci'],
                'apellido_paterno' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
                'apellido_materno' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
                'primer_nombre' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
                'segundo_nombre' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
                'email' => ['required', 'email:rfc,dns'],
                'telefono_celular' => ['required', 'numeric','digits:10'],
                'numero_inscripion' => ['required', 'numeric','min:0'],
            ];
        } elseif ($this->input('setup') == 2) {
            return [
                'cedula.*' => ['required','numeric','document_ec:ci'],
                'apellido_paterno.*' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
                'apellido_materno.*' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
                'primer_nombre.*' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
                'segundo_nombre.*' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
                'fecha_nacimiento.*' => ['required'],
                'anio_basica.*' => ['required', 'numeric','digits:10'],
            ];
        }

    }
}
