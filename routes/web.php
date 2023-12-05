<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\TransaksiController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
    return view('index');
});


Route::get('login', function () {
    return view('login');
});

Route::get('/', [KasirController::class, 'index']);
Route::post('/', [KasirController::class, 'authenticate']);

//barang
Route::get('/barang', [BarangController::class, 'index']);
Route::get('/tambah', [BarangController::class, 'tambah']);
Route::post('/tambah', [BarangController::class, 'insert']);
Route::get('/edit/{id}', [BarangController::class,'edit']);
Route::post('/edit/{id}/update', [BarangController::class,'update']);
Route::get('/hapus/{id}', [BarangController::class,'destroy']);

//transaksi

Route::middleware(['auth:web'])->group(function (){
Route::get('/transaksi', [TransaksiController::class, 'index']);
        Route::get('/tambahtrans', [TransaksiController::class, 'create']);
        Route::post('/tambahtrans', [TransaksiController::class, 'store']);
        Route::get('/hapus/{id}', [BarangController::class,'destroy']);
    });