   @extends('layouts.frontpage')

   @section('title', 'Shop Page')

   @section('content')

       <form id="shopForm" action="{{ route('shop.index') }}" method="GET">
           <!-- Hero Section Begin -->
           <section style="margin-top: 80px;" class="hero hero-normal">
               <div class="container">
                   <div class="row">
                       <div class="col-12">
                           <div class="hero__search">
                               <div class="hero__search__form">
                                   <div class="hero__search__categories">
                                       Semua Kategori

                                   </div>
                                   <input type="text" name="name"
                                       placeholder="Cari produk, misalnya: Tomat, Apel, dll" value="{{ request('name') }}">
                                   <button type="submit" class="site__search__form d-none d-lg-block">CARI</button>
                                   <button type="submit" class="site__search__form d-lg-none">
                                       <i class="fas fa-search fs-5"></i> <!-- This is the Font Awesome search icon -->
                                   </button>
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
                                   <span>Shop</span>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           <!-- Breadcrumb Section End -->

           <!-- Product Section Begin -->
           <section class="product spad ">
               <div class="container">
                   <div class="row">
                       <div class="d-none d-lg-block col-lg-3"
                           style="position: sticky; top: 100px; height: calc(100vh - 100px); overflow-y: auto;">
                           <div class="sidebar">
                               <div class="sidebar__item">
                                   <h4 style="color: #1c1c1c; font-weight: 700;" class="p-0 mb-3">Kategori</h4>
                                   <div class="blog__sidebar__item d-flex gap-2 flex-wrap justify-content-between">
                                       <ul>
                                           <li>
                                               <a href="{{ route('shop.index', array_merge(request()->query(), ['id_kategori' => null])) }}"
                                                   class="{{ request('id_kategori') == null ? 'text-success' : '' }}">
                                                   Semua
                                               </a>
                                           </li>
                                           @foreach ($kategori as $kategori)
                                               <li>
                                                   <a href="{{ route('shop.index', array_merge(request()->query(), ['id_kategori' => $kategori->id])) }}"
                                                       class="{{ request('id_kategori') == $kategori->id ? 'text-success' : '' }}">
                                                       {{ $kategori->nama }}
                                                   </a>
                                               </li>
                                           @endforeach
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-12 col-lg-9">
                           <div class="row">
                               <div class="col-12 col-lg-6">
                                   <div class="filter__sort d-flex d-lg-block justify-content-between align-items-center">
                                       <span>Urutkan Berdasarkan</span>
                                       <select name="sort_by" onchange="this.form.submit()">
                                           <option value="0" {{ request('sort_by') == '0' ? 'selected' : '' }}>
                                               Default</option>
                                           <option value="price_low_to_high"
                                               {{ request('sort_by') == 'price_low_to_high' ? 'selected' : '' }}>
                                               Harga: Terendah
                                           </option>
                                           <option value="price_high_to_low"
                                               {{ request('sort_by') == 'price_high_to_low' ? 'selected' : '' }}>
                                               Harga: Tertinggi
                                           </option>
                                       </select>
                                   </div>
                               </div>
                               <div class="d-none col-6 d-md-flex justify-content-end">
                                   <div class="filter__found">
                                       <h6><span>{{ $products->count() }}</span> Produk Ditemukan</h6>
                                   </div>
                               </div>
                           </div>
                           <div class="row d-lg-none">
                               <div class="col-12">
                                   <hr class="p-0 m-0">
                               </div>
                           </div>
                           <div class="row mt-4 mt-lg-3">
                               @foreach ($products as $product)
                                   <div class="col-lg-4 col-md-6 col-sm-6">
                                       <div class="products-single fix">
                                           <div class="box-img-hover">
                                               {{-- Gambar Produk --}}
                                               <img src="{{ asset('front/img/produk/' . $product->gambar) }}"
                                                   class="img-fluid" alt="{{ $product->product_name }}">
                                               <div class="mask-icon">
                                                   <ul>
                                                       <li style="font-size: 0.8rem">
                                                           <a href="{{ route('shop.produk.show', ['id' => $product->id]) }}"
                                                               data-toggle="tooltip" data-placement="right" title="Detail">
                                                               <i class="fas fa-eye"></i>
                                                           </a>
                                                       </li>
                                                   </ul>
                                                   <a class="cart" href="#">Beli Sekarang</a>
                                               </div>
                                           </div>
                                           <div class="text-center why-text">
                                               {{-- Nama Produk --}}
                                               <h3 class="p-0 m-0">
                                                   <a href="#">{{ $product->nama }}</a>
                                               </h3>
                                               <div class="d-flex">
                                                   <div class="pricing">
                                                       {{-- Harga Produk --}}
                                                       <p class="price p-0 m-0">
                                                           <span class="price-sale">Rp.
                                                               {{ number_format($product->harga, 0, ',', '.') }}</span>

                                                       </p>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               @endforeach

                               {{-- <div class="col-lg-12">
                               <div class="product__pagination blog__pagination">
                                   <a href="#">1</a>
                                   <a href="#">2</a>
                                   <a href="#">3</a>
                                   <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                               </div>
                           </div> --}}
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           <!-- Product Section End -->
           <!-- Tambahkan hidden input untuk category_id -->
           @if (request('id_kategori'))
               <input type="hidden" name="id_kategori" value="{{ request('id_kategori') }}">
           @endif
       </form>
   @endsection
