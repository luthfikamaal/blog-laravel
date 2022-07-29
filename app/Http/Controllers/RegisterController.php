<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => 'Register'
        ]);
    }
    public function store(Request $request){
        // return $request;
        $validasiData = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'unique:users'],
            'password' => ['required','min:8']
        ]);
        $validasiData['password'] = Hash::make($request->password);
        // return $validasiData;
        User::create($validasiData);
        return redirect('/login')->with('successRegister', 'Pendaftaran berhasil. Silakan login');
    }
}