<html>
    <title>Product</title>
    <body>
        <!-- Judul Halaman -->
        <h2>List Product</h2>
        <hr>

        <!-- Menampilkan pesan kesalahan validasi jika ada -->
        @if ($errors->any())
            <ul>
                <!-- Loop melalui setiap pesan kesalahan -->
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <!-- Formulir untuk menambahkan produk baru -->
        <form action="{{ URL('produk') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Tabel untuk menyusun elemen formulir -->
            <table>
                <!-- Baris untuk Nama Product -->
                <tr>
                    <th>Product</th>
                    <td>
                        <!-- Input untuk Nama Product -->
                        <input type="text" name="product" required>
                    </td>
                </tr>

                <!-- Baris untuk Harga Product -->
                <tr>
                    <th>Price</th>
                    <td>
                        <!-- Input untuk Harga Product -->
                        <input type="number" name="price" required>
                    </td>
                </tr>

                <!-- Baris untuk Stok Product -->
                <tr>
                    <th>Stock</th>
                    <td>
                        <!-- Input untuk Stok Product -->
                        <input type="number" name="stock" required>
                    </td>
                </tr>
            </table>

            <!-- Tombol untuk menyimpan produk -->
            <button type="submit">Save</button>
        </form>
    </body>
</html>
