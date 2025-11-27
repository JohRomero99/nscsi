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
use App\Models\representante;
use App\Models\estudianteRepresentante;
use App\Http\Requests\admision\datosPadresRequest;

class datosPadresController extends Controller
{
    /**
     * 
     */
    public function create($estudianteId, $genero)
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
        return view("admision.fichaDatosPadres", compact("nacionalidad","sexo","ocupacion","trabajaPara","relacionFamiliar","estudianteId","genero"));

    }

    public function store(datosPadresRequest $request, $estudianteId, $genero)
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

            // Guardamos la imformación laboral del padre (representante).
            $informacionLaboral = informacionLaboral::create([
                'ocupacion_id' => $request->ocupacion_id,
                'trabaja_para' => $request->trabaja_para,
                'nombre_empresa' => $request->nombre_empresa,
                'direccion_trabajo' => $request->direccion_trabajo,
                'telefono_trabajo' => $request->telefono_trabajo,
                'ingreso_egresos' => json_encode($request->ingreso_egresos),
                'referencia_familiar' => json_encode($request->referencia_familiar),
            ]);

            $representante = representante::create([
                'persona_id' => $nuevaPersona->id,
                'informacion_laboral_id' => $informacionLaboral->id,
            ]);

            $estudianteRepresentante = estudianteRepresentante::create([
                'estudiante_id' => $estudianteId,
                'representante_id' => $representante->id,
            ]);

        }else{

            // Si la cédula existe solo actualizo los campos.
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

            // Se realiza una consulta a la base de datos para verificar si ya hay un regitro de "informacion laboral".
            if ($datosPadre->representante->informacion_laboral_id == null) {

                // Guardamos la imformación laboral del padre (representante).
                $informacionLaboral = informacionLaboral::create([
                    'ocupacion_id' => $request->ocupacion_id,
                    'trabaja_para' => $request->trabaja_para,
                    'nombre_empresa' => $request->nombre_empresa,
                    'direccion_trabajo' => $request->direccion_trabajo,
                    'telefono_trabajo' => $request->telefono_trabajo,
                    'ingreso_egresos' => json_encode($request->ingreso_egresos),
                    'referencia_familiar' => json_encode($request->referencia_familiar),
                ]);

            }else {

                // Actualizamos la información laboral del representante que si existe.
                $datosPadre->representante->informacionLaboral->update([
                    'ocupacion_id' => $request->ocupacion_id,
                    'trabaja_para' => $request->trabaja_para,
                    'nombre_empresa' => $request->nombre_empresa,
                    'direccion_trabajo' => $request->direccion_trabajo,
                    'telefono_trabajo' => $request->telefono_trabajo,
                    'ingreso_egresos' => json_encode($request->ingreso_egresos),
                    'referencia_familiar' => json_encode($request->referencia_familiar),
                ]);

            }

        }

        if ($genero == "padre") {
            
             return redirect()->route('dashboard.ficha.madre.create', [
                'estudianteId' => $estudianteId,
                'genero' => 'madre',
            ]);

        }elseif ($genero == "madre") {
            
            return redirect()->route('dashboard')->with('success','Registro guardado correctamente');

        } 

    }

}
