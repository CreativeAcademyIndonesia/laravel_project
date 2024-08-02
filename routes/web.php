<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\dashboard\userController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcomeController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [welcomeController::class, 'index'])->name('home');
Route::post('/checkout', [welcomeController::class, 'checkout'])->name('checkout');
Route::get('/login', [registerController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [registerController::class, 'register'])->name('register');
Route::post('/register-create', [registerController::class, 'create'])->name('register.create');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/add-user', [DashboardController::class, 'add_user'])->name('dashboard.add.user');
        Route::put('/update-user', [DashboardController::class, 'edit_user'])->name('dashboard.update.user');
        Route::delete('/delete-user', [DashboardController::class, 'delete_user'])->name('dashboard.delete.user');

        Route::post('/add-category', [DashboardController::class, 'add_category'])->name('dashboard.add.category');
        Route::put('/update-category', [DashboardController::class, 'edit_category'])->name('dashboard.update.category');
        Route::delete('/delete-category', [DashboardController::class, 'delete_category'])->name('dashboard.delete.category');

        Route::post('/add-product', [DashboardController::class, 'add_product'])->name('dashboard.add.product');
        Route::put('/update-product', [DashboardController::class, 'edit_product'])->name('dashboard.update.product');
        Route::delete('/delete-product', [DashboardController::class, 'delete_product'])->name('dashboard.delete.product');

        Route::post('/add-mahasiswa', [DashboardController::class, 'add_mahasiswa'])->name('dashboard.add.mahasiswa');
        Route::put('/update-mahasiswa', [DashboardController::class, 'edit_mahasiswa'])->name('dashboard.update.mahasiswa');
        Route::delete('/delete-mahasiswa', [DashboardController::class, 'delete_mahasiswa'])->name('dashboard.delete.mahasiswa');

        Route::post('/add-prodi', [DashboardController::class, 'add_prodi'])->name('dashboard.add.prodi');
        Route::put('/update-prodi', [DashboardController::class, 'edit_prodi'])->name('dashboard.update.prodi');
        Route::delete('/delete-prodi', [DashboardController::class, 'delete_prodi'])->name('dashboard.delete.prodi');

        Route::post('/add-dosen', [DashboardController::class, 'add_dosen'])->name('dashboard.add.dosen');
        Route::put('/update-dosen', [DashboardController::class, 'edit_dosen'])->name('dashboard.update.dosen');
        Route::delete('/delete-dosen', [DashboardController::class, 'delete_dosen'])->name('dashboard.delete.dosen');

        Route::post('/add-matkul', [DashboardController::class, 'add_matkul'])->name('dashboard.add.matkul');
        Route::put('/update-matkul', [DashboardController::class, 'edit_matkul'])->name('dashboard.update.matkul');
        Route::delete('/delete-matkul', [DashboardController::class, 'delete_matkul'])->name('dashboard.delete.matkul');


        Route::post('/add-appointment', [DashboardController::class, 'add_appointment'])->name('dashboard.add.appointment');
        Route::put('/update-appointment', [DashboardController::class, 'edit_appointment'])->name('dashboard.update.appointment');
        Route::delete('/delete-appointment', [DashboardController::class, 'delete_appointment'])->name('dashboard.delete.appointment');
    });
});

// Route::get('/blog', function () {
//     return view('blog');
// })->name('blog');

// Route::get('/about', function () {
//     $data = [
//         'pageTitle' => 'Tentang Kami',
//         'content' => 'Ini adalah halaman tentang kami.'
//     ];
//     return view('about', $data);
// })->name('about');

// Middleware Group untuk Produk:
// Route::middleware (['auth','user'])->group(function(){
//     // Rute CRUD Produk yang terproteksi oleh middleware 'auth' dan 'user'
//     Route::resource('produk', ProdukController::class);
// });
// Rute Home dengan Middleware 'role:user':
// Route::get('/home',[App\Http\controllers\HomeController::class,'index'])->name('home')->middleware('role:user');
//Route::resource (Autorisasi bisa di route atau di dalam controller)

// Route::get('/user/{id}', 'UserController@show');

// // Experiment
// Route::get('/tailwind', function () {
//     $data = [
//         'pageTitle' => 'Tentang Kami',
//         'content' => 'Ini adalah halaman tentang kami.'
//     ];
//     return view('Tailwind', $data);
// });


// Route::prefix('dashboard')->group(function () {
//     Route::get('/users', [masterUserController::class, 'index']);
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/user', [UserController::class, 'index'])->name('user.index');
// Route::get('/user/tambah_user', [UserController::class, 'tambah'])->name('user.tambah');
// Route::post('/user/simpan_user', [UserController::class, 'simpan'])->name('user.simpan');
// Route::get('/user/ubah_user/{id}', [UserController::class, 'ubah'])->name('user.ubah');
// Route::post('/user/update_user/{id}', [UserController::class, 'update'])->name('user.update');

// Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
// Route::get('/produk/tambah_produk', [ProdukController::class, 'tambah'])->name('produk.tambah');
// Route::post('/produk/simpan_produk', [ProdukController::class, 'simpan'])->name('produk.simpan');
// Route::get('/produk/ubah_produk/{id}', [ProdukController::class, 'ubah'])->name('produk.ubah');
// Route::post('/produk/update_produk/{id}', [ProdukController::class, 'update'])->name('produk.update');
