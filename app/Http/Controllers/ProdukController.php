<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    /**
     * Menampilkan daftar produk.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        // Mengambil semua produk dari database
        $product = Product::get();

        // Menampilkan halaman daftar produk
        return view('product.index', compact('product'));
    }

    /**
     * Menampilkan formulir untuk membuat produk baru.
     *
     * @return \Illuminate\View\View
     */
    public function create(){
        // Menampilkan halaman formulir tambah produk
        return view('product.create');
    }

    /**
     * Menyimpan produk baru ke database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request){
        // Validasi input menggunakan Validator
        $validator = Validator::make($request->all(), [
            'product' => 'required|min:6',
            'price' => 'required',
            'stock' => 'required',
        ], [
            'product.required' => 'Nama Product harus di isi'
        ]);

        // Jika validasi gagal, akan diarahkan kembali ke halaman sebelumnya dengan pesan error
        $validator->validate();

        // Membuat produk baru dan menyimpannya ke database
        Product::create([
            'product' => $request->product,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        // Mengarahkan ke halaman daftar produk dengan pesan sukses
        return redirect('/produk')->with('success', 'Produk berhasil ditambahkan');
    }

    /**
     * Menampilkan formulir untuk mengedit produk.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        // Mengambil data produk berdasarkan ID
        $product = Product::find($id);

        // Menampilkan halaman formulir edit produk
        return view('product.edit', compact('product'));
    }

    /**
     * Menghapus produk dari database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // Mengambil data produk berdasarkan ID
        $product = Product::find($id);

        // Jika produk tidak ditemukan, diarahkan kembali dengan pesan error
        if (!$product) {
            return redirect('/produk')->with('error', 'Produk tidak ditemukan');
        }

        // Menghapus produk dari database
        $product->delete();

        // Mengarahkan kembali ke halaman daftar produk dengan pesan sukses
        return redirect('/produk')->with('success', 'Produk berhasil dihapus');
    }

    /**
     * Memperbarui data produk di database.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, Request $request)
    {
        // Mengambil data produk berdasarkan ID
        $product = Product::find($id);

        // Mengubah data produk sesuai dengan input yang diterima
        $product->product = $request->product;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();

        // Mengarahkan kembali ke halaman daftar produk dengan pesan sukses
        return redirect('/produk')->with('success', 'Data Product Berhasil di edit');
    }
}
