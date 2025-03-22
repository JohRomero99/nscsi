<?php

namespace App\Http\Controllers\admision;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\persona;

class buscarCedulaController extends Controller
{
    
    public function buscarCedulaRepresentante(Request $request)
    {
        
        $cedula = $request->query('cedula'); // Obtener la cédula desde la solicitud
        $persona = Persona::where('cedula', $cedula)->first(); // Buscar en la base de 

        if ($persona) {
            // Retornar los datos de la persona como JSON si existe
            return response()->json($persona);
        }
    }

    public function buscarCedulaEstudiante(Request $request)
    {
        
        $cedula = $request->query('cedula');
        $persona = Persona::where('cedula', $cedula)->first(); // Buscar en la base de datos
        return $persona;

        if ($persona) {
            // Retornar los datos de la persona como JSON si existe
            return response()->json($persona);
        }
    }

}
