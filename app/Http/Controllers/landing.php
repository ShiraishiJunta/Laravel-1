<?php

namespace App\Http\Controllers;

class landing extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}