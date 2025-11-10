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
use App\Models\convivienteEstudiante;
use App\Models\salud;
use App\Models\relacionFamiliar;
use App\Models\ruta;
use App\Models\servicioTransporte;
use App\Models\fichaEstudianteAspirante;
use App\Models\transporteEscolar;
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
        $convivienteEstudiante = convivienteEstudiante::all();

        // Obtengo todos los datos registrados en la tabla "referencia familiar".
        $relacionFamiliar = relacionFamiliar::all();

        // Obtengo todos los datos registrados en la tabla "ruta".
        $ruta = ruta::all();

        // Obtengo todos los datos registrados en la tabla "servicioTransporte".
        $servicioTransporte = servicioTransporte::all();

        // Retorno a la vida dashboard con cada una de la variables creadas anteriormente.
        return view('admision.fichaDatosEstudiante', compact('sexo','nacionalidad','anio_academico','convivienteEstudiante','tipoVivienda','estudiante','relacionFamiliar','ruta','servicioTransporte'));

    }

    public function store(datosEstudianteRequest $request){

        // Busco en la tabla persona la cédula del estudiante que obtengo de la vista llamada "Datos del Estudiante".
        $persona = persona::where('cedula',$request->cedula)->first();

        // PDF - Ultimo Boletin.
        // Obtengo el PDF "Boletin ultimo año" de la vista llamada "Datos del Estudiante".
        $archivo = $request->file('boletin_ultimo_ano');

        // Obtengo el nombre original del archivo tal como lo tenía en el computador del usuario.
        $nombre = $archivo->getClientOriginalName();

        // Guarda el archivo dentro del disco 'public'.
        $rutaBoletinUltimoAno = $archivo->store('documentos', 'public');


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
            "scan_cedula_front" => $rutaCedulaFrontal,
            "scan_cedula_back" => $rutaCedulaTrasera,
        ]);

        $persona->estudiante->update([
            'anio_academico_id' => $request->anio_academico_id,
        ]);

        // Hago una conuslta a la tabla "fichaEstudianteAspirante" para verificar si ya existe un registro creado.
        $fichaEstudianteAspirante = fichaEstudianteAspirante::where('estudiante_id',$persona->estudiante->id)->first();

        if (empty($fichaEstudianteAspirante)) {

            // Guardo los datos en la tabla "Transporte Escolar".
            $transporteEscolar = transporteEscolar::create([
                'servicio_transporte_id' => $request->servicio_transporte,
                'ruta_id' => $request->ruta,
            ]);

            // Guardo los datos en la tabla "Ficha datos del Estudiante".
            $fichaEstudianteAspirante = fichaEstudianteAspirante::create([
                'estudiante_id' => $persona->estudiante->id,
                'repite_ano' => $request->repite_ano,
                'anio_academico_postula_id' => $request->anio_academico_id,
                'tipo_vivienda_id' => $request->tipo_vivienda,
                'anos_domicilio' => $request->anos_domicilio,
                'ano_basica_postula' => $request->anio_academico_id,
                'conviviente_estudiante_id' => $request->conviviente_estudiante_id,
                'transporte_escolar_id' => $transporteEscolar->id,
                'boletin_ultimo_ano' => $rutaBoletinUltimoAno,
                'referencia_familiar' => json_encode($request->referencia_familiar),
            ]);
            
        }else {
        
            // Actualizo la tabla "Ficha estudiante" para que no se cree registros multiples.
            $fichaEstudianteAspirante->transporteEscolar->update([
                'servicio_transporte_id' => $request->servicio_transporte,
                'ruta_id' => $request->ruta,
            ]);

            $fichaEstudianteAspirante->update([
                'estudiante_id' => $persona->estudiante->id,
                'repite_ano' => $request->repite_ano,
                'anio_academico_postula_id' => $request->anio_academico_id,
                'tipo_vivienda_id' => $request->tipo_vivienda,
                'anos_domicilio' => $request->anos_domicilio,
                'ano_basica_postula' => $request->anio_academico_id,
                'conviviente_estudiante_id' => $request->conviviente_estudiante_id,
                'transporte_escolar_id' => $fichaEstudianteAspirante->transporteEscolar->id,
                'boletin_ultimo_ano' => $rutaBoletinUltimoAno,
                'referencia_familiar' => json_encode($request->referencia_familiar),
            ]);

        }

        return redirect()->route('dashboard.ficha.padres.create');

    }

}
