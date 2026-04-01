<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class adminController extends Controller
{
    public function index(){

        return view('admin.index');

    }

    public function create(){

        $user = User::all();
        return view('admin.create', compact('user'));

    }

    public function edit($userId){

        $user = User::find($userId);
        return view('admin.edit', compact('user'));

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
