<?php

namespace App\Http\Controllers\colector;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pensiones;

class colectorController extends Controller
{
    public function index(){

        $pensiones = pensiones::all();
        return view('colector.index', compact('pensiones'));

    }

    public function create(){

        return view('colector.create');

    }

    public function edit($userId){


    }

    public function store(Request $request){

        return $request->all();

    }

    public function update($userId, Request $request){


    }

    public function destroy($userId){


    }

    public function pago(Request $request){

        return $request->all();

    }
}
