<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KimiaController extends Controller
{
    public function index()
    {
        return view('list-buku/kimia');
    }
}
