<?php

namespace App\Http\Controllers;

use App\Models\Keterangan;
use App\Models\Laporan;
use App\Models\Valid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class verifikasi extends Controller
{
    public function index(){
        return view('verifikasi01',[
            'laporan' => Laporan::all()->count(),
            'verif' => Laporan::where('verif',0)->count()
        ]);
    }
    public function area(){
        return view('verifikasi02',[
            'laporans' => Valid::groupBy(['area'])->select(DB::raw('area'))->get()
        ]);
    }
    public static function getArea($area){
        $areas = Valid::where('area',$area)->count();
        $verif = Valid::where('area', $area)->whereHas('laporan',function ($query){
            $query->where('verif',0);
        })->count();
        $total = (($areas*100)/ $areas) - (($verif/ $areas)*100);
        return $total;
    }
    public function detail($area)
    {
        return view('verifikasi03',[
            'details'=> Valid::where('area',$area)->get(),
            'area'=>$area
        ]);
    }
    public function isi($valid)
    {
        return view('verifikasi04',[
            'valids' => Valid::find($valid)
        ]);
    }
    public function syarat($id)
    {
        return view('verifikasi05',[
            'keterangan' =>Keterangan::find($id)
        ]);
    }
    public function hasil($id){
        return view('verifikasi06',[
            'valids' => Valid::find($id)
        ]);
    }
    public function verif(Request $request){
        $laporan = Laporan::find($request->laporan_id);
        $laporan->verif = $request->terkendali;
        $laporan->komentar = $request->komentar;
        $laporan->save();
        return redirect()->route('verifikasi/hasil',['id'=>$request->valid_id]);   
    }
}
