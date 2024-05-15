<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use App\Models\Barang;
use App\Models\Merk;
use App\Models\pembelis;
use App\Models\Pengguna;
use App\Models\Post;
use App\Models\Produk;
use App\Models\Siswa;
use App\Models\Telepon;
use App\Models\Transaksi;

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

//route basic
Route::get('/about', function () {
    return '<h1>Halo</h1>'
        . 'Selamat datang di webapp saya<br>'
        . 'Laravel, emang keren.';
});

//buat route basic introduce yourself
Route::get('/about', function () {
    return '<h1>Biodata</h1>'
        . 'Nama : Nashwa Kayla<br>'
        . 'Tempat Lahir : Bandung, 29 januari 2007<br>'
        . 'Jenis Kelamin : Perempuan<br>'
        . 'Instagram : nshwkyl_<br>'
        . 'Telepon : 0895361937090<br>'
        . 'Hobi : mendengarkan musik';
});

//buat route basic to view
Route::get('animals', function () {
    $king = "lion";
    $hewan = ["monkey", "dragonfly", "tiger", "butterfly", "crocodile"];
    return view('animals_page', compact('king', 'hewan'));
});

Route::get('vegetables', function () {
    $fruit = ["apple", "grape", "starfruit", "melon"];
    return view('vegetable_page', ['buah' => $fruit]);
});

//route parameter parameter di tandai dengan {}
Route::get('product/{name}', function ($name) {
    return "produk: $name";
});

// buat sebuah route dengan 3 buah parameter,
// nama, berat badan, tinggi badan
Route::get('myself/{name}/{bb}/{tb}', function ($a, $bb, $tb) {
    $bmi = $bb / (($tb / 100) ** 2);
    if ($bmi > 30) {
        $ket = "obesitas";
    } elseif ($bmi > 25) {
        $ket = "kelebihan";
    } elseif ($bmi > 18.5) {
        $ket = "ideal";
    } elseif ($bmi > 18.5) {
        $ket = "kekurangan berat";
    }

    return "nama: $a <br> berat badan: $bb <br> tinggi badan: $tb <br> nilai bmi: $bmi <br> keterangan: $ket ";
});

//
Route::get('myname/{nama?}', function ($a = "Abdu") {
    return "my name is .$a";
});

//menampilkan data dari database
Route::get('/testmodel', function () {
    $post = Post::all();
    return view('tampil_post', compact('post'));
});

//route barang
Route::get('/testbarang', function () {
    $barang = Barang::all();
    return view('tampil_barang', compact('barang'));
});

//route siswa
Route::get('/testsiswa', function () {
    $siswa = Siswa::all();
    // $data = siswa::where('alamat', 'like', 'cibaduyut')->get();
    return view('tampil_siswa', compact('siswa'));

    // tambah data
    // $data = new Siswa;
    // $data->nama = "iki";
    // $data->jenis_kelamin = "laki_laki";
    // $data->alamat = "tci";
    // $data->agama = "islam";
    // $data->telepon = 628375;
    // $data->email = "kikidoyouloveme@gmail.com";
    // $data->save();

    return $data;
});

//route penggunan
Route::get('/testpengguna', function () {
    $pengguna = Pengguna::all();
    return view('tampil_pengguna', compact('pengguna'));
});

//route telepon
Route::get('/testtelepon', function () {
    $telepon = Telepon::all();
    return view('tampil_telepon', compact('telepon'));
});

//route merk
Route::get('/testmerk', function () {
    $merk = Merk::all();

    return view('tampil_merk', compact('merk'));
});

//route produk
Route::get('/testproduk', function () {
    $produk = Produk::all();

    return view('tampil_produk', compact('produk'));
});

//route pembeli
Route::get('/testpembeli', function () {
    $pembeli = Pembelis::all();

    return view('tampil_pembeli', compact('pembeli'));
});

//route barang2
Route::get('/testbarang2', function () {
    $barang = Barang::all();

    return view('tampil_barang', compact('barang'));
});

//route transaksi
Route::get('/testtransaksi', function () {
    $transaksi = Transaksi::all();

    return view('tampil_transaksi', compact('transaksi'));
});

// route template post
Route::get('post', [PostController::class, 'menampilkan']);
Route::get('post/{id}', [PostController::class, 'show']);

// Route::get('/template', function () {
//     $posts = Post::all();

//     return view('template', compact('posts'));
// });

//route template2 produk
Route::get('produk', [ProdukController::class, 'menampilkan']);
Route::get('produk/{id}', [ProdukController::class, 'show']);

//route template merk
Route::get('merk', [MerkController::class, 'menampilkan']);
Route::get('merk/{id}', [MerkController::class, 'show']);

// Route::get('/template2', function () {
//     $produk = Produk::all();

//     return view('template2', compact('produk'));
// });

//
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//CRUD BRAND
use Illuminate\Support\Facades\Route;
Route::resource('brand', BrandController::class);
