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
                   {{-- <div class="filter__item">
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
                   </div> --}}
                   <div class="row">
                       <div class="col-lg-3 col-md-5">
                           <img class="img-fluid" src="{{ asset('front/img/tumbuhan/a.png') }}" alt="">
                       </div>
                       <div class="col-lg-9 col-md-7">
                           <div class="row">
                               <div class="col-12">
                                   <div class="blog-box">
                                       <div class="blog-content">
                                           <div class="title-blog">
                                               <h3 class="text-center mb-1">{{ $data['nama'] }}</h3>
                                               <h6 class="text-center fs-6 font-italic text-muted"
                                                   style="font-size: 0.8rem;">
                                                   {{ $data['nama_latin'] }}
                                               </h6>
                                               <div class="my-4 d-flex justify-content-center">
                                                   <img class="img-fluid"
                                                       src="{{ asset('front/img/tumbuhan/' . $data['gambar']) }}"
                                                       alt="{{ $data['nama'] }}" />
                                               </div>
                                               <div class="my-4">
                                                   <h5 class="h5">SINONIM:</h5>
                                                   <div class="row">
                                                       <div class="col-6">
                                                           <p class="paragrafh-dtl font-italic">
                                                               @foreach (array_slice(explode('|||', $data['sinonim']), 0, ceil(count(explode('|||', $data['sinonim'])) / 2)) as $sinonim)
                                                                   <span>{{ $sinonim }}</span><br>
                                                               @endforeach
                                                           </p>
                                                       </div>

                                                       <div class="col-6">
                                                           <p class="paragrafh-dtl font-italic">
                                                               @foreach (array_slice(explode('|||', $data['sinonim']), ceil(count(explode('|||', $data['sinonim'])) / 2)) as $sinonim)
                                                                   <span>{{ $sinonim }}</span><br>
                                                               @endforeach
                                                           </p>
                                                       </div>
                                                   </div>
                                               </div>


                                               <div class="my-4">
                                                   <h5 class="h5">NAMA DAERAH:</h5>
                                                   <p class="paragrafh-dtl text-justify">
                                                       @foreach (explode('|||', $data['nama_daerah']) as $daerah)
                                                           <span>{{ $daerah }}</span><br>
                                                       @endforeach
                                                   </p>
                                               </div>

                                               <div class="my-4">
                                                   <h5 class="h5">KLASIFIKASI:</h5>
                                                   <table>
                                                       <tr class="paragrafh-dtl">
                                                           <td>
                                                               <p>Kerajaan</p>
                                                           </td>
                                                           <td>
                                                               <p>:</p>
                                                           </td>
                                                           <td>
                                                               <p>{{ $data['kerajaan'] }}</p>
                                                           </td>
                                                       </tr>
                                                       <tr class="paragrafh-dtl">
                                                           <td>
                                                               <p>Sub Kerajaan</p>
                                                           </td>
                                                           <td>
                                                               <p>:</p>
                                                           </td>
                                                           <td>
                                                               <p>{{ $data['sub_kerajaan'] }}</p>
                                                           </td>
                                                       </tr>
                                                       <tr class="paragrafh-dtl">
                                                           <td>
                                                               <p>Super Divisi</p>
                                                           </td>
                                                           <td>
                                                               <p>:</p>
                                                           </td>
                                                           <td>
                                                               <p>{{ $data['super_divisi'] }}</p>
                                                           </td>
                                                       </tr>
                                                       <tr class="paragrafh-dtl">
                                                           <td>
                                                               <p>Divisi</p>
                                                           </td>
                                                           <td>
                                                               <p>:</p>
                                                           </td>
                                                           <td>
                                                               <p>{{ $data['divisi'] }}</p>
                                                           </td>
                                                       </tr>
                                                       <tr class="paragrafh-dtl">
                                                           <td>
                                                               <p>Kelas</p>
                                                           </td>
                                                           <td>
                                                               <p>:</p>
                                                           </td>
                                                           <td>
                                                               <p>{{ $data['kelas'] }}</p>
                                                           </td>
                                                       </tr>
                                                       <tr class="paragrafh-dtl">
                                                           <td>
                                                               <p>Sub Kelas</p>
                                                           </td>
                                                           <td>
                                                               <p>:</p>
                                                           </td>
                                                           <td>
                                                               <p>{{ $data['sub_kelas'] }}</p>
                                                           </td>
                                                       </tr>
                                                       <tr class="paragrafh-dtl">
                                                           <td>
                                                               <p>Ordo</p>
                                                           </td>
                                                           <td>
                                                               <p>:</p>
                                                           </td>
                                                           <td>
                                                               <p>{{ $data['ordo'] }}</p>
                                                           </td>
                                                       </tr>
                                                       <tr class="paragrafh-dtl">
                                                           <td>
                                                               <p>Famili</p>
                                                           </td>
                                                           <td>
                                                               <p>:</p>
                                                           </td>
                                                           <td>
                                                               <p>{{ $data['famili'] }}</p>
                                                           </td>
                                                       </tr>
                                                       <tr class="paragrafh-dtl">
                                                           <td>
                                                               <p>Genus</p>
                                                           </td>
                                                           <td>
                                                               <p>:</p>
                                                           </td>
                                                           <td>
                                                               <p>{{ $data['genus'] }}</p>
                                                           </td>
                                                       </tr>
                                                       <tr class="paragrafh-dtl">
                                                           <td>
                                                               <p>Spesies</p>
                                                           </td>
                                                           <td>
                                                               <p>:</p>
                                                           </td>
                                                           <td>
                                                               <p>{{ $data['spesies'] }}</p>
                                                           </td>
                                                       </tr>
                                                   </table>
                                               </div>

                                               <div class="my-4">
                                                   <h5 class="h5">DESKRIPSI:</h5>
                                                   <p class="paragrafh-dtl text-justify indent">
                                                       {{ $data['deskripsi'] }}
                                                   </p>
                                               </div>

                                               <div class="my-4">
                                                   <h5 class="h5">BAGIAN YANG DIGUNAKAN:</h5>
                                                   <p class="paragrafh-dtl text-justify">
                                                       {{ $data['bagian_yang_digunakan'] }}
                                                   </p>
                                               </div>

                                               <div class="my-4">
                                                   <h5 class="h5">KONSTITUEN:</h5>
                                                   <p class="paragrafh-dtl text-justify indent">
                                                       {{ $data['konstituen'] }}
                                                   </p>
                                               </div>

                                               <div class="my-4">
                                                   <h5 class="h5">INDIKASI:</h5>
                                                   <p class="paragrafh-dtl text-justify indent">
                                                       {{ $data['indikasi'] }}
                                                   </p>
                                               </div>

                                               <div class="my-4">
                                                   <h5 class="h5">PENGGUNAAN TRADISIONAL:</h5>
                                                   <p class="paragrafh-dtl text-justify indent">
                                                       {{ $data['penggunaan_tradisional'] }}
                                                   </p>
                                               </div>

                                               <div class="my-4">
                                                   <h5 class="h5">DOSIS HARIAN:</h5>
                                                   <p class="paragrafh-dtl text-justify indent">
                                                       {{ $data['dosis_harian'] }}
                                                   </p>
                                               </div>

                                               <div class="my-4">
                                                   <h5 class="h5">KONTRAINDIKASI, INTERAKSI, DAN EFEK SAMPING:</h5>
                                                   <p class="paragrafh-dtl text-justify indent">
                                                       {{ $data['kontra_indikasi'] }}
                                                   </p>
                                               </div>

                                               <div class="my-4">
                                                   <h5 class="h5">SUMBER INTERNET:</h5>
                                                   <p class="paragrafh-dtl">
                                                       @foreach (explode('|||', $data['sumber_internet']) as $sumber)
                                                           <span>{{ $sumber }}</span><br>
                                                       @endforeach
                                                   </p>
                                               </div>

                                               <div class="my-4">
                                                   <h5 class="h5">TAUTAN GAMBAR:</h5>
                                                   <p class="paragrafh-dtl">
                                                       @foreach (explode('|||', $data['link_gambar']) as $gambar)
                                                           <span>{{ $gambar }}</span><br>
                                                       @endforeach
                                                   </p>
                                               </div>

                                               <div class="my-4">
                                                   <h5 class="h5">DAFTAR PUSTAKA:</h5>
                                                   <p class="paragrafh-dtl">
                                                       @foreach (explode('|||', $data['daftar_pustaka']) as $pustaka)
                                                           <span>{{ $pustaka }}</span><br>
                                                       @endforeach
                                                   </p>
                                               </div>
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
