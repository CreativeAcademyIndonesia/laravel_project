<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <!-- Menampilkan pesan sukses jika ada -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Menampilkan pesan error jika ada -->
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <h2>List Product</h2>
        <hr>
        <!-- Tombol untuk membuat produk baru -->
        <a href="{{ URL('produk/create') }}" class="btn btn-primary mb-3">Create Product</a>
        <!-- Tabel untuk menampilkan daftar produk -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Menampilkan data produk dari loop -->
                @forelse ($product as $data)
                    <tr>
                        <!-- Kolom ID produk -->
                        <td>{{ $data->id }}</td>
                        <!-- Kolom Nama Product -->
                        <td>{{ $data->product }}</td>
                        <!-- Kolom Harga Product -->
                        <td>{{ $data->price }}</td>
                        <!-- Kolom Stok Product -->
                        <td>{{ $data->stock }}</td>
                        <!-- Tombol untuk mengedit atau menghapus produk -->
                        <td>
                            <!-- Tombol Edit -->
                            <a href="{{ URL('produk/' . $data->id . '/edit') }}" class="btn btn-warning btn-sm" onclick="return confirm('Apakah kamu yakin untuk memperbaharui produk ini?');">Edit</a>
                            <!-- Form untuk menghapus produk -->
                            <form action="{{ URL('produk/' . $data->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Apakah kamu yakin untuk menghapus produk ini?');">
                                @csrf
                                @method('DELETE')
                                <!-- Tombol Hapus -->
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <!-- Pesan jika tidak ada produk -->
                    <tr>
                        <td colspan="5">List Product Empty</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
