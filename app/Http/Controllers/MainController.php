<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function patient_experience()
    {
        return view('frontend.patient_experience');
    }
}
