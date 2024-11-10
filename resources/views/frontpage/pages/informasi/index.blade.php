   @extends('layouts.frontpage')

   @section('title', 'Herbal Page')

   @section('content')


       <!-- Hero Section Begin -->
       <form action="{{ route('informasi.index') }}" method="GET">
           <!-- Hero Section End -->
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
                                       placeholder="Cari Tips dan Info Herbal berdasarkan nama"
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
                                   <a href="{{ url('/beranda') }}">Beranda</a>
                                   <span>Tips Herbal</span>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           <!-- Breadcrumb Section End -->

           <!-- Blog Section Begin -->
           <section class="blog spad p-0 mt-5 pt-2">
               <div class="container">
                   <div class="row ">
                       <div class="col-lg-3 col-md-5"
                           style="position: sticky; top: 100px; height: calc(100vh - 100px); overflow-y: auto;">
                           <div class="sidebar">
                               <div class="sidebar__item">
                                   <h4 style=" color: #1c1c1c; font-weight: 700;" class="p-0 mb-3">Kategori</h4>
                                   <div class="blog__sidebar__item">
                                       <ul>
                                           <li>
                                               <a href="{{ route('informasi.index', array_merge(request()->query(), ['id_kategori' => null])) }}"
                                                   class="{{ request('id_kategori') == null ? 'text-success' : '' }}">
                                                   Semua
                                               </a>
                                           </li>
                                           @foreach ($kategoriInformasi as $kategori)
                                               <li>
                                                   <a href="{{ route('informasi.index', array_merge(request()->query(), ['id_kategori' => $kategori->id])) }}"
                                                       class="{{ request('id_kategori') == $kategori->id ? 'text-success' : '' }}">
                                                       {{ $kategori->nama }}
                                                   </a>
                                               </li>
                                           @endforeach
                                           <li>
                                               <a style="color: #6f6f6f">Materi Pelatihan Herbal</a>
                                               <table class="ml-1">
                                                   <tr>
                                                       <td>a.</td>
                                                       <td><a href="{{ asset('front/informasi/Bab 1.pdf') }}" target="blank"
                                                               style="font-size: 14px">BAB 1</a></td>
                                                   </tr>
                                                   <tr>
                                                       <td>b.</td>
                                                       <td><a href="{{ asset('front/informasi/Bab 2.pdf') }}"
                                                               target="blank" style="font-size: 14px">BAB 2</a></td>
                                                   </tr>
                                                   <tr>
                                                       <td>c.</td>
                                                       <td><a href="{{ asset('front/informasi/Bab 3.pdf') }}"
                                                               target="blank" style="font-size: 14px">BAB 3</a></td>
                                                   </tr>
                                                   <tr>
                                                       <td>d.</td>
                                                       <td><a href="{{ asset('front/informasi/Bab 4.pdf') }}"
                                                               target="blank" style="font-size: 14px">BAB 4</a></td>
                                                   </tr>
                                               </table>
                                           </li>
                                       </ul>

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

                               <div class="col-12 d-flex justify-content-end">
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
                           <div class="row mt-3 equal-height">
                               @foreach ($informasi as $item)
                                   @if ($item['kategori'] == 'Tips')
                                       @php
                                           // Memecah deskripsi berdasarkan tanda "-"
                                           $deskripsiParts = explode('-', $item['deskripsi'], 2);
                                           $tipsText = trim($deskripsiParts[0] ?? '');
                                           $manfaatText = trim($deskripsiParts[1] ?? '');
                                       @endphp
                                       <div class="col-lg-6">
                                           <div style="border-radius: 20px" class="blog__item border p-4">
                                               <div class="blog__item__text m-0 pt-0">
                                                   <ul>
                                                       <li>Tips Herbal</li>
                                                   </ul>
                                                   <h5 class="text-justify"><a href="#">{{ $item['nama'] }}</a></h5>
                                                   <hr>
                                                   <table>
                                                       <tr>
                                                           <td>
                                                               <p class="p-0 m-0">Tips:</p>
                                                           </td>
                                                           <td class="pl-2">
                                                               <p
                                                                   class="clamp-text text-justify overflow-hidden max-h-20 line-clamp-3 m-0">
                                                                   {{ $tipsText }}
                                                               </p>
                                                           </td>
                                                       </tr>
                                                       <tr class="additional-info" style="display: none">
                                                           <td>-</td>
                                                           <td>
                                                               <p class="p-0 m-0">Manfaat:</p>
                                                           </td>
                                                           <td class="pl-2">
                                                               <p
                                                                   class="text-justify overflow-hidden max-h-20 line-clamp-3 m-0">
                                                                   {{ $manfaatText }}
                                                               </p>
                                                           </td>
                                                       </tr>
                                                   </table>
                                                   <div class="d-flex justify-content-end mt-2">
                                                       <a href="#" class="blog__btn toggle-content">Selengkapnya</a>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   @elseif($item['kategori'] == 'Artikel')
                                       <div class="col-lg-6">
                                           <div style="border-radius: 20px" class="blog__item border p-4">
                                               <div class="blog__item__text m-0 pt-0">
                                                   <ul>
                                                       <li>Artikel Herbal</li>
                                                   </ul>
                                                   <h5 class="text-justify"><a href="#">{{ $item['nama'] }}</a></h5>
                                                   <hr>
                                                   <p class="text-justify overflow-hidden max-h-20 line-clamp-3 m-0">
                                                       {{ $item['deskripsi'] }}
                                                   </p>
                                                   <div class="d-flex justify-content-center mt-2">
                                                       <ul class="opt m-0 p-0">
                                                           <li>
                                                               <a
                                                                   href="{{ route('informasi.show', ['id' => $item['id']]) }}">
                                                                   <i class="fas fa-eye"></i>
                                                               </a>
                                                           </li>
                                                       </ul>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   @endif
                               @endforeach
                           </div>

                       </div>
                   </div>
           </section>
           <!-- Blog Section End -->
       </form>

   @endsection
