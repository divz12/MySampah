<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function layanan()
    {
        if (auth()->check()) 
        {
            return view('auth.layanan');
        } 
        else {
            return view('guest.layanan');
        }
    }
}
