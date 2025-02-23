<?php

namespace App\Http\Controllers\admision;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\persona;

class buscarCedulaController extends Controller
{
    
    public function buscarCedula(Request $request)
    {
        $cedula = $request->query('cedula'); // Obtener la cédula desde la solicitud
        $persona = Persona::where('cedula', $cedula)->first(); // Buscar en la base de 

        if ($persona) {
            // Retornar los datos de la persona como JSON si existe
            return response()->json($persona);
        } else {
            // Retornar un mensaje de error si no existe
            return response()->json(['error' => 'Cédula no encontrada'], 404);
        }
    }

}
