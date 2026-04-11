<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class periodoLectivoController extends Controller
{
    // Aquí se Guarda la Session
    public function cambiar($id){
            
        session(['periodo_lectivo_id' => $id]);
        return back(); // vuelve a la misma página
    }
}
