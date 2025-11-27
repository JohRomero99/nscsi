<?php

namespace App\Http\Controllers\admision;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class fichaMedicaController extends Controller
{
    /**
     * 
     */
    public function create(){

        return view("admision.fichaDatosMedica");

    }

    /**
     * 
     */
    public function store(){
        
    }
}
