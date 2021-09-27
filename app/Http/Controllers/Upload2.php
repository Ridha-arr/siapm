<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Valid;
use Illuminate\Http\Request;

class Upload2 extends Controller
{
    public function index(Request $request){
        $area = $request->area;
        $bulan = $request->bulan;
        $laporans = Valid::with('keterangan')->get();
        return view("upload2",[
            'laporans'=> $laporans
        ]);
    }
    public function postUpload(Request $request){
        $fileName = $request->file->store('public/pengadilan_negri/'.date('Y').'/'.date('m').'/'.auth()->user()->area.'/'.$request->tipe);
        $oriName = $request->file->getClientOriginalName();
        Laporan::create([
            'user_id'=>auth()->user()->id,
            'dokumen'=>$fileName,
            'name'=>$oriName,
            'verif'=>0,
            'keterangan_id'=>$request->keterangan
        ]);
        return back();
    }
}
