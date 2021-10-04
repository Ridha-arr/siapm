<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Valid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Monitoring extends Controller
{
    public function index(){
        $valid = Valid::all()->sum('ketentuan');
        $laporan = Laporan::all()->count();
        $verif = Laporan::where('verif',1)->count();
        $total = $valid-$laporan;
        return view('monitoring1',[
            'tersedia' => $laporan,
            'total' => $total,
            'verif'=>$verif
        ]);
    }
    public function detail(){
        return view('monitoring2',[
            'valids'=>Valid::select('area')->groupBy('area')->get()
        ]);
    }
    public function getDetail($area){
        $detail = Laporan::whereHas('valid',function($valid) use($area){
            $valid->where('area',$area);
        })->get();
        return $detail;
    }
}
