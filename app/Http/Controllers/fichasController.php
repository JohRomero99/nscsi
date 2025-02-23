<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fichasController extends Controller
{
    
    public function createAspirante(){

        return view('fichas.aspirante');

    }

}
