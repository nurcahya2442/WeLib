<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnglishController extends Controller
{
    public function index()
    {
        return view('list-buku/english');
    }
}
