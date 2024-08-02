<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    public function index()
    {
        $students = Mahasiswa::all();
        return response()->json([
            'students' => $students
        ]);
    }

    public function show($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        if (!$mahasiswa) {
            return response()->json([
                'message' => 'Mahasiswa tidak ditemukan'
            ], 404);
        }
        return response()->json(['data' => $mahasiswa]);
    }

    public function store(Request $request)
    {
        $rules = [
            "nama"      => ['required'],
            "alamat"    => ['required']
        ];

        $validated = Validator::make($request->all(),$rules);
        if($validated->fails()) {
            return response()->json([
                "status"    => 403,
                "errors"    => $validated->errors()
            ]);
        }

        $mahasiswa = Mahasiswa::create([
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
        ]);

        return response()->json([
            'message' => 'Mahasiswa berhasil dibuat',
            'student' => $mahasiswa
            ], 201);
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);

        if (!$mahasiswa) {
            return response()->json([
                'message' => 'Mahasiswa tidak ditemukan'
            ], 404);
        }

        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $mahasiswa->nama = $request->input('nama');
        $mahasiswa->alamat = $request->input('alamat');
        $mahasiswa->save();

        return response()->json([
            'message' => 'Mahasiswa berhasil diperbarui',
            'student' => $mahasiswa
        ], 200);
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);

        if (!$mahasiswa) {
            return response()->json([
                'message' => 'Mahasiswa tidak ditemukan'
            ], 404);
        }

        $mahasiswa->delete();

    return response()->json([
            'message' => 'Mahasiswa berhasil dihapus'
        ], 200);
    }


}
