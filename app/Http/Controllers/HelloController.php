<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Http\Request;

class HelloController extends Controller
{
    public function index()
        {
            return view('helloWorld');
        }
}
