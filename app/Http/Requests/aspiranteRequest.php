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
            'primer_nombre_estudiante' => ['required', 'regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]*$/'],
            'segundo_nombre_estudiante' => ['required', 'regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]*$/'],
            'apellido_paterno_estudiante' => ['required', 'regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]*$/'],
            'apellido_materno_estudiante' => ['required', 'regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]*$/'],
            'fecha_nacimiento_estudiante' => ['required', 'date'],
            'ano_basica' => ['required','not_in:--seleccionar--'],
            'codigo_unico_electrico' => ['required','digits:10','numeric'],
            'genero_estudiante' => ['required','not_in:--seleccionar--'],
            'nuevo_nsc' => ['required','not_in:--seleccionar--'],
            'transporte_escolar' => ['required','not_in:--seleccionar--'],
            'ruta_escolar' => ['required_if:transporte_escolar,Requiero expreso'],

            // 
            // Datos de la Madre
            'cedula_madre' => ['required','numeric','document_ec:ci'],
            'primer_nombre_madre' => ['required', 'regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]*$/'],
            'segundo_nombre_madre' => ['required', 'regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]*$/'],
            'apellido_paterno_madre' => ['required', 'regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]*$/'],
            'apellido_materno_madre' => ['required', 'regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]*$/'],
            'direccion_madre' => ['required'],
            'correo_madre' => ['required', 'email:rfc,dns'],
            'telefono_madre' => ['required', 'regex:/^09\d{8}$/'],
            'relacion_representante_uno' => ['required', 'not_in:--seleccionar--'],
            
            // Datos del Padre
            'cedula_padre' => ['required','numeric','document_ec:ci'],
            'primer_nombre_padre' => ['required', 'regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]*$/'],
            'segundo_nombre_padre' => ['required', 'regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]*$/'],
            'apellido_paterno_padre' => ['required', 'regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]*$/'],
            'apellido_materno_padre' => ['required', 'regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]*$/'],
            'direccion_padre' => ['required'],
            'correo_padre' => ['required', 'email:rfc,dns'],
            'telefono_padre' => ['required', 'regex:/^09\d{8}$/'],
            'relacion_representante_dos' => ['required', 'not_in:--seleccionar--'],

            // Forma de Pago
            'forma_pago_pensiones' => ['required','not_in:--seleccionar--'],
            'facturacion' => ['required', 'in:Si,No,--seleccionar--','not_in:--seleccionar--'],
            'cedula_ruc' => ['required_if:facturacion,Si'],
            'razon_social' => ['required_if:facturacion,Si'],
            'direccion_facturacion' => ['required_if:facturacion,Si'],
            'correo_facturacion' => ['required_if:facturacion,Si'],
            'telefono_facturacion' => ['required_if:facturacion,Si'],
            'primera_referencia_familiar_nombres' => ['required','regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ]+(?:\s[A-Za-záéíóúÁÉÍÓÚñÑ]+)*$/u'],
            'primera_referencia_familiar_cedula' => ['required','document_ec:ci'],
            'primera_referencia_familiar_telefono' => ['required','regex:/^09\d{8}$/'],
            'primera_referencia_familiar_modalidad' => ['required','regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ]+(?:\s[A-Za-záéíóúÁÉÍÓÚñÑ]+)*$/u'],
            'segunda_referencia_familiar_nombres' => ['required','regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ]+(?:\s[A-Za-záéíóúÁÉÍÓÚñÑ]+)*$/u'],
            'segunda_referencia_familiar_cedula' => ['required','document_ec:ci'],
            'segunda_referencia_familiar_telefono' => ['required','regex:/^09\d{8}$/'],
            'segunda_referencia_familiar_modalidad' => ['required','regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ]+(?:\s[A-Za-záéíóúÁÉÍÓÚñÑ]+)*$/u'],
            'tercera_referencia_familiar_nombres' => ['required','regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ]+(?:\s[A-Za-záéíóúÁÉÍÓÚñÑ]+)*$/u'],
            'tercera_referencia_familiar_cedula' => ['required','document_ec:ci'],
            'tercera_referencia_familiar_telefono' => ['required','regex:/^09\d{8}$/'],
            'tercera_referencia_familiar_modalidad' => ['required','regex:/^[A-Za-záéíóúÁÉÍÓÚñÑ]+(?:\s[A-Za-záéíóúÁÉÍÓÚñÑ]+)*$/u'],
        ];
    }

    public function attributes(): array
{
    return [
        'cedula_estudiante' => 'cédula',
        'primer_nombre_estudiante' => 'primer nombre',
        'segundo_nombre_estudiante' => 'segundo nombre',
        'apellido_paterno_estudiante' => 'apellido paterno',
        'apellido_materno_estudiante' => 'apellido materno',
        'relacion_representante_uno' => '--seleccionar--',
        'relacion_representante_dos' => '--seleccionar--',
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
        'facturacion' => '--selecionar--',
        'cedula_ruc' => 'cédula',
        'razon_social' => 'razon social',
        'telefono_facturacion' => 'teléfono',
        'direccion_facturacion' => 'dirección',
        'correo_facturacion' => 'correo',
        'primera_referencia_familiar_nombres' => 'nombre',
        'primera_referencia_familiar_cedula' => 'cédula',
        'primera_referencia_familiar_telefono' => 'teléfono',
        'primera_referencia_familiar_modalidad' => 'modalidad de traslado',
        'segunda_referencia_familiar_nombres' => 'nombre',
        'segunda_referencia_familiar_cedula' => 'cédula',
        'segunda_referencia_familiar_telefono' => 'teléfono',
        'segunda_referencia_familiar_modalidad' => 'modalidad de traslado',
        'tercera_referencia_familiar_nombres' => 'nombre',
        'tercera_referencia_familiar_cedula' => 'cédula',
        'tercera_referencia_familiar_telefono' => 'teléfono',
        'tercera_referencia_familiar_modalidad' => 'modalidad de traslado',
        'informacion_verdadera' => 'checkbox',
    ];
}
}
