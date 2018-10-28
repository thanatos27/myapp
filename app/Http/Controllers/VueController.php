<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VueController extends Controller
{
    public function example()
    {
        return view('vue.example');
    }
}
