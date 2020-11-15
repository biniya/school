<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class School extends Controller
{
    public function index()
    {
        return view('school-form');
    }
}
