<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    public function donasi()
    {
        if (auth()->check()) 
        {
            return view('auth.donasi');
        } 
        else {
            return view('guest.donasi');
        }
    }
}
