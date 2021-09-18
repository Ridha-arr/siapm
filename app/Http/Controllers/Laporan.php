<?php

namespace App\Http\Controllers;

use App\Models\Laporan as ModelsLaporan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Laporan extends Controller
{
    public function getAllLaporan(){
      $data = collect();
      $laporans = ModelsLaporan::all()
    ->groupBy([function ($val) {
      return Carbon::parse($val->created_at)->format('Y-m');},
      function ($val) { return $val->user['area']; },
      function ($val) { return $val->tipe; },
    ]);
     
      return response()->json(['data' => $laporans],200);
    }
    public function getDateLaporan(){
      return response()->json(ModelsLaporan::select(DB::raw('count(id) as upload'), DB::raw('count(verif) as verification'), DB::raw('YEAR(created_at) year, MONTH(created_at) month,dokumen'))->groupby('year','month','dokumen')->get());
    }
    public function getAreaLaporan(){
      return response()->json(ModelsLaporan::select(DB::raw('count(id) as upload'), DB::raw('count(verif) as verification'), DB::raw('YEAR(created_at) year, MONTH(created_at) month,dokumen'))->with('user')->groupby('year','month','dokumen')->get());
    }
}
