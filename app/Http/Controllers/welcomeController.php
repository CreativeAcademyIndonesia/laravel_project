<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Transaksi;
use App\Models\TransaksiItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class welcomeController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->intended($this->redirectTo());
        }
        // $category  = Category::all();
        // $product = Product::all();
        // $categoryFilter = '';
        // if (request()->has('category')) {
        //     // Jika iya, filter data kategori berdasarkan parameter 'category'
        //     $categoryFilter = request('category');
        //     $product = $product->where('category', $categoryFilter);
        // }


        $data = [
            'pageTitle' => 'Tentang Kami',
            'content' => 'Ini adalah halaman tentang kami.'
        ];
        return view('POS.main', compact(''));
    }

    public function checkout(Request $request)
    {
        // dd($request);
        // Validasi data input jika diperlukan
        $request->validate([
            'nama' => 'required|string',
            'qty' => 'required|array',
            'product' => 'required|array',
            'price' => 'required|array',
        ]);
        // dd($request);

        // Simpan data ke dalam tabel Transaksi
        $transaksi = Transaksi::create([
            'nama' => $request->input('nama'),
            'tanggal' => now()
        ]);

        // Simpan data ke dalam tabel TransaksiItem untuk setiap item
        for ($i = 0; $i < count($request->input('qty')); $i++) {
            TransaksiItem::create([
                'transaction_id' => $transaksi->id,
                'product' => $request->input('product')[$i],
                'qty' => $request->input('qty')[$i],
                'price' => $request->input('price')[$i],
            ]);
        }

        // Tambahkan logika redirect atau respons sesuai kebutuhan aplikasi Anda
        return redirect()->route('home')->with('success', 'Transaksi berhasil dibuat.');;
    }

    public function redirectTo()
    {
        if (!Auth::check()) {
            return '/login';
        }

        return '/'; // Default redirect if user is not authenticated or has an unrecognized role
    }
}
