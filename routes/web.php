<?php
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', function () {
    return view('product');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/gallery', function () {
    return view('galery');
});
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/about', function () {
    return view('about-us');
});

Route::get('/galeri', function () {
    return view('admin.galeri');
});

Route::get('/produk', function () {
    return view('admin.produk');
});

Route::get('/kontak', function () {
    return view('admin.kontak');
});

Route::resource('users', UserController::class);
Route::get('/transaksi', [TransaksiController::class, 'create']);
Route::resource('transaksi', TransaksiController::class);
Route::get('/transaksi/cetak_pdf', [TransaksiController::class, 'cetak_pdf'])->name('transaksi.cetak_pdf');
Route::resource('produk', ProdukController::class);
//Route::get('/transaksi/cetak_pdf/{id}',[TransaksiController::class,'cetak_pdf'])->name('transaksi.cetak_pdf');
Route::resource('comment', CommentController::class);
Auth::routes();
Route::middleware(['web'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
    Route::get('/user', [App\Http\Controllers\HomeController::class, 'user'])->name('user');
});


// Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('user');
// Route::get('/users/detail{id}', [App\Http\Controllers\UserController::class, 'show'])->name('detail');
// Route::put('/users/edit{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('edit');
// Route::put('/users/update{id}', [App\Http\Controllers\UserController::class, 'update'])->name('update');
// Route::delete('/delete{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('user');