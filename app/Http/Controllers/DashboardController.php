<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function admin(){
        if(Auth::check()){
            return view('dashboard.admin');
        }

        return redirect()->route('auth.login')->withErrors([
            'notif' => 'Login Dulu sebelum akses Dashboard',
        ]);
    }

    public function petugas(){
        if(Auth::check()){
            return view('dashboard.petugas');
        }

        return redirect()->route('auth.login')->withErrors([
            'notif' => 'Login Dulu sebelum akses Dashboard',
        ]);
    }

    public function siswa(){
        if(Auth::check()){
            return view('dashboard.siswa');
        }

        return redirect()->route('auth.login')->withErrors([
            'notif' => 'Login Dulu sebelum akses Dashboard',
        ]);
    }
}
