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
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\TipsHerbalController;
use App\Http\Controllers\Admin\AuthController;

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
    Route::get('produk/{id}', [FrontShopController::class, 'show'])->name('produk.show');
});

// Kelompokkan rute untuk Tumbuhan
Route::prefix('tumbuhan')->name('tumbuhan.')->group(function () {
    Route::get('/', [FrontTumbuhanController::class, 'index'])->name('index');
    Route::get('daftar_pustaka', [FrontTumbuhanController::class, 'daf_pus'])->name('daftar_pustaka');
    Route::get('{id}', [FrontTumbuhanController::class, 'show'])->name('show');
});

// Herbal
Route::prefix('informasi')->name('informasi.')->group(function () {
    Route::get('/', [FrontInformasiController::class, 'index'])->name('index');
    Route::get('{id}', [FrontInformasiController::class, 'show'])->name('show');
});


// Fathnership
Route::get('fathnership', [FathnershipController::class, 'index'])->name('fathnership');

// Generate PDF (uncomment if needed)
// Route::get('generate-pdf', [PDFController::class, 'generatePDF'])->name('pdf.generate');

// Grouping routes untuk Admin
Route::prefix('admin')->name('admin.')->group(function () {

    // Route untuk halaman login
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('login', [AuthController::class, 'auth'])->name('login.auth');

    // Route untuk logout
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    // Halaman Dashboard dan CRUD hanya dapat diakses oleh yang sudah login
    Route::middleware('auth')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // CRUD untuk Shop
        Route::prefix('produk')->name('produk.')->group(function () {
            Route::get('/', [ProdukController::class, 'index'])->name('index');
            Route::get('create', [ProdukController::class, 'create'])->name('create');
            Route::post('/', [ProdukController::class, 'store'])->name('store');
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
            Route::get('edit/{id}', [AdminTumbuhanController::class, 'edit'])->name('edit');
            Route::put('{id}', [AdminTumbuhanController::class, 'update'])->name('update');
            Route::delete('{id}', [AdminTumbuhanController::class, 'destroy'])->name('destroy');
            Route::get('data', [AdminTumbuhanController::class, 'getData'])->name('data');
        });

        // CRUD untuk Artikel
        Route::prefix('artikel')->name('artikel.')->group(function () {
            Route::get('/', [ArtikelController::class, 'index'])->name('index');
            Route::get('create', [ArtikelController::class, 'create'])->name('create');
            Route::post('/', [ArtikelController::class, 'store'])->name('store');
            Route::get('edit/{id}', [ArtikelController::class, 'edit'])->name('edit');
            Route::put('{id}', [ArtikelController::class, 'update'])->name('update');
            Route::delete('{id}', [ArtikelController::class, 'destroy'])->name('destroy');
            Route::get('data', [ArtikelController::class, 'getData'])->name('data');
        });

        // CRUD untuk Tips Herbal
        Route::prefix('tips-herbal')->name('tips-herbal.')->group(function () {
            Route::get('/', [TipsHerbalController::class, 'index'])->name('index');
            Route::get('create', [TipsHerbalController::class, 'create'])->name('create');
            Route::post('/', [TipsHerbalController::class, 'store'])->name('store');
            Route::get('edit/{id}', [TipsHerbalController::class, 'edit'])->name('edit');
            Route::put('{id}', [TipsHerbalController::class, 'update'])->name('update');
            Route::delete('{id}', [TipsHerbalController::class, 'destroy'])->name('destroy');
            Route::get('data', [TipsHerbalController::class, 'getData'])->name('data');
        });
    });
});
