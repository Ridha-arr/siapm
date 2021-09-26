<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\Models\User;
class LoginApi extends Controller
{
   
    public function login(Request $request)
    {
        $rules = [
            'email'                 => 'required|string',
            'password'              => 'required|string'
        ];
        $messages = [
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'password.required'     => 'Password wajib diisi',
            'password.string'       => 'Password harus berupa string'
        ];

        $data = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
        ];

        Auth::attempt($data);

        if (Auth::check()) { 
            return response()->json([
                'success'=>true,
                'level' =>auth()->user()->level,
                'area'=>auth()->user()->area
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' =>'Akun Tidak Ditemukan'
            ]);
        }
    }
}
