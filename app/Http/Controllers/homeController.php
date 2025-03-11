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
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $matriculacion = matriculacion::paginate(10);
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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
