<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontPage\BerandaController;
use App\Http\Controllers\FrontPage\TentangKamiController;
use App\Http\Controllers\FrontPage\ShopController;
use App\Http\Controllers\FrontPage\TumbuhanController;
use App\Http\Controllers\FrontPage\HerbalController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\FrontPage\FathnershipController;

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

// Arahkan root ke BerandaController
Route::get('/', [BerandaController::class, 'index'])->name('/');

// Route untuk halaman Tentang Kami
Route::get('/tentang-kami', [TentangKamiController::class, 'index'])->name('tentang_kami.index');

// Route untuk halaman Shop
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/product/{id}', [ShopController::class, 'show'])->name('product.Show');

// Route untuk halaman Tumbuhan
Route::get('/tumbuhan', [TumbuhanController::class, 'index'])->name('tumbuhan.index');

// Route khusus untuk daftar pustaka pada halaman Tumbuhan
Route::get('/tumbuhan/daftar_pustaka', [TumbuhanController::class, 'daf_pus'])->name('tumbuhan.daftar_pustaka');

// Route dinamis untuk halaman detail Tumbuhan
Route::get('/tumbuhan/{id}', [TumbuhanController::class, 'show'])->name('tumbuhan.show');

// Route untuk halaman Herbal
Route::get('/herbal', [HerbalController::class, 'index'])->name('herbal.index');

// Route untuk halaman Fathnership
Route::get('/fathnership', [FathnershipController::class, 'index'])->name('fathnership.index');

// Route untuk generate PDF
Route::get('/generate-pdf', [PDFController::class, 'generatePDF'])->name('pdf.generate');
