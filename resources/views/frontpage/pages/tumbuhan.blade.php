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
           <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
               <div class="container">
                   <div class="row">
                       <div class="col-lg-12 text-center">
                           <div class="breadcrumb__text">
                               <h2>MediPlants</h2>
                               <div class="breadcrumb__option">
                                   <a href="{{ url('/') }}">Beranda</a>
                                   <span>Tumbuhan</span>
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
                   <div class="filter__item">
                       <div class="row">
                           <div class="col-3">
                               <h4 style=" color: #1c1c1c; font-weight: 700;">Kategori</h4>
                           </div>
                           <div class="col-4">
                               <div class="filter__sort">
                                   <div class="filter__sort">
                                       <span>Urutkan Berdasarkan</span>
                                       <select name="sort_by" onchange="this.form.submit()">
                                           <option value="0" {{ request('sort_by') == '0' ? 'selected' : '' }}>
                                               Default</option>
                                           <option value="az" {{ request('sort_by') == 'az' ? 'selected' : '' }}>Nama:
                                               A-Z</option>
                                           <option value="za" {{ request('sort_by') == 'za' ? 'selected' : '' }}>Nama:
                                               Z-A</option>
                                       </select>
                                   </div>
                               </div>
                           </div>
                           <div class="col-5 d-flex justify-content-end">
                               <div class="filter__found">
                                   <h6><span>{{ $tumbuhan->count() }}</span> Tumbuhan Ditemukan</h6>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-lg-3 col-md-5">
                           <div class="sidebar">
                               <div class="sidebar__item">
                                   <div class="d-flex gap-2 flex-wrap">
                                       @foreach (range('A', 'Z') as $letter)
                                           <a href="{{ route('tumbuhan.index', array_merge(request()->query(), ['letter' => $letter])) }}"
                                               class="pp p-2 rounded text-center d-flex justify-content-center align-items-center  {{ request('letter') == $letter ? 'bg-dark text-white' : '' }}"
                                               style="">
                                               {{ $letter }}
                                           </a>
                                       @endforeach
                                   </div>
                                   {{-- <ul>
                                       @foreach (range('A', 'Z') as $letter)
                                           <li>
                                               <a href="{{ route('shop.index', array_merge(request()->query(), ['letter' => $letter])) }}"
                                                   class="{{ request('letter') == $letter ? 'text-success' : '' }}">
                                                   {{ $letter }}
                                               </a>
                                           </li>
                                       @endforeach
                                   </ul> --}}
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-9 col-md-7">
                           <div class="row">
                               @foreach ($tumbuhan as $item)
                                   <div class="col-lg-6 col-md-6 col-sm-6">
                                       <div class="blog-box">
                                           <div class="blog-img">
                                               <img class="img-fluid" src="{{ asset('images/blog-img.jpg') }}"
                                                   alt="" />
                                           </div>
                                           <div class="blog-content">
                                               <div class="title-blog">
                                                   <h3 class="text-center mb-1">{{ $item->nama_tumbuhan }}</h3>
                                                   <h6 class="text-center fs-6 font-italic text-muted"
                                                       style="font-size: 0.8rem;">
                                                       {{ $item->nama_latin }}
                                                   </h6>
                                                   <p class="mt-2 text-justify overflow-hidden max-h-20 line-clamp-5">
                                                       {{ $item->sinonim }}
                                                   </p>
                                               </div>
                                               <ul class="option-blog">
                                                   <li>
                                                       <!-- Link ke controller show() dengan parameter ID -->
                                                       <a target="_blank"
                                                           href="{{ route('tumbuhan.show', ['id' => $item->id]) }}">
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
               </div>
           </section>
           <!-- Product Section End -->
           <!-- Tambahkan hidden input untuk category_id -->
           @if (request('letter'))
               <input type="hidden" name="letter" value="{{ request('letter') }}">
           @endif
       </form>
   @endsection
