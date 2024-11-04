<?php

use Illuminate\Support\Facades\Route;

// FrontPage Controllers
use App\Http\Controllers\FrontPage\BerandaController;
use App\Http\Controllers\FrontPage\AboutController;
use App\Http\Controllers\FrontPage\ShopController as FrontShopController;
use App\Http\Controllers\FrontPage\TumbuhanController as FrontTumbuhanController;
use App\Http\Controllers\FrontPage\InformasiController as FrontInformasiController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\FrontPage\FathnershipController;

// Admin Controllers
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\TumbuhanController as AdminTumbuhanController;
use App\Http\Controllers\Admin\InformasiController as AdminInformasiController;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. These routes are loaded by the RouteServiceProvider
| within a group which contains the "web" middleware group. Now create
| something great!
|
*/

// Route untuk homepage (beranda)
Route::get('/', [BerandaController::class, 'index'])->name('beranda');

// Routes untuk halaman depan tanpa prefix 'frontpage'

// Tentang Kami
Route::get('tentang-kami', [AboutController::class, 'index'])->name('tentang_kami');

// Kelompokkan rute untuk Shop
Route::prefix('shop')->name('shop.')->group(function () {
    Route::get('/', [FrontShopController::class, 'index'])->name('index');
    Route::get('product/{id}', [FrontShopController::class, 'show'])->name('product.show');
});

// Kelompokkan rute untuk Tumbuhan
Route::prefix('tumbuhan')->name('tumbuhan.')->group(function () {
    Route::get('/', [FrontTumbuhanController::class, 'index'])->name('index');
    Route::get('daftar_pustaka', [FrontTumbuhanController::class, 'daf_pus'])->name('daftar_pustaka');
    Route::get('{id}', [FrontTumbuhanController::class, 'show'])->name('show');
});

// Herbal
Route::get('informasi', [FrontInformasiController::class, 'index'])->name('informasi');

// Fathnership
Route::get('fathnership', [FathnershipController::class, 'index'])->name('fathnership');

// Generate PDF (uncomment if needed)
// Route::get('generate-pdf', [PDFController::class, 'generatePDF'])->name('pdf.generate');

// Grouping routes untuk Admin
Route::prefix('admin')->name('admin.')->group(function () {

    // Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // CRUD untuk Shop
    Route::prefix('produk')->name('produk.')->group(function () {
        Route::get('/', [ProdukController::class, 'index'])->name('index');
        Route::get('create', [ProdukController::class, 'create'])->name('create');
        Route::post('/', [ProdukController::class, 'store'])->name('store');
        // Route::get('{id}', [ProdukController::class, 'show'])->name('show');
        Route::get('edit/{id}', [ProdukController::class, 'edit'])->name('edit');
        Route::put('{id}', [ProdukController::class, 'update'])->name('update');
        Route::delete('{id}', [ProdukController::class, 'destroy'])->name('destroy');

        Route::get('data', [ProdukController::class, 'getData'])->name('data');
    });

    // CRUD untuk Tumbuhan
    Route::prefix('tumbuhan')->name('tumbuhan.')->group(function () {
        Route::get('/', [AdminTumbuhanController::class, 'index'])->name('index');
        Route::get('create', [AdminTumbuhanController::class, 'create'])->name('create');
        Route::post('/', [AdminTumbuhanController::class, 'store'])->name('store');
        // Route::get('{id}', [AdminTumbuhanController::class, 'show'])->name('show');
        Route::get('edit/{id}', [AdminTumbuhanController::class, 'edit'])->name('edit');
        Route::put('{id}', [AdminTumbuhanController::class, 'update'])->name('update');
        Route::delete('{id}', [AdminTumbuhanController::class, 'destroy'])->name('destroy');

        // / Rute untuk mengambil data tumbuhan
        Route::get('data', [AdminTumbuhanController::class, 'getData'])->name('data'); // Tambahan rute ini
    });

    // CRUD untuk Informasi
    Route::prefix('informasi')->name('informasi.')->group(function () {
        Route::get('/', [AdminInformasiController::class, 'index'])->name('index');
        Route::get('create', [AdminInformasiController::class, 'create'])->name('create');
        Route::post('/', [AdminInformasiController::class, 'store'])->name('store');
        Route::get('{id}', [AdminInformasiController::class, 'show'])->name('show');
        Route::get('{id}/edit', [AdminInformasiController::class, 'edit'])->name('edit');
        Route::put('{id}', [AdminInformasiController::class, 'update'])->name('update');
        Route::delete('{id}', [AdminInformasiController::class, 'destroy'])->name('destroy');
    });
});
