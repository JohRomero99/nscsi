<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class completarPerfil extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'primer_nombre' => 'required|regex:/^[\pL\s\-]+$/u|max:255|string|',
            'segundo_nombre' => 'required|regex:/^[\pL\s\-]+$/u|max:255|string|',
            'apellido_paterno' => 'required|regex:/^[\pL\s\-]+$/u|max:255|string',
            'apellido_materno' => 'required|regex:/^[\pL\s\-]+$/u|max:255|string',
            'telefono_celular' => 'required|numeric|',
            'telefono_domicilo' => 'required|numeric',
            'fecha_nacimiento' => 'required',
            'direccion_domiciliaria' => 'required|max:255|string'
        ];
    }
}
