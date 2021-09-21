<?php

namespace App\Http\Controllers;

use App\Models\Laporan as ModelsLaporan;
use App\Models\Tanggals;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Laporan extends Controller
{
    public function getAllLaporan(){
      $date = collect();
    $data = collect();

      $laporans = ModelsLaporan::select(DB::raw("*"), DB::raw("DATE_FORMAT(date, '%Y') year"), DB::raw("DATE_FORMAT(date, '%m') months"),  DB::raw('MONTHNAME(date) month'))->get()->groupBy(['year','months']);
      
      return response()->json($laporans,200);
    }
    public function getArea($tanggal){
     
    }
    public function getAreaLaporan(){
      return response()->json(ModelsLaporan::select(DB::raw('count(id) as upload'), DB::raw('count(verif) as verification'), DB::raw('YEAR(created_at) year, MONTH(created_at) month,dokumen'))->with('user')->groupby('year','month','dokumen')->get());
    }
}
