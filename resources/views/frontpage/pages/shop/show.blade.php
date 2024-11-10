   @extends('layouts.frontpage')

   @section('title', 'Shop Detail Produk')

   @section('content')


       <!-- Hero Section Begin -->
       <section class="hero hero-normal">
           <div class="container">
               <div class="row">
                   <div class="col-12">
                       <div class="hero__search">
                           <div class="hero__search__form">
                               <div class="hero__search__categories">
                                   Semua Kategori
                                   <span class="arrow_carrot-down"></span>
                               </div>
                               <input type="text" name="name" placeholder="Cari tumbuhan berdasarkan nama"
                                   value="{{ request('name') }}">
                               <button type="submit" class="site-btn">CARI</button>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       <!-- Hero Section End -->

       <!-- Breadcrumb Section Begin -->
       <section class="breadcrumb-section set-bg" data-setbg="{{ asset('front/img/breadcrumb.jpeg') }}">
           <div class="container">
               <div class="row">
                   <div class="col-lg-12 text-center">
                       <div class="breadcrumb__text">
                           <h2>MediPlants</h2>
                           <div class="breadcrumb__option">
                               <a href="{{ route('beranda') }}">Beranda</a>
                               <a href="{{ route('shop.index') }}">Shop</a>
                               <span>Nobesitas</span>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       <!-- Breadcrumb Section End -->

       <!-- Product Details Section Begin -->
       <section class="product-details spad">
           <div class="container">
               <div class="row d-flex align-items-center">
                   <div class="col-lg-6 col-md-6">
                       <div class="product__details__pic">
                           <div class="product__details__pic__item">
                               <img class="product__details__pic__item--large"
                                   src="{{ asset("front/img/produk/$produk->gambar") }}" alt="">
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-6 col-md-6">
                       <div class="product__details__text">
                           <h3 class="text-capitalize">{{ $produk->nama }}</h3>
                           <div class="product__details__price">Rp{{ number_format($produk->harga, 0, ',', '.') }}</div>
                           <p class="text-justify">{{ $produk->deskripsi }}</p>
                           <div class="product__details__quantity">
                               <div class="quantity">
                                   <div class="pro-qty">
                                       <input type="text" value="1">
                                   </div>
                               </div>
                           </div>
                           <a href="#" class="primary-btn">BELI SEKARANG</a>
                           <ul>
                               <li><b>Stok</b> <span>Tersedia</span></li>
                               <li><b>Bagikan </b>
                                   <div class="share">
                                       <a href="#"><i class="fab fa-facebook-f"></i></a>
                                       <a href="#"><i class="fab fa-instagram"></i></a>
                                       <a href="#"><i class="fab fa-twitter"></i></a>
                                   </div>
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
               <div class="row">
                   <div class="col-lg-12">
                       <div class="product__details__tab">
                           <ul class="nav nav-tabs" role="tablist">
                               <li class="nav-item">
                                   <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                       aria-selected="true">Informasi Produk</a>
                               </li>
                           </ul>
                           <div class="tab-content">
                               <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                   <div class="product__details__tab__desc">
                                       @if ($produk->kategori->nama === 'Herbal')
                                           <div class="my-2">
                                               <h6 class="mb-0">Tidak Disarankan Untuk:</h6>
                                               <div class="ml-4 mt-2">
                                                   <p>
                                                       @foreach ($produk->tidak_disarankan as $tidakDisarankan)
                                                           - {{ $tidakDisarankan }} <br>
                                                       @endforeach
                                                   </p>
                                               </div>
                                           </div>
                                           <div class="my-2">
                                               <h6 class="mb-0">Tidak Dikonsumsi Bersama Obat:</h6>
                                               <div class="ml-4 mt-2">
                                                   <p>
                                                       {{ $produk->tidak_dikonsumsi_bersama_obat }}
                                                   </p>
                                               </div>
                                           </div>
                                           <div class="my-2">
                                               <h6 class="mb-0">Komposisi:</h6>
                                               <div class="ml-4 mt-2">
                                                   <p>
                                                       @foreach ($result as $item)
                                                           @foreach ($item as $key => $value)
                                                               {{ $key }}: <br>
                                                               @foreach ($value as $detail)
                                                                   {{ $detail }}
                                                               @endforeach
                                                           @endforeach
                                                       @endforeach
                                                   </p>
                                               </div>
                                           </div>
                                           <div class="my-2">
                                               <h6 class="mb-0">Anjuran Pemakaian:</h6>
                                               <div class="ml-4 mt-2">
                                                   <p>
                                                       @foreach ($produk->anjuran_pemakaian as $anjuranPemakaian)
                                                           - {{ $anjuranPemakaian }} <br>
                                                       @endforeach
                                                   </p>
                                               </div>
                                           </div>
                                       @endif

                                       @if ($produk->kategori->nama === 'Lemon Tea')
                                           <div class="my-2">
                                               <h6 class="mb-0">Komposisi:</h6>
                                               <div class="mt-2">
                                                   <p>
                                                       @foreach ($produk->komposisi as $komposisi)
                                                           {{ $komposisi }} <br>
                                                       @endforeach
                                                   </p>
                                               </div>
                                           </div>
                                           <div class="my-2">
                                               <h6 class="mb-0">Netto:</h6>
                                               <div class="mt-2">
                                                   <p>
                                                       {{ $produk->netto . ' ' . strtoupper($produk->satuan) }}
                                                   </p>
                                               </div>
                                           </div>
                                       @endif

                                       @if ($produk->kategori->nama === 'Madu')
                                           <div class="my-2">
                                               <h6 class="mb-0">Netto:</h6>
                                               <div class="mt-2">
                                                   <p>
                                                       {{ $produk->netto . ' ' . strtoupper($produk->satuan) }}
                                                   </p>
                                               </div>
                                           </div>
                                       @endif

                                       @if ($produk->kategori->nama === 'Buku')
                                           <div class="my-2">
                                               <h6 class="mb-0">Hal:</h6>
                                               <div class="mt-2">
                                                   <p>
                                                       {{ $produk->jml_halaman . ' Halaman' }}
                                                   </p>
                                               </div>
                                           </div>
                                       @endif
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       <!-- Product Details Section End -->
   @endsection
