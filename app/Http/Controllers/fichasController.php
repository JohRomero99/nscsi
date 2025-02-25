<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\aspiranteRequest;

class fichasController extends Controller
{
    
    public function createAspirante(){

        return view('fichas.aspirante');

    }

    public function storeAspirante(aspiranteRequest $request){

        return "hola";

    }

}
