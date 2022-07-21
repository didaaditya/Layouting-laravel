<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\SiswaController;
use App\Http\controllers\BarangController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route Siswa
route::resource('siswa',SiswaController::class);

//route Barang
route::resource('barang',BarangController::class);

route::get('test-template',function(){
    return view('layouts.admin');
});
