<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){

        return view('admin.index');

    }

    public function create(){

        return view('admin.create');

    }

    public function store(){

        return view('');

    }

    public function update(){

        return view('');

    }

    public function delete(){

        return view('');

    }
}
