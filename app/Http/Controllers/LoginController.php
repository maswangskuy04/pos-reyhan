<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function actionLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $aksi = $request->only(['email', 'password']);

        if(Auth::attempt($aksi)) {
            Session::flash('message', 'Berhasil login!');
            return redirect()->intended('dashboard');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        Auth::logout();
        Session::flash('message', 'Berhasil Keluar');
        return redirect()->route('login');
    }

    public function actionRegister(Request $request)
    {
        // dd($request->all());
        // $request->validate([
        //     'nama_lengkap' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required|password|min:8'
        // ]);

        User::create([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Session::flash('message', 'Registrasi Berhasil. Silahkan login untuk masuk ke halaman Dashboard');

        return  redirect()->route('login');
    }
}
