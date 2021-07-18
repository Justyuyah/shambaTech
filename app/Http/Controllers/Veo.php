<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Veo extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:veo');
    }

    public function index()
    {
        return view('veo.home');
    }
}
