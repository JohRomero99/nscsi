<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\estudianteRepresentante;
use App\Models\matriculacion;
use App\Models\salud;
use Barryvdh\DomPDF\Facade\Pdf;

class homeController extends Controller
{
    /**
     *
     */
    public function indexMatriculacion()
    {
        
        $matriculacion = matriculacion::where('estado', 'Matriculado')->paginate(10);
        return view('dashboard', compact('matriculacion'));

    }

    /**
     * Generar PDF matriculacion
     */
    public function pdfMatriculacion($id)
    {

        $matriculacion = matriculacion::findOrFail($id);
        $nombreArchivo = $matriculacion->primer_nombre_estudiante . '_' . $matriculacion->apellido_paterno_estudiante . '_matriculacion.pdf';
        $imagePath = public_path('imagenes/LogoNSCFinalNegro.png'); // Asegúrate de que el nombre no tenga espacios
        $imageData = base64_encode(file_get_contents($imagePath));
        $imageType = pathinfo($imagePath, PATHINFO_EXTENSION);
        $imageBase64 = "data:image/$imageType;base64,$imageData";
        $pdf = Pdf::loadView('pdf.matriculacion', compact('matriculacion', 'imageBase64' ));
        return $pdf->download($nombreArchivo);

    }

    /**
     * Buscar estudiante
     */
    public function buscar(Request $request)
    {
        $query = $request->input('query');
        $matriculacion = matriculacion::where('cedula_estudiante', 'LIKE', "%{$query}%")
            ->orWhere('primer_nombre_estudiante', 'LIKE', "%{$query}%")
            ->orWhere('segundo_nombre_estudiante', 'LIKE', "%{$query}%")
            ->orWhere('apellido_paterno_estudiante', 'LIKE', "%{$query}%")
            ->orWhere('apellido_materno_estudiante', 'LIKE', "%{$query}%")
            ->orWhere('ano_basica', 'LIKE', "%{$query}%")
            ->paginate(10);
    
        return view('dashboard', compact('matriculacion'));
    }

    /**
     *
     */
    public function indexSalud()
    {

        $salud = salud::paginate(10);
        return view('dashboardSalud', compact('salud'));

    }

    /**
     * Generar PDF salud
     */
    public function pdfsalud($id)
    {

        $salud = salud::findOrFail($id);
        $nombreArchivo = $salud->primer_nombre_estudiante . '_' . $salud->apellido_paterno_estudiante . '_salud.pdf';
        $imagePath = public_path('imagenes/LogoNSCFinalNegro.png'); // Asegúrate de que el nombre no tenga espacios
        $imageData = base64_encode(file_get_contents($imagePath));
        $imageType = pathinfo($imagePath, PATHINFO_EXTENSION);
        $imageBase64 = "data:image/$imageType;base64,$imageData";
        $pdf = Pdf::loadView('pdf.salud', compact('salud', 'imageBase64' ));
        return $pdf->download($nombreArchivo);

    }

    /**
     * Buscar estudiante salud
     */
    public function buscarSalud(Request $request)
    {
        $query = $request->input('query');
        $salud = salud::where('cedula_estudiante', 'LIKE', "%{$query}%")
            ->orWhere('primer_nombre_estudiante', 'LIKE', "%{$query}%")
            ->orWhere('segundo_nombre_estudiante', 'LIKE', "%{$query}%")
            ->orWhere('apellido_paterno_estudiante', 'LIKE', "%{$query}%")
            ->orWhere('apellido_materno_estudiante', 'LIKE', "%{$query}%")
            ->orWhere('ano_basica', 'LIKE', "%{$query}%")
            ->paginate(10);
    
        return view('dashboardSalud', compact('salud'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
