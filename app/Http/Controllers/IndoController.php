<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndoController extends Controller
{
    public function index()
    {
        return view('list-buku/indo');
    }
}
