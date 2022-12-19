<?php

namespace App\Http\Requests\matriculacion;

use Illuminate\Foundation\Http\FormRequest;

class registroEstudianteAdmitido extends FormRequest
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
            'cedulaEstudiante' => 'ecuador:personal_identification|required',
            'cedulaRepresentante' => 'ecuador:personal_identification|required',
            'primerNombreEstudiante' => 'required|string',
            'segundoNombreEstudiante' => 'required|string',
            'apellidoPaternoEstudiante' => 'required|string',
            'apellidoMaternoEstudiante' => 'required|string',
            'primerNombreRepresentante' => 'required|string',
            'segundoNombreRepresentante' => 'required|string',
            'apellidoPaternoRepresentante' => 'required|string',
            'apellidoMaternoRepresentante' => 'required|string',
            'correoRepresentante' => 'email',
        ];
    }
}
