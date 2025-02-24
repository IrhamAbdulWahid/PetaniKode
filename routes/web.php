<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('produk.index');

Route::get('/', [ProdukController::class, 'index'])->name('produk.index');
});