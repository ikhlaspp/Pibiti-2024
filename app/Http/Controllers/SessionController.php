<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;


class SessionController extends Controller
{
    function index()
    {
        return view('login');
    }

    function loginFunc(Request $request)
    {
        Session::flash('email', $request->input('email'));

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 1) {
                return redirect('/admin');
            } else if (Auth::user()->role == 3) {
                return redirect('/bendahara');
            } else {
                return redirect('/welcome');
            };
        } else {
            return redirect()->route('auth.login.view')->withErrors('Email atau password yang dimasukkan tidak sesuai');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login.view')->with('success', 'Berhasil logout');
    }

    function registerView()
    {
        return view('register');
    }

    function registerFunc(Request $request)
    {
        Session::flash('name', $request->input('name'));
        Session::flash('sekolah', $request->input('sekolah'));
        Session::flash('email', $request->input('email'));
        Session::flash('nomor_telepon', $request->input('nomor_telepon'));
        Session::flash('urlbukti', $request->input('urlbukti'));

        $request->validate([
            'name' => 'required',
            'sekolah' => 'required',
            'password' => 'required|min:4|confirmed',
            'nomor_telepon' => 'required|numeric|min:10',
            'email' => 'required|unique:users',
            'urlbukti' => 'required'

        ], [
            'name.required' => 'Nama wajib diisi',
            'sekolah.required' => 'Instansi wajib diisi',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minumum password 8 karakter',
            'password.confirmed' => 'Konfirmasi password berbeda dengan password',
            'nomor_telepon.required' => 'Nomor telepon wajib diisi',
            'nomor_telepon.numeric' => 'Nomor telepon tidak valid',
            'nomor_telepon.min' => 'Nomor telepon minimal memiliki 10 angka',
            'email.unique' => 'Email yang anda pakai sudah di gunakan',
            'email.required' => 'Email wajib di isi',
            'urlbukti.required' => 'Wajib menggunakan link gdrive'

        ]);

        $data = [
            'name' => $request->name,
            'sekolah' => $request->sekolah,
            'password' => Hash::make($request->password),
            'nomor_telepon' => $request->nomor_telepon,
            'email' => $request->email,
            'role' => 0,
            'urlbukti' => $request->urlbukti,
            'kelompok' => ''
        ];
        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            return redirect('/welcome');
        } else {
            return redirect()->route('auth.register.view')->withErrors('Email atau password yang dimasukkan tidak sesuai');
        }

        // return redirect('auth')->with("success", "TELAH BERHASIL REGISTER TUNGGU UNTUK DI VERIFIKASI ADMIN");


    }

    public function ForgotPassword(Request $request)
    {
        // 
    }
}
