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
            'cedulaEstudiante' => 'ecuador:personal_identification|required_if:pasaporteEstudiante,null',
            'cedulaRepresentante' => 'ecuador:personal_identification|required_if:pasaporteRepresentante,null',
            'pasaporteEstudiante' => 'required_if:cedulaEstudiante,null',
            'pasaporteRepresentante' => 'required_if:cedulaRepresentante,null',
            'primerNombreEstudiante' => 'required|string|regex:/^[\pL\s\-]+$/u',
            'segundoNombreEstudiante' => 'required|string|regex:/^[\pL\s\-]+$/u',
            'apellidoPaternoEstudiante' => 'required|string|regex:/^[\pL\s\-]+$/u',
            'apellidoMaternoEstudiante' => 'required|string|regex:/^[\pL\s\-]+$/u',
            'primerNombreRepresentante' => 'required|string|regex:/^[\pL\s\-]+$/u',
            'segundoNombreRepresentante' => 'required|string|regex:/^[\pL\s\-]+$/u',
            'apellidoPaternoRepresentante' => 'required|string|regex:/^[\pL\s\-]+$/u',
            'apellidoMaternoRepresentante' => 'required|string|regex:/^[\pL\s\-]+$/u',
            'correoRepresentante' => 'email|string',
        ];
    }
}
