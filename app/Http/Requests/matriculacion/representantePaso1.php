<?php

namespace App\Http\Requests\matriculacion;

use Illuminate\Foundation\Http\FormRequest;

class representantePaso1 extends FormRequest
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
            'codigoNacional' => 'required|numeric|digits:10',
            'primerNombre' => 'required|string',
            'apellidoPaterno' => 'required|string',
            'identificacion' => 'required_if:identificacion,null|ecuador:personal_identification'
        ];
    }
}
