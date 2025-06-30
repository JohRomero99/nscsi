<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\estudianteRepresentante;
use App\Models\matriculacion;
use App\Models\estudiante;
use App\Models\persona;
use App\Models\sexo;
use App\Models\nacionalidad;
use App\Models\anioAcademico;
use App\Models\tipoVivienda;
use App\Models\viveCon;
use App\Models\salud;
use App\Models\relacionFamiliar;
use App\Http\Requests\admision\datosEstudianteRequest;

class homeController extends Controller
{
    /**
     * Página princial del proceso de admisión y matriculación.
     */
    public function index()
    {
        
        // Obtengo el id del usuario que está autenticado y obtengo el id del representante.
        $representanteId = Auth::user()->persona->representante->id;

        // Busco en la tabla estudiante_representante la columna representante_id que contenga el id del representante.
        $representanteEstudiante = estudianteRepresentante::where('representante_id',$representanteId)->get();

        // Obtengo todos los datos registrados en la tabla "año acádemico".
        $anio_academico = anioAcademico::all();

        // Retorna la vista homeAdmision y envio la variable $representanteEstudiante y la variable $anio_academico.
        return view('admision.homeAdmision', compact('representanteEstudiante', 'anio_academico'));

    }


    /**
     * Wizad - Datos del estudiante.
     */
    public function create($id)
    {

        //Obtengo el id del estudiante.
        $estudiante = estudiante::find($id);

        // Obtengo todos los datos registrados en la tabla "sexo".
        $sexo = sexo::all();

        // Obtengo todos los datos registrados en la tabla "nacionalidad".
        $nacionalidad = nacionalidad::all();

        // Obtengo todos los datos registrados en la tabla "año acádemico".
        $anio_academico = anioAcademico::all();

        // Obtengo todos los datos registrados en la tabla "tipo de vivienda".
        $tipoVivienda = tipoVivienda::all();

        // Obtengo todos los datos registrados en la tabla "viveCon".
        $viveCon = viveCon::all();

        // Obtengo todos los datos registrados en la tabla "referencia familiar".
        $relacionFamiliar = relacionFamiliar::all();

        // Retorno a la vida dashboard con cada una de la variables creadas anteriormente.
        return view('admision.fichaDatosEstudiante', compact('sexo','nacionalidad','anio_academico','viveCon','tipoVivienda','estudiante','relacionFamiliar'));

    }

    public function store(datosEstudianteRequest $request){

        // Busco en la tabla persona la cédula del estudiante que obtengo de la vista llamada "Datos del Estudiante".
        $persona = persona::where('cedula',$request->cedula)->first();
        // return $persona;

        // Obtengo el PDF "Boletin ultimo año" de la vista llamada "Datos del Estudiante".
        $archivo = $request->file('boletin_ultimo_ano');

        // Obtengo el nombre original del archivo tal como lo tenía en el computador del usuario.
        $nombre = $archivo->getClientOriginalName();

        // Guarda el archivo dentro del disco 'public'.
        $rutaBoletinUltimoAno = $archivo->store('documentos', 'public');

        // Actualizo nuevamente los datos en la tabla persona.
        $persona->update([
            "cedula" => $request->cedula,
            "primer_nombre" => $request->primer_nombre,
            "segundo_nombre" => $request->segundo_nombre,
            "apellido_paterno" => $request->apellido_paterno,
            "apellido_materno" => $request->apellido_materno,
            "nacionalidad_id" => $request->nacionalidad_id,
            'lugar_nacimiento_id' => $request->lugar_nacimiento_id,
            'sexo_id' => $request->sexo_id,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'direccion_domiciliaria' => $request->direccion_domiciliaria,
        ]);

        // Actualizo los datos en la tabla estudiante.
        $persona->estudiante->update([
            'repite_ano' => $request->repite_ano,
            'anio_academico_id' => $request->anio_academico_id,
            'tipo_vivienda_id' => $request->tipo_vivienda_id,
            'anos_domicilio' => $request->anos_domicilio,
            'vive_con' => $request->vive_con,
            'boletin_ultimo_ano' => $rutaBoletinUltimoAno,
        ]);

        return redirect()->route('dashboard.ficha.padres.create');

    }

}
