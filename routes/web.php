<?php

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
Route::get('animals', function(){
    $king = "lion";
    $hewan = ["monkey", "dragonfly", "tiger", "butterfly", "crocodile"];
    return view('animals_page', compact('king', 'hewan'));
});

Route::get('vegetables', function () {
    $fruit = ["apple", "grape", "starfruit", "melon"];
    return view('vegetable_page', ['buah' => $fruit]);
});

//route parameter parameter di tandai dengan {}
Route::get('product/{name}', function($name){
    return "produk: $name";
});

// buat sebuah route dengan 3 buah parameter,
// nama, berat badan, tinggi badan
Route::get('myself/{name}/{bb}/{tb}', function ($a, $bb, $tb){
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


