<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function tentangKami()
    {
        if (auth()->check()) 
        {
            return view('auth.tentangkami');
        } 
        else {
            return view('guest.tentangkami');
        }
    }

}
