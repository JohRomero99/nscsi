<?php

namespace App\Http\Controllers\colector;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class colectorController extends Controller
{
    public function index(){

        return view('colector.index');

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
}
