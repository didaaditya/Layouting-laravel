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


//route untuk backend atau admin
route::group(['prefix' =>'admin','minddleware'=>['auth']],function(){
    route::get('/',function(){
        return view('admin.index');
});
//route siswa    
    route::resource('siswa',SiswaController::class);
//route barang
    route::resource('barang',BarangController::class);
});
