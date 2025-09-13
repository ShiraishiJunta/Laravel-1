<?php

namespace App\Http\Controllers;

class landingController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}