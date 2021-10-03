<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class verifikasi extends Controller
{
    public function index(){
        return view('verifikasi01',[
            'laporan' => Laporan::all()->count(),
            'verif' => Laporan::where('verif',0)->count()
        ]);
    }
    public function area(){
        return view('verifikasi02');
    }
    public function detail()
    {
        return view('verifikasi03');
    }
    public function isi()
    {
        return view('verifikasi04');
    }
    public function syarat()
    {
        return view('verifikasi04');
    }
}
