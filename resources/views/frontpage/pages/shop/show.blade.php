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
       <section class="breadcrumb-section set-bg" data-setbg="{{ asset('bg.jpeg') }}">
           <div class="container">
               <div class="row">
                   <div class="col-lg-12 text-center">
                       <div class="breadcrumb__text">
                           <h2>MediPlants</h2>
                           <div class="breadcrumb__option">
                               <a href="{{ route('/') }}">Beranda</a>
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
                               <img class="product__details__pic__item--large" src="{{ asset('images/img-pro-02.jpg') }}"
                                   alt="">
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-6 col-md-6">
                       <div class="product__details__text">
                           <h3 class="text-capitalize">Nobesitas</h3>
                           {{-- <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div> --}}
                           <div class="product__details__price">Rp50.000</div>
                           <p class="text-ju">Nobesitas adalah kombinasi beberapa tumbuhan obat untuk membantu mengatasi
                               kelebihan berat badan ( Obesitas )</p>
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
                               <div class="tab-pane active d-flex justify-content-center" id="tabs-1" role="tabpanel">
                                   <div class="product__details__tab__desc">
                                       <div class="my-2">
                                           <h6 class="mb-0">Tidak Disarankan Untuk:</h6>
                                           <div class="ml-4 mt-2">
                                               <p> Wanita hamil & menyusui, anak - anak dengan riwayat alergi, penderita
                                                   diabetes, penyakit jantung, penyakit darah, penyakit pencernaan, penyakit
                                                   autoimun,
                                                   dan orang yang akan menjalani operasi.</p>
                                           </div>
                                       </div>
                                       <div class="my-2">
                                           <h6 class="mb-0">Tidak Dikonsumsi Bersama Obat:</h6>
                                           <div class="ml-4 mt-2">
                                               <p>
                                                   Dapat berinteraksi dengan obat pengencer darah, penurun tekanan darah,
                                                   obat kemoterapi, obat anti-depresan, obat kemoterapi dan antidepresan.
                                               </p>
                                           </div>
                                       </div>
                                       <div class="my-2">
                                           <h6 class="mb-0">Komposisi:</h6>
                                           <div class="ml-4 mt-2">
                                               <p>
                                                   Tiap 500 mg kapsul mengandung: <br>
                                                   Zingiber purpureum roscoe 225 mg, Nigella sativa L. 25 mg, Ektrak herbal
                                                   lainnya hingga 500 mg.
                                               </p>
                                           </div>
                                       </div>
                                       <div class="my-2">
                                           <h6 class="mb-0">Anjuran Pemakaian:</h6>
                                           <div class="ml-4 mt-2">
                                               <p>
                                                   - 3 x 2 kapsu, sehari <br>
                                                   - Jangan konsumsi bersamaan obat - obatan lainnya. <br>
                                                   - Dapat diturunkan / dinaikan sesuai kebutuhan tiap individu <br>
                                                   - Dapat diminum sebelum makan <br>
                                               </p>
                                           </div>
                                       </div>
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
