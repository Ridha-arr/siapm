<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Cms extends Controller
{
    public function index(){
        return view('cms',[
            'users' => User::where('id','!=',auth()->user()->id)->get()
        ]);
    }
    public function tambah(Request $request){
        User::create([
            'name' => $request->name,
            'level' => $request->level,
            'nip' => $request->nip,
            'status' => 1,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'area' =>$request->area
        ]);
        return back();
    }
    public function delete($id){
        User::find($id)->delete();
        return back();
    }
    public function edit($id){
        return view('editProfile',[
            'user' => User::find($id)
        ]);
    }
    public function update(Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        if (auth()->user()->level == 'admin') {
            if ($request->level) {
                $user->level = $request->level;
            }
            $user->area = $request->area;
            $user->status = $request->status;
            $user->email = $request->nip;
        }
        $user->email = $request->email;
        $user->save();
        return redirect()->route('cms');
    }
}   
