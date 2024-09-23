   @extends('layouts.frontpage')

   @section('title', 'Home Page')

   @section('content')
       <!-- Hero Section Begin -->
       <section class="hero">
           <div class="container">
               <div class="row">
                   <div class="col-12">
                       <div class="hero__item set-bg" data-setbg="{{ asset('img/hero/banner.jpg') }}">
                           <div class="hero__text">
                               <span>HERBAL ALAMI</span>
                               <h2>100% Organik <br />dan Aman</h2>
                               <p>Gratis Konsultasi dan Pengiriman</p>
                               <a href="#" class="primary-btn">BELI SEKARANG</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       <!-- Hero Section End -->

       <!-- Categories Section Begin -->
       <section class="categories">
           <div class="container about pt-5">
               <div class="row gx-5">
                   <div class="col-lg-6 mb-5 mb-lg-0">
                       <div style="border: 5px solid #7fad39; border-bottom: none; padding-top: 1rem;" class="d-flex h-100">
                           <img class="img-fluid mt-auto mx-auto" src="{{ asset('img/about.png') }}" alt="About Us">
                       </div>
                   </div>
                   <div class="col-lg-6 pb-5">
                       <div class="mb-2 pb-2">
                           <h6 class="text-uppercase" style="color: #7fad39">Tentang Kami</h6>
                           <h2 class="display-5">Obat Herbal Alami</h2>
                       </div>

                       <p class="mb-4 text-justify">Mediplants adalah toko obat herbal dan alami yang didedikasikan untuk
                           menyediakan
                           solusi kesehatan terbaik bagi Anda dan keluarga. Kami menawarkan beragam produk yang terbuat dari
                           bahan-bahan alami pilihan, diproses dengan standar kualitas tinggi untuk memastikan keamanan dan
                           efektivitasnya.</p>
                       <div class="row gx-5 gy-4 align-items-center">
                           <div class="col-sm-6 text-center">
                               <i class="fa fa-seedling display-1 text-secondary mb-3"></i>
                               <h4 class="fw-bold mb-3">100% Alami</h4>
                               <p class="mb-0 text-center text-muted">Produk kami berasal dari bahan-bahan alami terbaik
                                   yang
                                   diproses dengan cermat untuk menjaga kualitas dan efektivitasnya.</p>
                           </div>
                           <div class="col-sm-6 text-center">
                               <i class="fa fa-award display-1 text-secondary mb-3"></i>
                               <h4 class="fw-bold mb-3">Berkualitas Tinggi</h4>
                               <p class="mb-0 text-center text-muted">Produk Mediplants diakui atas kualitas unggul dan
                                   keamanan
                                   yang terpercaya, memenangkan berbagai penghargaan.</p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       <!-- Categories Section End -->

       <!-- Banner Begin -->
       {{-- <div class="banner mt-4">
           <div class="container">
               <div class="row">
                   <div class="col-lg-6 col-md-6 col-sm-6">
                       <div class="banner__pic">
                           <img src="{{ asset('img/banner/banner-1.jpg') }}" alt="" />
                       </div>
                   </div>
                   <div class="col-lg-6 col-md-6 col-sm-6">
                       <div class="banner__pic">
                           <img src="{{ asset('img/banner/banner-2.jpg') }}" alt="" />
                       </div>
                   </div>
               </div>
           </div>
       </div> --}}
       <!-- Banner End -->


       {{-- <section class="ftco-section">
           <div class="container">
               <div class="row justify-content-center mb-3 pb-3">
                   <div class="col-md-12 heading-section text-center ftco-animate">
                       <h2 class="mb-4">Produk Unggulan</h2>
                       <p class="text-capitalize">
                           Temukan produk herbal berkualitas tinggi yang telah dipercaya banyak pelanggan untuk menjaga
                           kesehatan
                       </p>
                   </div>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-md-6 col-lg-3 ftco-animate">
                       <div class="product p-0">
                           <a href="#" class="img-prod"><img class="img-fluid" src="images/product-2.jpg"
                                   alt="Colorlib Template" />
                               <div class="overlay"></div>
                           </a>
                           <div class="text py-3 pb-4 px-3 text-center">
                               <h3><a href="#">Strawberry</a></h3>
                               <div class="d-flex">
                                   <div class="pricing">
                                       <p class="price"><span>$120.00</span></p>
                                   </div>
                               </div>
                               <div class="bottom-area d-flex px-3">
                                   <div class="m-auto d-flex">
                                       <a href="#" class="view d-flex justify-content-center align-items-center mx-1">
                                           <span><i class="fas fa-eye"></i></span> <!-- Ikon Font Awesome Lihat -->
                                       </a>
                                       <a href="#" class="order d-flex justify-content-center align-items-center">
                                           <span><i class="fas fa-receipt"></i></span> <!-- Ikon Font Awesome Pesan -->
                                       </a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section> --}}

       <!-- Start Products  -->
       <section class="ftco-section">
           <div class="products-box">
               <div class="container">
                   <div class="row">
                       <div class="col-lg-12">
                           <div class="title-all text-center">
                               <h1>Produk Unggulan</h1>
                               <div class="d-flex justify-content-center">
                                   <p class="w-75">
                                       Jelajahi produk herbal unggulan kami yang dipilih secara khusus untuk membantu
                                       menjaga kesehatan Anda secara alami.
                                   </p>
                               </div>
                           </div>
                       </div>
                       <div class="row special-list">
                           <div class="col-lg-3 col-md-6 special-grid top-featured">
                               <div class="products-single fix">
                                   <div class="box-img-hover">
                                       {{-- <div class="type-lb">
                                       <p class="sale">Herbal</p>
                                   </div> --}}
                                       <img src="images/img-pro-02.jpg" class="img-fluid" alt="Image">
                                       <div class="mask-icon">
                                           <ul>
                                               <li style="font-size: 0.8rem"><a href="#" data-toggle="tooltip"
                                                       data-placement="right" title="Detail"><i class="fas fa-eye"></i></a>
                                               </li>

                                           </ul>
                                           <a class="cart" href="#">Beli Sekarang</a>
                                       </div>
                                   </div>
                                   <div class="text-center why-text">
                                       <h3 class="p-0 m-0"><a href="#">Tomatoe</a></h3>
                                       <div class="d-flex">
                                           <div class="pricing">
                                               <p class="price p-0 m-0">
                                                   <span class="price-sale">Rp 80,000</span>
                                               </p>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-3 col-md-6 special-grid top-featured">
                               <div class="products-single fix">
                                   <div class="box-img-hover">
                                       {{-- <div class="type-lb">
                                       <p class="sale">MADU</p>
                                   </div> --}}
                                       <img src="images/img-pro-02.jpg" class="img-fluid" alt="Image">
                                       <div class="mask-icon">
                                           <ul>
                                               <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                       title="Detail"><i class="fas fa-eye"></i></a></li>

                                           </ul>
                                           <a class="cart" href="#">Beli Sekarang</a>
                                       </div>
                                   </div>
                                   <div class="text-center why-text">
                                       <h3 class="p-0 m-0"><a href="#">Tomatoe</a></h3>
                                       <div class="d-flex">
                                           <div class="pricing">
                                               <p class="price p-0 m-0">
                                                   <span class="price-sale">Rp 80,000</span>
                                               </p>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-3 col-md-6 special-grid top-featured">
                               <div class="products-single fix">
                                   <div class="box-img-hover">
                                       {{-- <div class="type-lb">
                                       <p class="sale">Lemon Tea</p>
                                   </div> --}}
                                       <img src="images/img-pro-02.jpg" class="img-fluid" alt="Image">
                                       <div class="mask-icon">
                                           <ul>
                                               <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                       title="Detail"><i class="fas fa-eye"></i></a></li>

                                           </ul>
                                           <a class="cart" href="#">Beli Sekarang</a>
                                       </div>
                                   </div>
                                   <div class="text-center why-text">
                                       <h3 class="p-0 m-0"><a href="#">Tomatoe</a></h3>
                                       <div class="d-flex">
                                           <div class="pricing">
                                               <p class="price p-0 m-0">
                                                   <span class="price-sale">Rp 80,000</span>
                                               </p>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-3 col-md-6 special-grid top-featured">
                               <div class="products-single fix">
                                   <div class="box-img-hover">
                                       {{-- <div class="type-lb">
                                       <p class="sale">Herbal</p>
                                   </div> --}}
                                       <img src="images/img-pro-02.jpg" class="img-fluid" alt="Image">
                                       <div class="mask-icon">
                                           <ul>
                                               <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                       title="Detail"><i class="fas fa-eye"></i></a></li>

                                           </ul>
                                           <a class="cart" href="#">Beli Sekarang</a>
                                       </div>
                                   </div>
                                   <div class="text-center why-text">
                                       <h3 class="p-0 m-0"><a href="#">Tomatoe</a></h3>
                                       <div class="d-flex">
                                           <div class="pricing">
                                               <p class="price p-0 m-0">
                                                   <span class="price-sale">Rp 80,000</span>
                                               </p>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       {{-- <div class="row w-100">
                           <div class="col-12">
                               <div class="special-menu text-center">
                                   <div class="button-group filter-button-group">
                                       <button class="" data-filter="*">Tampilkan Semua Produk</button>
                                   </div>
                               </div>
                           </div>
                       </div> --}}
                   </div>
       </section>
       <!-- End Products  -->


       <!-- Blog Section Begin -->
       <!-- Start Blog  -->
       <div class="latest-blog">
           <div class="container">
               <div class="row">
                   <div class="col-lg-12">
                       <div class="title-all text-center">
                           <h1>Jenis Tumbuhan Herbal</h1>
                           <div class="d-flex justify-content-center">
                               <p class="w-75">
                                   Rasakan khasiat dari berbagai tumbuhan herbal yang dipilih secara cermat dan teruji untuk
                                   memastikan manfaat maksimal bagi tubuh Anda.
                               </p>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="row">
                   @foreach ($tumbuhan as $item)
                       <div class="col-lg-4 col-md-6 col-sm-6">
                           <div class="blog-box">
                               <div class="blog-img">
                                   <img class="img-fluid" src="{{ asset('images/blog-img.jpg') }}" alt="" />
                               </div>
                               <div class="blog-content">
                                   <div class="title-blog">
                                       <h3 class="text-center mb-1">{{ $item->nama_tumbuhan }}</h3>
                                       <h6 class="text-center fs-6 font-italic text-muted" style="font-size: 0.8rem;">
                                           {{ $item->nama_latin }}
                                       </h6>
                                       <p class="mt-2 text-justify overflow-hidden max-h-20 line-clamp-5">
                                           {{ $item->sinonim }}
                                       </p>
                                   </div>
                                   <ul class="option-blog">
                                       <li>
                                           <!-- Link ke controller show() dengan parameter ID -->
                                           <a target="_blank" href="{{ route('tumbuhan.show', ['id' => $item->id]) }}">
                                               <i class="fas fa-eye"></i>
                                           </a>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                   @endforeach
                   <div class="col-lg-12 mt-5">
                       <div class="blog__pagination">
                           {{-- {{ $tumbuhan->links() }} --}}
                       </div>
                   </div>
               </div>

           </div>
       </div>
       <!-- End Blog  -->
       {{-- <section style="background-color: #7ead392f;" class="from-blog spad">
           <div class="container">
               <div class="row">
                   <div class="col-lg-12">
                       <div class="title-all text-center">
                           <h1>Fruits & Vegetables</h1>
                           <p>
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit
                               amet lacus enim.
                           </p>
                       </div>
                   </div>
               </div>
               <div class="row">
                   <div class="col-lg-4 col-md-4 col-sm-6">
                       <div class="blog__item">
                           <div class="blog__item__pic">
                               <img src="img/blog/blog-1.jpg" alt="">
                           </div>
                           <div class="blog__item__text">
                               <ul>
                                   <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                               </ul>
                               <h5><a href="#">Foeniculum vulgare Mill.</a></h5>
                               <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam
                                   quaerat
                               </p>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-4 col-md-4 col-sm-6">
                       <div class="blog__item">
                           <div class="blog__item__pic">
                               <img src="img/blog/blog-2.jpg" alt="">
                           </div>
                           <div class="blog__item__text">
                               <ul>
                                   <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                               </ul>
                               <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                               <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam
                                   quaerat
                               </p>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-4 col-md-4 col-sm-6">
                       <div class="blog__item">
                           <div class="blog__item__pic">
                               <img src="img/blog/blog-3.jpg" alt="">
                           </div>
                           <div class="blog__item__text">
                               <ul>
                                   <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                               </ul>
                               <h5><a href="#">Visit the clean farm in the US</a></h5>
                               <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam
                                   quaerat
                               </p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section> --}}
       <!-- Blog Section End -->

       <!-- Categories Section Begin -->
       {{-- <section class="categories ftco-section pb-0">
           <div class="container about">
               <div class="row gx-5">
                   <div class="col-lg-6 pb-5">
                       <div class="mb-2 pb-2">

                           <h6 class="text-uppercase" style="color: #7fad39">Tips Kesehatan Herbal Terbaru</h6>
                           <h2 class="display-5 pt-2">Tips praktis sehat dengan herbal.</h2>
                       </div>
                       <p class="mb-4 text-justify">Mediplants adalah toko obat herbal dan alami yang didedikasikan
                           untuk
                           menyediakan
                           solusi kesehatan terbaik bagi Anda dan keluarga. Kami menawarkan beragam produk yang
                           terbuat
                           dari
                           bahan-bahan alami pilihan, diproses dengan standar kualitas tinggi untuk memastikan
                           keamanan
                           dan
                           efektivitasnya.</p>
                       <div class="row gx-5 gy-4 align-items-center">
                           <div class="col-sm-6 text-center">
                               <i class="fa fa-seedling display-1 text-secondary mb-3"></i>
                               <h4 class="fw-bold mb-3">100% Alami</h4>
                               <p class="mb-0 text-center text-muted">Produk kami berasal dari bahan-bahan alami
                                   terbaik
                                   yang
                                   diproses dengan cermat untuk menjaga kualitas dan efektivitasnya.</p>
                           </div>
                           <div class="col-sm-6 text-center">
                               <i class="fa fa-award display-1 text-secondary mb-3"></i>
                               <h4 class="fw-bold mb-3">Berkualitas Tinggi</h4>
                               <p class="mb-0 text-center text-muted">Produk Mediplants diakui atas kualitas unggul
                                   dan
                                   keamanan
                                   yang terpercaya, memenangkan berbagai penghargaan.</p>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-6 mb-5 mb-lg-0">
                       <div style="border: 5px solid #7fad39; border-bottom: none; padding-top: 1rem;"
                           class="d-flex h-100">
                           <img class="img-fluid mt-auto mx-auto" src="{{ asset('img/about.png') }}" alt="About Us">
                       </div>
                   </div>
               </div>
           </div>
       </section> --}}
       <!-- Categories Section End -->

       <!-- Offer Start -->
       {{-- <div class="container-fluid offer-section pb-5">
           <div class="container pb-5">
               <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                   <h4 class="text-primary">Our Offer</h4>
                   <h1 class="display-5 mb-4">Benefits We offer</h1>
                   <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                       cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint
                       dolorem autem obcaecati, ipsam mollitia hic.
                   </p>
               </div>
               <div class="row g-5 align-items-center">
                   <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.2s">
                       <div class="nav nav-pills bg-light rounded p-5">
                           <a class="accordion-link p-4 active mb-4" data-bs-toggle="pill" href="#collapseOne">
                               <h5 class="mb-0">Lending money for investment of your new projects</h5>
                           </a>
                           <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseTwo">
                               <h5 class="mb-0">Lending money for investment of your new projects</h5>
                           </a>
                           <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseThree">
                               <h5 class="mb-0">Mobile payment is more flexible and easy for all investors</h5>
                           </a>
                           <a class="accordion-link p-4 mb-0" data-bs-toggle="pill" href="#collapseFour">
                               <h5 class="mb-0">all transaction is kept free for the member of pro traders</h5>
                           </a>
                       </div>
                   </div>
                   <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.4s">
                       <div class="tab-content">
                           <div id="collapseOne" class="tab-pane fade show p-0 active">
                               <div class="row g-4">
                                   <div class="col-md-7">
                                       <img src="img/offer-1.jpg" class="img-fluid w-100 rounded" alt="">
                                   </div>
                                   <div class="col-md-5">
                                       <h1 class="display-5 mb-4">The stock market provides a venue...</h1>
                                       <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
                                           amet sequi molestiae tenetur eum mollitia, blanditiis, magnam illo magni error
                                           dolore unde perspiciatis tempore et totam corrupti dignissimos aut praesentium?
                                       </p>
                                       <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                   </div>
                               </div>
                           </div>
                           <div id="collapseTwo" class="tab-pane fade show p-0">
                               <div class="row g-4">
                                   <div class="col-md-7">
                                       <img src="img/offer-2.jpg" class="img-fluid w-100 rounded" alt="">
                                   </div>
                                   <div class="col-md-5">
                                       <h1 class="display-5 mb-4">The stock market provides a venue...</h1>
                                       <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
                                           amet sequi molestiae tenetur eum mollitia, blanditiis, magnam illo magni error
                                           dolore unde perspiciatis tempore et totam corrupti dignissimos aut praesentium?
                                       </p>
                                       <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                   </div>
                               </div>
                           </div>
                           <div id="collapseThree" class="tab-pane fade show p-0">
                               <div class="row g-4">
                                   <div class="col-md-7">
                                       <img src="img/offer-3.jpg" class="img-fluid w-100 rounded" alt="">
                                   </div>
                                   <div class="col-md-5">
                                       <h1 class="display-5 mb-4">The stock market provides a venue...</h1>
                                       <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
                                           amet sequi molestiae tenetur eum mollitia, blanditiis, magnam illo magni error
                                           dolore unde perspiciatis tempore et totam corrupti dignissimos aut praesentium?
                                       </p>
                                       <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                   </div>
                               </div>
                           </div>
                           <div id="collapseFour" class="tab-pane fade show p-0">
                               <div class="row g-4">
                                   <div class="col-md-7">
                                       <img src="img/offer-4.jpg" class="img-fluid w-100 rounded" alt="">
                                   </div>
                                   <div class="col-md-5">
                                       <h1 class="display-5 mb-4">The stock market provides a venue...</h1>
                                       <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
                                           amet sequi molestiae tenetur eum mollitia, blanditiis, magnam illo magni error
                                           dolore unde perspiciatis tempore et totam corrupti dignissimos aut praesentium?
                                       </p>
                                       <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div> --}}
       <!-- Offer End -->


       <!-- FAQ Start -->
       <div class="container-fluid FAQ overflow-hidden py-5">
           <div class="container py-5">
               <div class="row">
                   <div class="col-lg-12">
                       <div class="title-all text-center">
                           <h1>Tips Kesehatan Herbal</h1>
                           <div class="d-flex justify-content-center">
                               <p class="w-75">
                                   Rasakan khasiat dari berbagai tumbuhan herbal yang dipilih secara cermat dan teruji untuk
                                   memastikan manfaat maksimal bagi tubuh Anda.
                               </p>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="row g-5 align-items-center">
                   <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                       <div class="accordion" id="accordionExample">
                           <div class="accordion-item border-0 mb-4">
                               <h2 class="accordion-header" id="headingOne">
                                   <button class="accordion-button rounded-top text-center" type="button"
                                       data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                       aria-controls="collapseOne">
                                       <span>1.</span> <span class="px-1">Mulai Hari dengan Minuman Herbal Hangat</span>
                                   </button>
                               </h2>
                               <div id="collapseOne" class="accordion-collapse collapse show"
                                   aria-labelledby="headingOne" data-parent="#accordionExample">
                                   <div class="accordion-body my-2">
                                       <table class="table table-borderless">
                                           <tbody>
                                               <tr>
                                                   <td class="">Tips</td>
                                                   <td class="">:</td>
                                                   <td class="">
                                                       <ul>
                                                           <li class="text-justify">Awali pagi dengan secangkir teh herbal
                                                               seperti teh jahe,
                                                               peppermint, atau lemon balm. Minuman herbal hangat dapat
                                                               membantu membersihkan pencernaan, meningkatkan sirkulasi
                                                               darah, dan memberikan energi alami untuk memulai hari.</li>
                                                       </ul>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td class="">Manfaat</td>
                                                   <td class="">:</td>
                                                   <td class="">
                                                       <ul>
                                                           <li class="text-justify">Mendukung metabolisme, meredakan
                                                               peradangan, dan meningkatkan
                                                               fokus.</li>
                                                       </ul>
                                                   </td>
                                               </tr>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>
                           </div>
                           <div class="accordion-item border-0 mb-4">
                               <h2 class="accordion-header" id="headingTwo">
                                   <button class="accordion-button collapsed rounded-top" type="button"
                                       data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                       aria-controls="collapseTwo">
                                       <span>2.</span> <span class="px-1">Gunakan Rempah-rempah untuk
                                           Meningkat...</span>
                                   </button>
                               </h2>
                               <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                   data-parent="#accordionExample">
                                   <div class="accordion-body my-2">
                                       <table class="table table-borderless">
                                           <tbody>
                                               <tr>
                                                   <td class="">Tips</td>
                                                   <td class="">:</td>
                                                   <td class="">
                                                       <ul>
                                                           <li class="text-justify">Awali pagi dengan secangkir teh herbal
                                                               seperti teh jahe,
                                                               peppermint, atau lemon balm. Minuman herbal hangat dapat
                                                               membantu membersihkan pencernaan, meningkatkan sirkulasi
                                                               darah, dan memberikan energi alami untuk memulai hari.</li>
                                                       </ul>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td class="">Manfaat</td>
                                                   <td class="">:</td>
                                                   <td class="">
                                                       <ul>
                                                           <li class="text-justify">Mendukung metabolisme, meredakan
                                                               peradangan, dan meningkatkan
                                                               fokus.</li>
                                                       </ul>
                                                   </td>
                                               </tr>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>
                           </div>
                           <div class="accordion-item border-0">
                               <h2 class="accordion-header" id="headingThree">
                                   <button class="accordion-button collapsed rounded-top" type="button"
                                       data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                       aria-controls="collapseThree">
                                       <span>3.</span> <span class="px-1">Gunakan Rempah-rempah untuk
                                           Meningkat...</span>
                                   </button>
                               </h2>
                               <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                   data-parent="#accordionExample">
                                   <div class="accordion-body my-2">
                                       <table class="table table-borderless">
                                           <tbody>
                                               <tr>
                                                   <td class="">Tips</td>
                                                   <td class="">:</td>
                                                   <td class="">
                                                       <ul>
                                                           <li class="text-justify">Awali pagi dengan secangkir teh herbal
                                                               seperti teh jahe,
                                                               peppermint, atau lemon balm. Minuman herbal hangat dapat
                                                               membantu membersihkan pencernaan, meningkatkan sirkulasi
                                                               darah, dan memberikan energi alami untuk memulai hari.</li>
                                                       </ul>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td class="">Manfaat</td>
                                                   <td class="">:</td>
                                                   <td class="">
                                                       <ul>
                                                           <li class="text-justify">Mendukung metabolisme, meredakan
                                                               peradangan, dan meningkatkan
                                                               fokus.</li>
                                                       </ul>
                                                   </td>
                                               </tr>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                       <div class="d-flex h-100">
                           <img class="img-fluid mt-auto mx-auto" src="{{ asset('img/about.png') }}" alt="About Us">
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- FAQ End -->

   @endsection
