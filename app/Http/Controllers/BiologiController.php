<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiologiController extends Controller
{
    public function index()
    {
        return view('list-buku/biologi');
    }
}
