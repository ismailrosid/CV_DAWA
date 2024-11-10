   @extends('layouts.frontpage')

   @section('title', 'Tumbuhan Page')

   @section('content')

       <form action="{{ route('tumbuhan.index') }}" method="GET">
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
                                   <a href="{{ route('tumbuhan.index') }}">Tumbuhan</a>
                                   <span>Detail Tumbuhan</span>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           <!-- Breadcrumb Section End -->

           <!-- Product Section Begin -->
           <section class="product spad">
               <div class="container">

                   <div class="row">
                       {{-- <div class="col-lg-3 col-md-5">
                           <img class="img-fluid" src="{{ asset('front/img/tumbuhan/a.png') }}" alt="">
                       </div> --}}
                       <div class="col-lg-12">
                           <div class="row">
                               <div class="col-12">
                                   <div class="blog-box">
                                       <div class="blog-content">
                                           <div class="title-blog p-5">
                                               <div class="text-center my-3">
                                                   <h1 style="font-size: 1.7rem;" class="text-uppercase font-weight-bolder">
                                                       {{ $data->nama }}
                                                   </h1>
                                                   <h1 class="fs-5 text-uppercase  my-2">{{ $data->judul }}</h1>
                                                   <hr class="p-0 m-0 mt-3">
                                               </div>
                                               <p class="first-paragraph text-justify mt-4 mb-3">
                                                   {{ $data->deskripsi }}
                                               </p>

                                               @foreach ($data->detail as $index => $detail)
                                                   <div class="my-3 ml-3">
                                                       <h1 class="fs-6 font-weight-bolder">{{ $index + 1 }}.
                                                           {{ $detail->nama_herbal }}: {{ $detail->manfaat }}</h1>
                                                       <p class="text-justify my-2 first-paragraph">
                                                           {{ $detail->deskripsi }}</p>

                                                       <ul class="ml-4">
                                                           <li>
                                                               <h1 class="fs-6">Cara Kerja</h1>
                                                               <p class="text-justify ">{{ $detail->cara_kerja }}</p>
                                                           </li>
                                                           <li>
                                                               <h1 class="fs-6">Cara Konsumsi</h1>
                                                               <p class="text-justify">{{ $detail->cara_konsumsi }}</p>
                                                           </li>
                                                       </ul>
                                                   </div>
                                               @endforeach

                                               <!-- Kombinasi Herbal yang Optimal -->
                                               <div class="my-3">
                                                   <h1 class="fs-5 font-weight-bolder">Kombinasi Herbal yang Optimal</h1>
                                                   <p class="fs-6 my-2 first-paragraph">{{ $data->kombinasi_herbal }}</p>
                                               </div>

                                               <!-- Kesimpulan -->
                                               <div class="my-3">
                                                   <h1 class="fs-5 font-weight-bolder">Kesimpulan</h1>
                                                   <p class="fs-6 my-2 first-paragraph">{{ $data->kesimpulan }}</p>
                                               </div>
                                           </div>

                                       </div>

                                   </div>
                               </div>
                           </div>
                       </div>
           </section>
           <!-- Product Section End -->
           <!-- Tambahkan hidden input untuk category_id -->
           @if (request('letter'))
               <input type="hidden" name="letter" value="{{ request('letter') }}">
           @endif
       </form>
   @endsection
