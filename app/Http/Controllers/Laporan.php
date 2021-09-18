<?php

namespace App\Http\Controllers;

use App\Models\Laporan as ModelsLaporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Laporan extends Controller
{
    public function getAllLaporan(){
      return response()->json(['data' => ModelsLaporan::all()],200);
    }
    public function getDateLaporan(){
      return response()->json(ModelsLaporan::select(DB::raw('count(id) as upload'), DB::raw('count(verif) as verification'), DB::raw('YEAR(created_at) year, MONTH(created_at) month,dokumen'))->groupby('year','month','dokumen')->get());
    }
    public function getAreaLaporan(){
      return response()->json(ModelsLaporan::select(DB::raw('count(id) as upload'), DB::raw('count(verif) as verification'), DB::raw('YEAR(created_at) year, MONTH(created_at) month,dokumen'))->with('user')->groupby('year','month','dokumen')->get());
    }
}
