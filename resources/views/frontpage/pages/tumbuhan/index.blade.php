   @extends('layouts.frontpage')

   @section('title', 'Tumbuhan Page')

   @section('content')

       <form action="{{ route('tumbuhan.index') }}" method="GET">
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
                                   <input type="text" name="name" placeholder="Cari tumbuhan berdasarkan nama"
                                       value="{{ request('name') }}">
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
                   <div class="row">
                       <div class="d-none d-lg-block col-lg-3"
                           style="position: sticky; top: 100px; height: calc(100vh - 100px); overflow-y: auto;">
                           <div class="sidebar">
                               <div class="sidebar__item">
                                   <h4 style="color: #1c1c1c; font-weight: 700;">Kategori</h4>

                                   <div class="d-flex gap-2 flex-wrap justify-content-between">
                                       <a href="{{ route('tumbuhan.index', array_merge(request()->query(), ['letter' => null])) }}"
                                           class="ppp p-2 rounded text-center d-flex justify-content-center align-items-center {{ request('letter') == null ? 'bg-dark text-white' : '' }}">
                                           Semua
                                       </a>
                                       @foreach (range('A', 'Z') as $letter)
                                           <a href="{{ route('tumbuhan.index', array_merge(request()->query(), ['letter' => $letter])) }}"
                                               class="pp p-2 rounded text-center d-flex justify-content-center align-items-center  {{ request('letter') == $letter ? 'bg-dark text-white' : '' }}"
                                               style="">
                                               {{ $letter }}
                                           </a>
                                       @endforeach

                                   </div>
                               </div>
                           </div>

                           {{-- Daftar Pustaka --}}
                           {{-- <div class="d-flex gap-2 align-items-center" style="margin-bottom: 30px;">
                               <h4 id="toggle-dafpus" style="color: #1c1c1c; font-weight: 700; cursor: pointer;"
                                   class="m-0 p-0">Daftar Pustaka</h4>
                               <i id="icon-dafpus" class="fas fa-angle-down fs-5 f-0 m-0"></i>
                           </div> --}}

                           <a href="{{ route('tumbuhan.daftar_pustaka') }}" style="text-decoration: none;">
                               <div class="daftar-pustaka-container">
                                   <h4 class="daftar-pustaka-text m-0 p-0">
                                       Daftar Pustaka
                                   </h4>
                               </div>
                           </a>



                           {{-- Tambahkan Daftar Pustaka dengan checkbox --}}
                           {{-- Daftar Pustaka --}}
                           {{-- <div id="daftar-pustaka" style="display: none;">
                               <ol style="font-size: 0.8rem" class="text-justify pl-3">
                                   <li>Keputusan Menteri Kesehatan Republik Indonesia No. HK.01.07/MENKES/187/2017 tentang
                                       Formularium Ramuan Obat Tradisonal Indonesia.</li>
                                   <li>Ahmad, I., Aqil, F., Owais, M., 2006, Modern Phytomedicine: Turning Medicinal Plants
                                       into Drugs, WILEY-VCH Verlag GmbH & Co. KGaA, Weinheim.</li>
                                   <li>Al-Achi, Antoine, An Introduction to Botanical Medicines, History, Science, Uses, and
                                       Dangers, Greenwood Publishing Group.</li>
                                   <li>Anonim, 2007, Acuan Sediaan Herbal, Volume Ketiga Edisi Pertama, Direktorat Obat Asli
                                       Indonesia, Badan Pengawas Obat dan Makanan RI, Jakarta.</li>
                                   <li>Anonim, 2010, Acuan Sediaan Herbal, Volume Kelima Edisi Pertama, Direktorat Obat Asli
                                       Indonesia, Badan Pengawas Obat dan Makanan RI, Jakarta.</li>
                                   <li>Anonim, 2008, Taksonomi Koleksi Tanaman Obat Kebun Tanaman Obat Citeureup, Badan
                                       Pengawas Obat dan Makanan RI Direktorat Obat Asli Indonesia, Jakarta.</li>
                                   <li>Anonim, 2016, Ramuan Obat Tradisional Indonesia, Serat Centhini, Buku Jampi dan Kitab
                                       Tibb, Badan Pengawas Obat dan Makanan RI, Direktorat Obat Asli Indonesia, Jakarta.
                                   </li>
                                   <li>Anonim, Teknologi Pascapanen Tanaman Obat, Balai Besar Penelitian dan Pengembangan
                                       Pascapanen Pertanian.</li>
                                   <li>Anonim, 2011, Formulatorium Obat Herbal Asli Indonesia, Kementrian Kesehatan Republik
                                       Indonesia, Vol. 1, Direktorat Bina Pelayanan Kesehatan Tradisional, Alternatif dan
                                       Komplementer, Jakarta.</li>
                                   <li>Anonim, 2011, Prosiding Ekspose Hasil-Hasil Penelitian, Hutan Lestari untuk
                                       Kesejahteraan Masyarakat, Balai Penelitian Kehutanan Manado, Manado.</li>
                                   <!-- Tambahan referensi lainnya bisa dilanjutkan di sini -->
                               </ol>
                           </div> --}}
                       </div>
                       <div class="col-12 col-lg-9">
                           <div class="row">
                               <div class="col-12 col-lg-6">
                                   <div class="filter__sort d-flex d-lg-block justify-content-between align-items-center">
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
                               <div class="d-none col-6 d-md-flex justify-content-end">
                                   <div class="filter__found">
                                       <h6><span>{{ $tumbuhan->count() }}</span> Tumbuhan Ditemukan</h6>
                                   </div>
                               </div>
                           </div>
                           <div class="row d-lg-none">
                               <div class="col-12">
                                   <hr class="p-0 m-0">
                               </div>
                           </div>
                           <div class="row mt-4 mt-lg-3">
                               @foreach ($tumbuhan as $item)
                                   <div class="col-lg-6 col-md-6 col-sm-6">
                                       <div class="blog-box">
                                           <div class="blog-img">
                                               <img class="img-fluid"
                                                   src="{{ asset("front/img/tumbuhan/{$item->gambar}") }}"
                                                   alt="tumbuhan" />
                                           </div>
                                           <div class="blog-content">
                                               <div class="title-blog">
                                                   <h3 class="text-center mb-1 text-truncate"
                                                       style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                       {{ $item->nama_tumbuhan }}
                                                   </h3>
                                                   <h6 class="text-center fs-6 font-italic text-muted"
                                                       style="font-size: 0.8rem;">
                                                       {{ $item->nama_latin }}
                                                   </h6>
                                                   <p class="mt-2 text-justify overflow-hidden max-h-20 line-clamp-5">
                                                       {{ $item->deskripsi }}
                                                   </p>
                                               </div>
                                               <ul class="option-blog">
                                                   <li>
                                                       <a target=""
                                                           href="{{ route('tumbuhan.show', ['id' => $item->id]) }}">
                                                           <i class="fas fa-eye"></i>
                                                       </a>
                                                   </li>
                                               </ul>
                                           </div>
                                       </div>
                                   </div>
                               @endforeach
                               {{-- <div class="col-lg-12 mt-5">
                                   <div class="blog__pagination">
                                       {{ $tumbuhan->links() }}
                                   </div>
                               </div> --}}
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
