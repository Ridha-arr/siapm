<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Valid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Upload2 extends Controller
{
    public function index(Request $request)
    {
        $area = $request->area;
        $bulan = $request->bulan;
        $laporans = Valid::with('keterangan')->where('area', $area)->get();
        return view("upload2", [
            'laporans' => $laporans
        ]);
    }
    public function postUpload(Request $request)
    {

        $fileName = $request->file->store('public/pengadilan_negri/' . date('Y') . '/' . date('m') . '/' . auth()->user()->area . '/' . $request->tipe);
        $oriName = $request->file->getClientOriginalName();
        Laporan::create([
            'user_id' => auth()->user()->id,
            'dokumen' => $fileName,
            'name' => $oriName,
            'verif' => 0,
            'keterangan_id' => $request->keterangan
        ]);
        session()->flash('message'.$request->index, 'Berhasil Diupload');
        return back();
    }
    public function update(Request $request)
    {
        $request->validate([
            'file' => 'mimes:pdf|max:100000'
        ]);
        $laporan = Laporan::find($request->update);
        $file_path = storage_path('app/public/' . $request->file);
        if (File::exists($file_path)) File::delete($file_path);
        $fileName = $request->file->store('public/pengadilan_negri/' . date('Y') . '/' . date('m') . '/' . auth()->user()->area . '/' . $request->tipe);
        $oriName = $request->file->getClientOriginalName();
        $laporan->dokumen = $fileName;
        $laporan->name = $oriName;
        $laporan->save();
        session()->flash($request->index, 'Berhasil Diupload');
        return back();
    }
}
