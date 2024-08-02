<html>
    <title>Edit Product</title>
    <body>
        <h2>Edit Product</h2>
        <hr>

        <!-- Formulir Edit Product -->
        <form action="{{ URL('produk/' . $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Tabel untuk Menyusun Elemen Formulir -->
            <table>
                <!-- Baris untuk Edit Nama Product -->
                <tr>
                    <th>Product</th>
                    <td>
                        <!-- Input untuk Nama Product -->
                        <input type="text" name="product" value="{{ $product->product }}" required>
                    </td>
                </tr>

                <!-- Baris untuk Edit Harga Product -->
                <tr>
                    <th>Price</th>
                    <td>
                        <!-- Input untuk Harga Product -->
                        <input type="number" name="price" value="{{ $product->price }}" required>
                    </td>
                </tr>

                <!-- Baris untuk Edit Stok Product -->
                <tr>
                    <th>Stock</th>
                    <td>
                        <!-- Input untuk Stok Product -->
                        <input type="number" name="stock" value="{{ $product->stock }}" required>
                    </td>
                </tr>
            </table>

            <!-- Tombol Update untuk Mengirimkan Formulir -->
            <button type="submit">Update</button>
        </form>
    </body>
</html>
