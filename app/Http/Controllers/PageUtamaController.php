<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageUtamaController extends Controller
{
    public function index()
    {
        return view('PageUtama.index');
    }
}

