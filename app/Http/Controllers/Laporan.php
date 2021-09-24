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
      'file' => 'required|mimes:doc,docx,pdf,txt|max:5048',
      'area' => 'required',
      'tipe' => 'required',
    ]);
   

    if ($validator->fails()) {
      return response()->json(['error' => $validator->errors()], 401);
    }  
      if ($files = $request->file('file')) {

        $file = $request->file->store('public/pengadilan_negri/'.date('Y').'/'.date('m').'/'.date('d').'/'.'.'.$request->area.'/'.$request->tipe.'/'.$request->user.'/');

        $document = new ModelsLaporan();
        $document->dokumen = $file;
        $document->user_id = $request->user_id;
        $document->save();

        return response()->json([
          "success" => true,
          "message" => "Berhasil Diupload",
          "file" => $file
        ]);
      }
  }
}
