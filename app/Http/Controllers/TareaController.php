<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TareaController extends Controller
{
    public function registro(){

        return view('registro');
    }

    public function login(){

        return view('login');
    }
}
