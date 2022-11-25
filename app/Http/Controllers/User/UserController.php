<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function inicio(){

        return view('user.inicio');

    }

    public function registro(){

        return view('user.pre-registro');

    }
}
