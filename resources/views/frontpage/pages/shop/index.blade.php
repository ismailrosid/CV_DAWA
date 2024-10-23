   @extends('layouts.frontpage')

   @section('title', 'Shop Page')

   @section('content')

       <form action="{{ route('shop.index') }}" method="GET">
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
                                   <input type="text" name="name"
                                       placeholder="Cari produk, misalnya: Tomat, Apel, dll" value="{{ request('name') }}">
                                   <button type="submit" class="site-btn">CARI</button>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           <!-- Hero Section End -->

           <!-- Breadcrumb Section Begin -->
           <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
               <div class="container">
                   <div class="row">
                       <div class="col-lg-12 text-center">
                           <div class="breadcrumb__text">
                               <h2>MediPlants</h2>
                               <div class="breadcrumb__option">
                                   <a href="{{ route('/') }}">Beranda</a>
                                   <span>Shop</span>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           <!-- Breadcrumb Section End -->

           <!-- Product Section Begin -->
           <section class="product spad p-0 mt-5 pt-2">
               <div class="container">
                   <div class="row ">
                       <div class="col-3 ">
                           <h4 style="color: #1c1c1c; font-weight: 700;">Kategori</h4>
                       </div>
                       <div class="col-9">
                           <div class="row">
                               <div class="col-6">
                                   <div class="filter__sort">
                                       <div class="filter__sort">
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
                               </div>
                               <div class="col-6 d-flex justify-content-end">
                                   <div class="filter__found">
                                       <h6><span>{{ $products->count() }}</span> Produk Ditemukan</h6>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>

                   {{--  --}}
                   <div class="row mt-4">
                       <div class="col-lg-3 col-md-5">
                           <div class="sidebar">
                               <div class="sidebar__item">
                                   <div class="blog__sidebar__item">
                                       <ul>
                                           @foreach ($categories as $category)
                                               <li>
                                                   <a href="{{ route('shop.index', array_merge(request()->query(), ['category_id' => $category->category_id])) }}"
                                                       class="{{ request('category_id') == $category->category_id ? 'text-success' : '' }}">
                                                       {{ $category->category_name }}
                                                   </a>
                                               </li>
                                           @endforeach
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-9 col-md-7">
                           <div class="row">
                               @foreach ($products as $product)
                                   <div class="col-lg-4 col-md-6 col-sm-6">
                                       <div class="products-single fix">
                                           <div class="box-img-hover">
                                               {{-- Gambar Produk --}}
                                               <img src="{{ $product->image_url ?? 'images/img-pro-02.jpg' }}"
                                                   class="img-fluid" alt="{{ $product->product_name }}">
                                               <div class="mask-icon">
                                                   <ul>
                                                       <li style="font-size: 0.8rem">
                                                           <a href="{{ route('product.Show', ['id' => $product->product_id]) }}"
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
                                                   <a href="#">{{ $product->product_name }}</a>
                                               </h3>
                                               <div class="d-flex">
                                                   <div class="pricing">
                                                       {{-- Harga Produk --}}
                                                       <p class="price p-0 m-0">
                                                           <span class="price-sale">Rp50.000 </span>
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
           @if (request('category_id'))
               <input type="hidden" name="category_id" value="{{ request('category_id') }}">
           @endif
       </form>
   @endsection
