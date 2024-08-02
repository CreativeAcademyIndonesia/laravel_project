<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        $pageInfo = [
            'pageTitle' => 'Master User',
            'content' => 'Ini adalah halaman Master User.',
            'status' => 'aktif'
        ];
        

        $users = [
            ['id' => 1, 'name' => 'Agus Sugandi', 'email' => 'agus.sugandi95@gmail.com', 'phone' => '08814539925', 'address' => 'Majalaya'],
            ['id' => 2, 'name' => 'Budi Santoso', 'email' => 'budi.santoso@gmail.com', 'phone' => '08123456789', 'address' => 'Bandung'],
            ['id' => 3, 'name' => 'Citra Putri', 'email' => 'citra.putri@gmail.com', 'phone' => '08567891234', 'address' => 'Jakarta'],
            ['id' => 4, 'name' => 'Dharma Wijaya', 'email' => 'dharma.wijaya@gmail.com', 'phone' => '08765432100', 'address' => 'Surabaya'],
            ['id' => 5, 'name' => 'Eka Prasetya', 'email' => 'eka.prasetya@gmail.com', 'phone' => '08111223344', 'address' => 'Yogyakarta'],
            ['id' => 6, 'name' => 'Fani Rahayu', 'email' => 'fani.rahayu@gmail.com', 'phone' => '08987654321', 'address' => 'Semarang'],
            ['id' => 7, 'name' => 'Galih Kusuma', 'email' => 'galih.kusuma@gmail.com', 'phone' => '08771234567', 'address' => 'Denpasar'],
            ['id' => 8, 'name' => 'Hani Putra', 'email' => 'hani.putra@gmail.com', 'phone' => '08234567890', 'address' => 'Medan'],
            ['id' => 9, 'name' => 'Indra Gunawan', 'email' => 'indra.gunawan@gmail.com', 'phone' => '08123456789', 'address' => 'Padang'],
            ['id' => 10, 'name' => 'Joko Widodo', 'email' => 'joko.widodo@gmail.com', 'phone' => '08888888888', 'address' => 'Bogor'],
        ];
        
        return view('dashboard.masterUser.index', compact('pageInfo', 'users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('users.index');
    }

    public function show($id)
    {
        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        return redirect()->route('users.index');
    }

}
