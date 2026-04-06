<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class editarUsuarios extends FormRequest
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
            //'cedula' => ['required', 'digits:10', 'unique:persona,cedula'],
            'primer_nombre' => ['required', 'regex:/^[\p{L}ñÑáéíóúÁÉÍÓÚ\s]+$/u'],
            'segundo_nombre' => ['required', 'regex:/^[\p{L}ñÑáéíóúÁÉÍÓÚ\s]+$/u'],
            'apellido_paterno' => ['required', 'regex:/^[\p{L}ñÑáéíóúÁÉÍÓÚ\s]+$/u'],
            'apellido_materno' => ['required', 'regex:/^[\p{L}ñÑáéíóúÁÉÍÓÚ\s]+$/u'],
            'email' => ['required', 'email'],
            'contrasena' => ['required_if:cambiar_contrasena,on','min:8'],
        ];
    }
}
