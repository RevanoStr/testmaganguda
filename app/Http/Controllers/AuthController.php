<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function tampilRegistrasi() {
        return view('registrasi');
    }

    function submitRegistrasi(Request $request) {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('login.tampil');
    }

    function tampilLogin() {
        return view('login');
    }

    function submitLogin(Request $request) {
        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect('staf');
        } else{
            return redirect()->back()->with('gagal', 'Email atau pasword anda salah');
        }
    }

    function logout() {
        Auth::logout();
        return redirect()->route('login.tampil');
    }
}
