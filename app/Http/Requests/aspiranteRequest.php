<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class aspiranteRequest extends FormRequest
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
            'cedula_estudiante' => ['required','numeric','document_ec:ci'],
            'primer_nombre_estudiante' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
            'segundo_nombre_estudiante' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
            'apellido_paterno_estudiante' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
            'apellido_materno_estudiante' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
            'fecha_nacimiento_estudiante' => ['required', 'date'],
            'codigo_unico_electrico' => ['required','digits:10','numeric'],
            // 
            // Datos de la Madre
            'cedula_madre' => ['required','numeric','document_ec:ci'],
            'primer_nombre_madre' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
            'segundo_nombre_madre' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
            'apellido_paterno_madre' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
            'apellido_materno_madre' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
            'direccion_madre' => ['required', 'string','min:5', 'msx:255'],
            'correo_madre' => ['required', 'email:rfc,dns'],
            'telefono_madre' => ['required', 'regex:/^09\d{8}$/'],
            
            // Datos del Padre
            'cedula_padre' => ['required','numeric','document_ec:ci'],
            'primer_nombre_padre' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
            'segundo_nombre_padre' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
            'apellido_paterno_padre' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
            'apellido_materno_padre' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
            'direccion_padre' => ['required', 'string','min:5', 'msx:255'],
            'correo_padre' => ['required', 'email:rfc,dns'],
            'telefono_padre' => ['required', 'regex:/^09\d{8}$/'],

            // Forma de Pago
            'forma_pago_pensiones' => ['required','not_in:--seleccionar--'],
            'cedula_ruc' => ['required','numeric','document_ec:ci'],
            'razon_social' => ['required','string','min:5', 'msx:255'],
            'direccion_facturacion' => ['required','string','min:5', 'msx:255'],
            'teléfono_facturacion' => ['required', 'regex:/^09\d{8}$/'],
        ];
    }
}
