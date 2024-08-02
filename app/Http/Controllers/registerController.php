<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->intended($this->redirectTo());
        }
        $data = [
            'pageTitle' => 'Tentang Kami',
            'content' => 'Ini adalah halaman tentang kami.'
        ];
        return view('POS.login', $data);
    }
    public function register()
    {
        $data = [
            'pageTitle' => 'Tentang Kami',
            'content' => 'Ini adalah halaman tentang kami.'
        ];

        return view('POS.register', $data);
    }

    public function redirectTo()
    {
        if (Auth::check()) {
            $role = Auth::user()->role;

            if ($role === 'admin') {
                return '/dashboard';
            } elseif ($role === 'guest') {
                return '/';
            }
        }

        return '/'; // Default redirect if user is not authenticated or has an unrecognized role
    }

    protected function create(Request $request)
    {
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => 'mahasiswa'
        ]);
        return redirect()->route('login')->with('success', 'Register berhasil disimpan.');
    }
}
