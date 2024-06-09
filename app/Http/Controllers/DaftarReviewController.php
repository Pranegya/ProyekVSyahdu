<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarReviewController extends Controller
{
    public function index()
    {
        return view('daftarReview');
    }
}
