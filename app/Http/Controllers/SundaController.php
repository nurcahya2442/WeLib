<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SundaController extends Controller
{
    public function index()
    {
        return view('list-buku/sunda');
    }
}
