<?php

use Illuminate\Support\Facades\Route;
// 
use App\Http\Controllers\FrontPage\BerandaController;
use App\Http\Controllers\FrontPage\TentangKamiController;
use App\Http\Controllers\FrontPage\ShopController;
use App\Http\Controllers\FrontPage\TumbuhanController;
use App\Http\Controllers\FrontPage\TipsHerbalController;
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
Route::get('/', [BerandaController::class, 'index']);

Route::get('/tentang_kami', [TentangKamiController::class, 'index'])->name('tentang_kami.index');

Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');

Route::get('/tumbuhan', [TumbuhanController::class, 'index'])->name('tumbuhan.index');

Route::get('/tips_herbal', [TipsHerbalController::class, 'index'])->name('tips_herbal.index');

Route::get('/tumbuhan/{id}', [TumbuhanController::class, 'show'])->name('tumbuhan.show');


Route::get('/generate-pdf', [PDFController::class, 'generatePDF']);
