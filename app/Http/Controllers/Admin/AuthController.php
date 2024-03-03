<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.admin.auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $remember = $request->remember ? true : false;

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            // fn (Builder $query) => $query->whereHas('roles', function (Builder $query) {
            //     $query->whereIn('name', ['admin', 'super admin']);
            // })
        ];

        if (auth()->attempt($credentials, $remember)) {
            $request->session()->regenerate();

            $user = auth()->user();
            $message = 'Halo ' . $user->name . ', Selamat datang di Dashboard Admin!';
            $route = route('admin.dashboard');

            return redirect()->intended($route)->with('success', $message);
        }

        return back()->withErrors([
            'email' => 'Email atau Password Yang Anda Masukan Salah!',
        ])->withInput();
    }

    public function logout()
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
