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
            'genero_estudiante' => ['required','not_in:--seleccionar--'],
            'transporte_escolar' => ['required','not_in:--seleccionar--'],
            'ruta_escolar' => ['required','not_in:--seleccionar--'],

            // 
            // Datos de la Madre
            'cedula_madre' => ['required','numeric','document_ec:ci'],
            'primer_nombre_madre' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
            'segundo_nombre_madre' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
            'apellido_paterno_madre' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
            'apellido_materno_madre' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
            'direccion_madre' => ['required'],
            'correo_madre' => ['required', 'email:rfc,dns'],
            'telefono_madre' => ['required', 'regex:/^09\d{8}$/'],
            
            // Datos del Padre
            'cedula_padre' => ['required','numeric','document_ec:ci'],
            'primer_nombre_padre' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
            'segundo_nombre_padre' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
            'apellido_paterno_padre' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
            'apellido_materno_padre' => ['required', 'regex:/^[a-zA-Z\s]*$/'],
            'direccion_padre' => ['required'],
            'correo_padre' => ['required', 'email:rfc,dns'],
            'telefono_padre' => ['required', 'regex:/^09\d{8}$/'],

            // Forma de Pago
            'forma_pago_pensiones' => ['required','not_in:--seleccionar--'],
            'cedula_ruc' => ['required','numeric','document_ec:ci'],
            'razon_social' => ['required'],
            'direccion_facturacion' => ['required'],
            'telefono_facturacion' => ['required'],
            'referencia_familiar.0' => ['required','document_ec:ci'],
            'referencia_familiar.1' => ['required','regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ]+(?:\s[A-Za-záéíóúÁÉÍÓÚñÑ]+)*$/u'],
            'referencia_familiar.2' => ['required','regex:/^09\d{8}$/'],
            'referencia_familiar.3' => ['required','regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ]+(?:\s[A-Za-záéíóúÁÉÍÓÚñÑ]+)*$/u'],
            'referencia_familiar.4' => ['required','document_ec:ci'],
            'referencia_familiar.5' => ['required','regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ]+(?:\s[A-Za-záéíóúÁÉÍÓÚñÑ]+)*$/u'],
            'referencia_familiar.6' => ['required','regex:/^09\d{8}$/'],
            'referencia_familiar.7' => ['required','regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ]+(?:\s[A-Za-záéíóúÁÉÍÓÚñÑ]+)*$/u'],
            'referencia_familiar.8' => ['required','document_ec:ci'],
            'referencia_familiar.9' => ['required','regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ]+(?:\s[A-Za-záéíóúÁÉÍÓÚñÑ]+)*$/u'],
            'referencia_familiar.10' => ['required','regex:/^09\d{8}$/'],
            'referencia_familiar.11' => ['required','regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ]+(?:\s[A-Za-záéíóúÁÉÍÓÚñÑ]+)*$/u'],
        ];
    }

    public function attributes(): array
{
    return [
        'genero_estudiante' => 'género',
        // 
        'cedula_madre' => 'cédula',
        'primer_nombre_madre' => 'primer nombre',
        'segundo_nombre_madre' => 'segundo nombre',
        'apellido_paterno_madre' => 'apellido paterno',
        'apellido_materno_madre' => 'apellido materno',
        'direccion_madre' => 'dirección',
        'correo_madre' => 'correo',
        'telefono_madre' => 'teléfono',
        // 
        'cedula_padre' => 'cédula',
        'primer_nombre_padre' => 'primer nombre',
        'segundo_nombre_padre' => 'segundo nombre',
        'apellido_paterno_padre' => 'apellido paterno',
        'apellido_materno_padre' => 'apellido materno',
        'direccion_padre' => 'dirección',
        'correo_padre' => 'correo',
        'telefono_padre' => 'teléfono',
        // 
        'forma_pago_pensiones' => '--seleccionar--',
        'cedula_ruc' => 'cédula',
        'razon_social' => 'razon social',
        'telefono_facturacion' => 'teléfono',
        'direccion_facturacion' => 'dirección',
        'referencia_familiar.0' => 'cédula',
        'referencia_familiar.1' => 'nombre',
        'referencia_familiar.2' => 'teléfono',
        'referencia_familiar.3' => 'modalidad de traslado',
        'referencia_familiar.4' => 'cédula',
        'referencia_familiar.5' => 'nombre',
        'referencia_familiar.6' => 'teléfono',
        'referencia_familiar.7' => 'modalidad de traslado',
        'referencia_familiar.8' => 'cédula',
        'referencia_familiar.9' => 'nombre',
        'referencia_familiar.10' => 'teléfono',
        'referencia_familiar.11' => 'modalidad de traslado',
    ];
}
}
