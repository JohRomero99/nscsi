<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class saludRequest extends FormRequest
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
            'ano_basica' => ['required','not_in:--seleccionar--'],
            'estatura' => ['required', 'numeric', 'min:50', 'max:300'],
            'peso_libras' => ['required', 'numeric', 'min:20', 'max:500'],

            'discapacidad_si_no' => ['required','not_in:--seleccionar--'],

            'discapacidad_lenguaje_si_no' => ['required'],
            'discapacidad_lenguaje_porcentaje' => ['nullable','required_if:discapacidad_lenguaje_si_no,Si','numeric','min:0','max:100'],
            'discapacidad_lenguaje_detalle' => ['nullable','required_if:discapacidad_lenguaje_si_no,Si'],

            'discapacidad_auditiva_si_no' => ['required'],
            'discapacidad_auditiva_porcentaje' => ['nullable','required_if:discapacidad_auditiva_si_no,Si','numeric','min:0','max:100'],
            'discapacidad_auditiva_detalle' => ['nullable','required_if:discapacidad_auditiva_si_no,Si'],

            'discapacidad_visual_si_no' => ['required'],
            'discapacidad_visual_porcentaje' => ['nullable','required_if:discapacidad_visual_si_no,Si','numeric','min:0','max:100'],
            'discapacidad_visual_detalle' => ['nullable','required_if:discapacidad_visual_si_no,Si'],

            'discapacidad_fisica_si_no' => ['required'],
            'discapacidad_fisica_porcentaje' => ['nullable','required_if:discapacidad_fisica_si_no,Si','numeric','min:0','max:100'],
            'discapacidad_fisica_detalle' => ['nullable','required_if:discapacidad_fisica_si_no,Si'],

            'discapacidad_intelectual_si_no' => ['required'],
            'discapacidad_intelectual_porcentaje' => ['nullable','required_if:discapacidad_intelectual_si_no,Si','numeric','min:0','max:100'],
            'discapacidad_intelectual_detalle' => ['nullable','required_if:discapacidad_intelectual_si_no,Si'],

            'cronicas_catastroficas_si_no' => ['required'],
            'cronicas_catastroficas_porcentaje' => ['nullable','required_if:cronicas_catastroficas_si_no,Si','numeric','min:0','max:100'],
            'cronicas_catastroficas_detalle' => ['nullable','required_if:cronicas_catastroficas_si_no,Si'],

            'psicosocial_si_no' => ['required'],
            'psicosocial_porcentaje' =>['nullable','required_if:psicosocial_si_no,Si','numeric','min:0','max:100'],
            'psicosocial_detalle' => ['nullable','required_if:psicosocial_si_no,Si'],

            
            'aparatos_ayuda' => ['required','not_in:--seleccionar--'],
            'especifique_aparatos_ayuda' => ['nullable','required_if:aparatos_ayuda,Anteojos,Audífonos','regex:/^[a-zA-Z0-9\s]*$/'],
            'carnet_conadis_si_no' => ['required','not_in:--seleccionar--'],
            'numero_carnet_conadis' => ['nullable','required_if:carnet_conadis_si_no,Si','digits:10'],
            'medicamento_si_no' => ['required','not_in:--seleccionar--'],
            'especifique_medicamentos' => ['nullable','required_if:medicamento_si_no,Si','regex:/^[a-zA-Z0-9\s]*$/'],
            'alergia_estudiante_si_no' => ['required','not_in:--seleccionar--'],
            'alergia_estudiante' => ['required_if:alergia_estudiante_si_no,Si,'], //revisar
            'enfermedades_accidentes' => ['required','not_in:--seleccionar--'],
            'especifique_accidente_enfermedad' => ['nullable','required_if:enfermedades_accidentes,Varicela,Chagas,Neumonía,Diabetes,Otitis,Angina,Enfermedades de la sangre,Desgarro,Paperas,Sarampión,Asma,Fiebre reumática,Hipertiroidismo,Tendinitis,Pérdida de conocimiento,Problemas de la columna,Rubeola,Epilipsia,Bronquitis,Hepatitis,Hipotiroidismo,Arritmia,Sangrado nasal constante,Luxación'],
            'intervencion_quirurgica_si_no'=> ['required','not_in:--seleccionar--'],
            'cantidad_intervencion_quirugicas' => ['required_if:intervencion_quirurgica_si_no,Si'],
            'tipo_intervencion_quirugica' => ['nullable','required_if:intervencion_quirurgica_si_no,Si','regex:/^[a-zA-Z0-9\s]*$/'],
            'fecha_intervencion_quirugica' => ['nullable','required_if:intervencion_quirurgica_si_no,Si','date'],
            'fecha_ultima_desparasitacion' => ['nullable','required','date'],
            'vacunas' => ['required','not_in:--seleccionar--'],
            'otra_vacuna' => ['nullable','required_if:vacunas,Otra','regex:/^[a-zA-Z0-9\s]*$/'],
            'dificultad_dormir' => ['required','not_in:--seleccionar--'],
            'otra_dificultad_dormir' => ['nullable','required_if:dificultad_dormir,Pesadillas,Exceso de Sueño,Sonambulismo,Ronquidos,Insomio,Otra','regex:/^[a-zA-Z0-9\s]*$/'],
            'antecedentes_patologicos_famiiares' => ['required','not_in:--seleccionar--'],
            'especifique_antecedentes_patologicos_famiiares' => ['nullable','required_if:antecedentes_patologicos_famiiares,Obesidad,Diabetes,Hipertensión,Enfermedades Cardíacas,Enfermedades mentales,Otra','regex:/^[a-zA-Z0-9\s]*$/'],
            'seguro_estudiante_si_no' => ['required','not_in:--seleccionar--'],
            'aseguradora_salud' => ['nullable','required_if:seguro_estudiante_si_no,Si','regex:/^[a-zA-Z0-9\s]*$/'],
            'aseguradora_salud_telefono' => ['nullable','required_if:seguro_estudiante_si_no,Si','regex:/^09\d{8}$/'],
            'aseguradora_salud_emergencia' => ['nullable','required_if:seguro_estudiante_si_no,Si','regex:/^[a-zA-Z0-9\s]*$/'],
            'aseguradora_accidente' => ['nullable','required_if:seguro_estudiante_si_no,Si','regex:/^[a-zA-Z0-9\s]*$/'],
            'aseguradora_accidente_telefono' => ['nullable','required_if:seguro_estudiante_si_no,Si','regex:/^09\d{8}$/'],
            'aseguradora_accidente_emergencia' => ['nullable','required_if:seguro_estudiante_si_no,Si','regex:/^[a-zA-Z0-9\s]*$/'],
            'aseguradora_otra' => ['nullable','required_if:seguro_estudiante_si_no,Si','regex:/^[a-zA-Z0-9\s]*$/'],
            'aseguradora_otro_telefono' => ['nullable','required_if:seguro_estudiante_si_no,Si','regex:/^09\d{8}$/'],
            'aseguradora_otro_emergencia' => ['nullable','required_if:seguro_estudiante_si_no,Si','regex:/^[a-zA-Z0-9\s]*$/'],
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
            'ano_basica' => '--seleccionar--',
            'discapacidad_si_no' => '--seleccionar--',
            'aparatos_ayuda' => '--seleccionar--',
            'carnet_conadis_si_no' => '--seleccionar--',
            'medicamento_si_no' => '--seleccionar--',
            '' => '',
            'alergia_estudiante_si_no' => '-seleccionar--',
            '' => '',
            'enfermedades_accidentes' => '--selecionar--',
            '' => '',
            'intervencion_quirurgica_si_no' => '--seleccionar--',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            'fecha_ultima_desparasitacion' => 'Fecha ultima desparasitacion',
            'vacunas' => '--seleccionar--',
            '' => '',
            'dificultad_dormir' => '--seleccionar--',
            '' => '',
            'antecedentes_patologicos_famiiares' => '--seleccionar--',
            '' => '',
            'seguro_estudiante_si_no' => '--seleccionar--',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
        ];
    }
}
