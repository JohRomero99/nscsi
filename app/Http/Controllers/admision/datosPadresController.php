<?php

namespace App\Http\Controllers\admision;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\nacionalidad;
use App\Models\sexo;
use App\Models\ocupacion;
use App\Models\trabajaPara;
use App\Models\relacionFamiliar;
use App\Models\informacionLaboral;
use App\Models\persona;
use App\Http\Requests\admision\datosPadresRequest;

class datosPadresController extends Controller
{
    /**
     * 
     */
    public function create()
    {

        // Obtengo todos los datos registrados en la tabla "nacionalidad".
        $nacionalidad = nacionalidad::all();

        // Obtengo todos los datos registrados en la tabla "ocupacion".
        $ocupacion = ocupacion::all();

        // Obtengo todos los datos registrados en la tabla "sexo".
        $sexo = sexo::all();

        // Obtengo todos los datos registrados en la tabla "trabaja para".
        $trabajaPara = trabajaPara::all();

        // Obtengo todos los datos registrados en la tabla "referencia familiar".
        $relacionFamiliar = relacionFamiliar::all();

        // Retorno a la vida dashboard con cada una de la variables creadas anteriormente.
        return view("admision.fichaDatosPadres", compact("nacionalidad","sexo","ocupacion","trabajaPara","relacionFamiliar"));

    }

    public function store(datosPadresRequest $request)
    {

        // PDF - Cédula parte Frontal.
        // Obtengo el PDF "scan_cedula_front" de la vista llamada "Datos del Estudiante".
        $cedula_parte_frontal = $request->file('scan_cedula_front');

        // Obtengo el nombre original del archivo tal como lo tenía en el computador del usuario.
        $nombre_uno = $cedula_parte_frontal->getClientOriginalName();

        //Guarda el archivo dentro del disco 'public'.
        $rutaCedulaFrontal = $cedula_parte_frontal->store('documentos', 'public');


        // PDF - Cédula Parte Trasera.
        // Obtengo el PDF "scan_cedula_back" de la vista llamada "Datos del Estudiante".
        $cedula_parte_trasera = $request->file('scan_cedula_back');

        // Obtengo el nombre original del archivo tal como lo tenía en el computador del usuario.
        $nombre_dos = $cedula_parte_trasera->getClientOriginalName();

        //Guarda el archivo dentro del disco 'public'.
        $rutaCedulaTrasera = $cedula_parte_trasera->store('documentos', 'public');

        // Consulto en la base de datos "Persona" si la cédula ya está registrada o es nueva.
        $datosPadre = persona::where('cedula',$request->cedula_padre)->first();

        // Guardamos la imformación laboral del padre (representante).
        $informacionLaboral = informacionLaboral::create([
            'ocupacion_id' => $request->ocupacion_id,
            'trabaja_para' => $request->trabaja_para,
            'nombre_empresa' => $request->nombre_empresa,
            'direccion_trabajo' => $request->direccion_trabajo,
            'telefono_trabajo' => $request->telefono_trabajo,
        ]);

        // Valido la variable "datosPadre" para ver si tiene un valor "null" o no.
        if($datosPadre == null){

            // Como la validación es null vamos a crear un registro nuevo en la tabla persona ya que la cédula que se consultó no existe.
            $nuevaPersona = persona::create([
                "cedula" => $request->cedula_padre,
                "primer_nombre" => $request->primer_nombre_padre,
                "segundo_nombre" => $request->segundo_nombre_padre,
                "apellido_paterno" => $request->apellido_paterno_padre,
                "apellido_materno" => $request->apellido_materno_padre,
                "nacionalidad_id" => $request->nacionalidad_id,
                'lugar_nacimiento_id' => $request->lugar_nacimiento_id,
                'sexo_id' => $request->sexo_id,
                'fecha_nacimiento' => $request->fecha_nacimiento,
                'direccion_domiciliaria' => $request->direccion_domiciliaria,
                'telefono_celular' => $request->telefono_celular,
                'telefono_domicilio' => $request->telefono_domicilio,
                'scan_cedula_front' => $rutaCedulaFrontal,
                'scan_cedula_back' => $rutaCedulaTrasera,
            ]);

            $representante = informacionLaboral::create([
                'persona_id' => $nuevaPersona->id,
                'informacion_laboral_id' => $informacionLaboral->id,
            ]);

        }else{

            // Como la cédula si existe solo actualizo los campos.
            $datosPadre->update([
                "cedula" => $request->cedula_padre,
                "primer_nombre" => $request->primer_nombre_padre,
                "segundo_nombre" => $request->segundo_nombre_padre,
                "apellido_paterno" => $request->apellido_paterno_padre,
                "apellido_materno" => $request->apellido_materno_padre,
                "nacionalidad_id" => $request->nacionalidad_id,
                'lugar_nacimiento_id' => $request->lugar_nacimiento_id,
                'sexo_id' => $request->sexo_id,
                'fecha_nacimiento' => $request->fecha_nacimiento,
                'direccion_domiciliaria' => $request->direccion_domiciliaria,
                'telefono_celular' => $request->telefono_celular,
                'telefono_domicilio' => $request->telefono_domicilio,
                'scan_cedula_front' => $rutaCedulaFrontal,
                'scan_cedula_back' => $rutaCedulaTrasera,
            ]);

            // Actualizamos la información laboral del representante que si existe.
            $datosPadre->representante->update([
                'informacion_laboral_id' => $informacionLaboral->id,
            ]);

            // Obtener el ID del estudiante_representante

        }


    }


}
