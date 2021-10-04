<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class GantiProfil extends Controller
{
    public function index(){
        return view("gantiprofil",[
            'user'=>User::find(auth()->user()->id)
        ]);
    }
    public function update(Request $request){
        $user = User::find(auth()->user()->id);
        $user->name = $request->name;
        if ($request->level) {
            $user->level = $request->level;
        }
        $user->area = $request->area;
        $user->email = $request->email;
        $user->status=$request->status;
        $user->save();
        return redirect()->route('profil');
    }
}
