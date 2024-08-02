<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Category;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Models\Prodi;
use App\Models\Product;
use App\Models\Transaksi;
use App\Models\TransaksiItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    public function index()
    {

        $data = [
            'pageTitle' => 'Tentang Kami',
            'content' => 'Ini adalah halaman tentang kami.'
        ];


        $appointment = Appointment::all();
        $mahasiswa = Mahasiswa::all();
        $dosen = Dosen::all();
        $prodi = Prodi::all();
        $matakuliah = Matakuliah::all();
        return view('dashboard.index', compact('mahasiswa', 'dosen', 'prodi', 'matakuliah', 'appointment'));
    }

    // User
    public function add_user(request $request)
    {
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
            'password' => '$2y$12$.xhztb7ZelgrS2uneu.r5eap0Hc3QDBbkj9z1/UGSFHzot9HwQcyW',
        ]);

        return redirect()->route('dashboard')->with('success', 'Data User berhasil disimpan.');
    }

    public function edit_user(request $request)
    {
        $user = User::find($request->input('id'));
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->save();
        return redirect()->route('dashboard')->with('success', 'Data User berhasil diperbarui.');
    }

    public function delete_user(request $request)
    {
        $user = User::find($request->input('id'));
        if ($user) {
            $user->delete();
            return redirect()->route('dashboard')->with('success', 'Data user berhasil dihapus.');
        } else {
            return redirect()->route('dashboard')->with('error', 'Data user tidak ditemukan.');
        }
    }

    // Category 
    public function add_category(request $request)
    {
        Category::create([
            'category' => $request->input('category'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('dashboard')->with('success', 'Data Category berhasil disimpan.');
    }

    public function edit_category(request $request)
    {
        $category = Category::find($request->input('id'));
        $category->category = $request->input('category');
        $category->status = $request->input('status');
        $category->save();
        return redirect()->route('dashboard')->with('success', 'Data Category berhasil diperbarui.');
    }

    public function delete_category(request $request)
    {
        $category = Category::find($request->input('id'));
        if ($category) {
            $category->delete();
            return redirect()->route('dashboard')->with('success', 'Data Category berhasil dihapus.');
        } else {
            return redirect()->route('dashboard')->with('error', 'Data Category tidak ditemukan.');
        }
    }

    // Product 
    public function add_product(request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:png,jpg,jpeg,svg|max:7000',
        ]);

        $imageName = time() . '.' . $request->foto->extension(); // Fix here
        $request->foto->storeAs('images', $imageName); // Fix here

        Product::create([
            'category' => $request->input('category'),
            'type_kamar' => $request->input('type_kamar'),
            'ac' => $request->input('ac'),
            'kamar_mandi' => $request->input('kamar_mandi'),
            'kamar_tidur' => $request->input('kamar_tidur'),
            'furniture' => $request->input('furniture'),
            'harga' => $request->input('harga'),
            'stock' => $request->input('stock'),
            'foto' => $imageName,
        ]);

        return redirect()->route('dashboard')->with('success', 'Data Product berhasil disimpan.');
    }

    public function edit_product(request $request)
    {
        $product = Product::find($request->input('id'));

        $product->category = $request->input('category');
        $product->type_kamar = $request->input('type_kamar');
        $product->ac = $request->input('ac');
        $product->kamar_mandi = $request->input('kamar_mandi');
        $product->kamar_tidur = $request->input('kamar_tidur');
        $product->furniture = $request->input('furniture');
        $product->harga = $request->input('harga');
        $product->stock = $request->input('stock');

        if ($request->hasFile('foto')) {
            $request->validate([
                'foto' => 'image|mimes:png,jpg,jpeg,svg|max:7000',
            ]);

            $imageName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('images', $imageName);

            $product->foto = $imageName;
        }

        $product->save();
        return redirect()->route('dashboard')->with('success', 'Data Product berhasil diperbarui.');
    }

    public function delete_product(request $request)
    {
        $product = Product::find($request->input('id'));
        if ($product) {
            $product->delete();
            return redirect()->route('dashboard')->with('success', 'Data Product berhasil dihapus.');
        } else {
            return redirect()->route('dashboard')->with('error', 'Data Product tidak ditemukan.');
        }
    }

    // ======================
    // Mahasiswa
    public function add_mahasiswa(request $request)
    {
        Mahasiswa::create([
            'nik' => $request->input('nik'),
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'prodi' => $request->input('prodi'),
            'jenjang' => $request->input('jenjang'),
            'semester' => $request->input('semester'),
            'gender' => $request->input('gender'),
            'no_hp' => $request->input('no_hp'),
        ]);

        return redirect()->route('dashboard')->with('success', 'Data Mahasiswa berhasil disimpan.');
    }

    public function edit_mahasiswa(request $request)
    {
        $mahasiswa = Mahasiswa::find($request->input('id'));
        $mahasiswa->nama = $request->input('nama');
        $mahasiswa->email = $request->input('email');
        $mahasiswa->prodi = $request->input('prodi');
        $mahasiswa->jenjang = $request->input('jenjang');
        $mahasiswa->semester = $request->input('semester');
        $mahasiswa->gender = $request->input('gender');
        $mahasiswa->no_hp = $request->input('no_hp');
        $mahasiswa->save();
        return redirect()->route('dashboard')->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    public function delete_mahasiswa(request $request)
    {
        $mahasiswa = Mahasiswa::find($request->input('id'));
        if ($mahasiswa) {
            $mahasiswa->delete();
            return redirect()->route('dashboard')->with('success', 'Data mahasiswa berhasil dihapus.');
        } else {
            return redirect()->route('dashboard')->with('error', 'Data mahasiswa tidak ditemukan.');
        }
    }

    // Prodi
    public function add_prodi(request $request)
    {
        Prodi::create([
            'kode_prodi' => $request->input('kode_prodi'),
            'nama_prodi' => $request->input('nama_prodi')
        ]);

        return redirect()->route('dashboard')->with('success', 'Data Prodi berhasil disimpan.');
    }

    public function edit_prodi(request $request)
    {
        $prodi = Prodi::find($request->input('id'));
        $prodi->kode_prodi = $request->input('kode_prodi');
        $prodi->nama_prodi = $request->input('nama_prodi');
        $prodi->save();
        return redirect()->route('dashboard')->with('success', 'Data prodi berhasil diperbarui.');
    }

    public function delete_prodi(request $request)
    {
        $prodi = Prodi::find($request->input('id'));
        if ($prodi) {
            $prodi->delete();
            return redirect()->route('dashboard')->with('success', 'Data prodi berhasil dihapus.');
        } else {
            return redirect()->route('dashboard')->with('error', 'Data prodi tidak ditemukan.');
        }
    }

    // Matakuliah 
    public function add_matkul(request $request)
    {
        Matakuliah::create([
            'kode_matkul' => $request->input('kode_matkul'),
            'nama_matkul' => $request->input('nama_matkul')
        ]);

        return redirect()->route('dashboard')->with('success', 'Data Matakuliah berhasil disimpan.');
    }

    public function edit_matkul(request $request)
    {
        $matakuliah = Matakuliah::find($request->input('id'));
        $matakuliah->kode_matkul = $request->input('kode_matkul');
        $matakuliah->nama_matkul = $request->input('nama_matkul');
        $matakuliah->save();
        return redirect()->route('dashboard')->with('success', 'Data Matakuliah berhasil diperbarui.');
    }

    public function delete_matkul(request $request)
    {
        $matakuliah = Matakuliah::find($request->input('id'));
        if ($matakuliah) {
            $matakuliah->delete();
            return redirect()->route('dashboard')->with('success', 'Data Matakuliah berhasil dihapus.');
        } else {
            return redirect()->route('dashboard')->with('error', 'Data Matakuliah tidak ditemukan.');
        }
    }

    // Dosen 
    public function add_dosen(request $request)
    {
        Dosen::create([
            'nip' => $request->input('nip'),
            'nama' => $request->input('nama'),
            'no_hp' => $request->input('no_hp')
        ]);

        return redirect()->route('dashboard')->with('success', 'Data Dosen berhasil disimpan.');
    }

    public function edit_dosen(request $request)
    {
        $dosen = Dosen::find($request->input('id'));
        $dosen->nip = $request->input('nip');
        $dosen->nama = $request->input('nama');
        $dosen->no_hp = $request->input('no_hp');
        $dosen->save();
        return redirect()->route('dashboard')->with('success', 'Data Dosen berhasil diperbarui.');
    }

    public function delete_dosen(request $request)
    {
        $dosen = Dosen::find($request->input('id'));
        if ($dosen) {
            $dosen->delete();
            return redirect()->route('dashboard')->with('success', 'Data Dosen berhasil dihapus.');
        } else {
            return redirect()->route('dashboard')->with('error', 'Data Dosen tidak ditemukan.');
        }
    }


    // Appointment 
    public function add_appointment(request $request)
    {
        Appointment::create([
            'mahasiswa' => $request->input('mahasiswa'),
            'dosen' => $request->input('dosen'),
            'tanggal' => $request->input('tanggal')
        ]);

        return redirect()->route('dashboard')->with('success', 'Data Appointment berhasil disimpan.');
    }

    public function edit_appointment(request $request)
    {
        $appointment = Appointment::find($request->input('id'));
        $appointment->mahasiswa = $request->input('mahasiswa');
        $appointment->dosen = $request->input('dosen');
        $appointment->tanggal = $request->input('tanggal');
        $appointment->save();
        return redirect()->route('dashboard')->with('success', 'Data Appointment berhasil diperbarui.');
    }

    public function delete_appointment(request $request)
    {
        $appointment = Appointment::find($request->input('id'));
        if ($appointment) {
            $appointment->delete();
            return redirect()->route('dashboard')->with('success', 'Data Appointment berhasil dihapus.');
        } else {
            return redirect()->route('dashboard')->with('error', 'Data Appointment tidak ditemukan.');
        }
    }
}
