<?php

namespace App\Http\Requests\admision;

use Illuminate\Foundation\Http\FormRequest;

class datosPadresRequest extends FormRequest
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
            'cedula_padre' => ['required', 'digits:10','unique:persona,cedula'],
            'primer_nombre_padre' => ['required', 'regex:/^[\p{L}ñÑáéíóúÁÉÍÓÚ\s]+$/u'],
            'segundo_nombre_padre' => ['required', 'regex:/^[\p{L}ñÑáéíóúÁÉÍÓÚ\s]+$/u'],
            'apellido_paterno_padre' => ['required', 'regex:/^[\p{L}ñÑáéíóúÁÉÍÓÚ\s]+$/u'],
            'apellido_materno_padre' => ['required', 'regex:/^[\p{L}ñÑáéíóúÁÉÍÓÚ\s]+$/u'],
            'nacionalidad_id' => ['required', 'not_in:1'],
            'lugar_nacimiento_id' => ['required', 'regex:/^[\p{L}\p{M}0-9\s\.\,\-\(\)\/\'"]+$/u', 'max:100'],
            'sexo_id' => ['required', 'not_in:1'],
            'telefono_domicilio' => ['numeric'],
            'telefono_celular' => ['required','regex:/^(0[2-7][0-9]{7}|09[0-9]{8})$/'],
            'direccion_domiciliaria' => ['required', 'regex:/^[\p{L}\p{M}0-9\s\.\,\-\#\/\(\)\'\"\&]+$/u', 'max:150'],
            'correo_electronico_frecuente' => ['required','email'],
            'ocupacion_id' => ['required', 'not_in:1'],
            'otra_ocupacion' => ['required','regex:/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/'],
            'trabaja_para' => ['required', 'not_in:1'],
            'nombre_empresa' => ['required','regex:/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/'],
            'direccion_trabajo' => ['required', 'regex:/^[A-Za-zÁÉÍÓÚáéíóúÑñ0-9\s]+$/'],
            'telefono_trabajo' => ['required','regex:/^(0[2-7][0-9]{7}|09[0-9]{8})$/'],
            'ingresos_egresos_padre.0' => ['required','numeric'],
            'ingresos_egresos_padre.1' => ['required','numeric'],
            'ingresos_egresos_padre.2' => ['required','numeric'],
            'ingresos_egresos_padre.3' => ['required','numeric'],
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

        public function attributes(): array
    {
        return [
            'cedula_padre' => 'cedula',
            'primer_nombre_padre' => 'primer nombre',
            'segundo_nombre_padre' => 'segundo nombre',
            'apellido_paterno_padre' => 'apellido paterno',
            'apellido_paterno_madre' => 'apellido materno',
            // 'nacionalidad_id' => 'nacionalidad',
            'lugar_nacimiento_id' => 'lugar de nacimiento',
            'correo_electronico_frecuente' => 'correo',
            'otra_ocupacion' => 'otra ocupacion',
            'nombre_empresa' => 'nombre de la empresa',
            'direccion_trabajo' => 'direccion de trabajo',
            'telefono_trabajo' => 'telefono del trabajo',
            'ingresos_egresos_padre.0' => 'ingresos',
            'ingresos_egresos_padre.1' => 'ingresos',
            'ingresos_egresos_padre.2' => 'egresos',
            'ingresos_egresos_padre.3' => 'egresos',
            'referencia_familiar.0' => 'nombre',
            // 'referencia_familiar.1' => 'nombre',
            'referencia_familiar.2' => 'teléfono',
            'referencia_familiar.3' => 'nombre',
            // 'referencia_familiar.4' => 'nombre',
            'referencia_familiar.5' => 'teléfono',
            'referencia_familiar.6' => 'nombre',
            // 'referencia_familiar.7' => 'nombre',
            'referencia_familiar.8' => 'teléfono',
        ];
    }
}
