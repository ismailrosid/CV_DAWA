<?php

use Illuminate\Support\Facades\Route;
// 
use App\Http\Controllers\FrontPage\BerandaController;
use App\Http\Controllers\FrontPage\TentangKamiController;
use App\Http\Controllers\FrontPage\ShopController;
use App\Http\Controllers\FrontPage\TumbuhanController;
use App\Http\Controllers\FrontPage\HerbalController;
use App\Http\Controllers\PDFController;

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
Route::get('/', [BerandaController::class, 'index'])->name('/');;

Route::get('/tentang-kami', [TentangKamiController::class, 'index'])->name('tentang_kami.index');

Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/product/{id}', [ShopController::class, 'show'])->name('product.Show');

Route::get('/tumbuhan', [TumbuhanController::class, 'index'])->name('tumbuhan.index');


Route::get('/herbal', [HerbalController::class, 'index'])->name('herbal.index');

Route::get('/tumbuhan/{id}', [TumbuhanController::class, 'show'])->name('tumbuhan.show');


Route::get('/generate-pdf', [PDFController::class, 'generatePDF']);
