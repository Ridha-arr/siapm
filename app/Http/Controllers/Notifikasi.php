<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Valid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class Notifikasi extends Controller
{
    public function index(){
        return view('notifikasi',[
            'valids' => Valid::select('area')->groupBy('area')->orderBy('id', 'ASC')->get()
        ]);
    }
    public static function getTotal($area)
    {
        $total = Valid::where('area', $area)->sum('ketentuan');
        return $total;
    }
    public static function getDetail($area)
    {
        $detail = Laporan::whereHas('user', function ($valid) use ($area) {
            $valid->where('area', $area);
        })->whereYear('date', '=', Date('Y'))->whereMonth('date', '=', Date('m'))->get()->count();
        return $detail;
    }
    public static function getVerif($area)
    {
        $detail = Laporan::whereHas('user', function ($valid) use ($area) {
            $valid->where('area', $area);
        })->where('verif', 1)->whereYear('date', '=', Date('Y'))->whereMonth('date', '=', Date('m'))->get()->count();
        return $detail;
    }
}
