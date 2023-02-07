<?php

namespace App\Http\Requests\matriculacion;

use App\Rules\matriculacionFormularioPasoUno;
use Illuminate\Foundation\Http\FormRequest;

class representantePasoUno extends FormRequest
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
            'codigoNacional.*' => 'required|numeric|digits:10|',
            'primerNombre.*' => 'required|regex:/^[\pL\s\-]+$/u',
            'segundoNombre.*' => 'required|regex:/^[\pL\s\-]+$/u',
            'apellidoPaterno.*' => 'required|regex:/^[\pL\s\-]+$/u',
            'apellidoMaterno.*' => 'required|regex:/^[\pL\s\-]+$/u',
            'identificacion.*' => 'required_if:identificacion,null|ecuador:personal_identification',
        ];
    }
}
