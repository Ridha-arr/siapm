<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class verifikasi extends Controller
{
    public function index(){
        return view('verifikasi01');
    }
    public function area(){
        return view('verifikasi02');
    }
}
