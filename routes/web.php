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

Route::get('tentang', function () {
    return "<H1>Hello</H1>"
    . "selamat datang di webapp saya"
    . "Laravel emang keren";
});

Route::get('saya', function () {
    $mamat = "mamat Abdullah";
    return view('profile', compact('mamat'));
});

Route::get('rio', function () {
    $nama = "Rio";
    $umur = "17 tahun";
    $kelamin = "Laki-laki";
    $alamat = "bandung";
    $tb = 165;
    return view('rio', compact('nama','umur','kelamin','alamat','tb'));
});

Route::get('gobang', function () {
    $nama = "Gobang";
    $umur = "17 tahun";
    $kelamin = "Laki-laki";
    $alamat = "jawa";
    $tb = 169;
    return view('gobang', compact('nama','umur','kelamin','alamat','tb'));
});

Route::get('burung', function () {
    $nama = "Burung";
    $umur = "18 tahun";
    $kelamin = "Laki-laki";
    $alamat = "cimahi";
    $tb = 172;
    return view('burung', compact('nama','umur','kelamin','alamat','tb'));
});

Route::get('abah', function () {
    $nama = "abah";
    $umur = "19 tahun";
    $kelamin = "Laki-laki";
    $alamat = "garut";
    $tb = 158;
    return view('burung', compact('nama','umur','kelamin','alamat','tb'));
});

Route::get('agus', function () {
    $nama = "agus";
    $umur = "18 tahun";
    $kelamin = "Laki-laki";
    $alamat = "cikutra";
    $tb = 165;
    return view('agus', compact('nama','umur','kelamin','alamat','tb'));
});

Route::get ('posting/{id?}', function ($a = 1) {
    return "Halaman Posting ke - <b>$a</b>";
});

Route::get ('bio/{param1?}/{param2?}/{param3?}/{param4?}/{param5?}', function ($nama = null, $alamat = null, $jk = null, $tb = null, $bb = null) {
    return view('bio', compact('nama','alamat','jk','tb','bb'));
});

