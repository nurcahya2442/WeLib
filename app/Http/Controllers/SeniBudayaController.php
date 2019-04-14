<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeniBudayaController extends Controller
{
    public function index()
    {
        return view('list-buku/senibudaya');
    }
}
