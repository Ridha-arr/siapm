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
    public function uploadLaporan(Request $request){
    $validator = $request->validate([
      'user_id' => 'required',
      'file' => 'required',
      'area' => 'required',
      'tipe' => 'required',
    ]);
   

        $document = new ModelsLaporan();
        $document->dokumen = $request->file;
        $document->user_id = $request->user_id;
        $document->save();

        return response()->json([
          "success" => true,
          "message" => "Berhasil Diupload",
          "file" => $request->file
        ]);
  }
}
