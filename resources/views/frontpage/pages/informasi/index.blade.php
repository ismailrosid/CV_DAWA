   @extends('layouts.frontpage')

   @section('title', 'Herbal Page')

   @section('content')


       <!-- Hero Section Begin -->

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
                               <input type="text" name="name" placeholder="Cari Tips dan Info Herbal berdasarkan nama"
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
                                       <li><a href="#" class="text-success">Semua</a></li>
                                       <li><a href="#">Tips Herbal</a></li>
                                       <li><a href="#">Artikel Herbal</a></li>
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
                                                   <td><a href="{{ asset('front/informasi/Bab 2.pdf') }}" target="blank"
                                                           style="font-size: 14px">BAB 2</a></td>
                                               </tr>
                                               <tr>
                                                   <td>c.</td>
                                                   <td><a href="{{ asset('front/informasi/Bab 3.pdf') }}" target="blank"
                                                           style="font-size: 14px">BAB 3</a></td>
                                               </tr>
                                               <tr>
                                                   <td>d.</td>
                                                   <td><a href="{{ asset('front/informasi/Bab 4.pdf') }}" target="blank"
                                                           style="font-size: 14px">BAB 4</a></td>
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
                           <div class="col-lg-6">
                               <div style="border-radius: 20px" class="blog__item border p-4">
                                   <div class="blog__item__text m-0 pt-0">
                                       <ul>
                                           <li></i> Tips Herbal</li>
                                       </ul>
                                       <h5 class="text-justify"><a href="#">Mulai Hari dengan Minuman Herbal
                                               Hangat</a></h5>
                                       <hr>
                                       <table>
                                           <tr>
                                               <td>-</td>
                                               <td>
                                                   <p class="p-0 m-0">Tips:</p>
                                               </td>
                                               <td class="pl-2">
                                                   <p
                                                       class="clamp-text text-justify overflow-hidden max-h-20 line-clamp-3 m-0">
                                                       Awali pagi dengan secangkir teh herbal seperti teh jahe,
                                                       peppermint, atau
                                                       lemon balm. Minuman herbal hangat dapat membantu membersihkan
                                                       pencernaan,
                                                       meningkatkan sirkulasi darah, dan memberikan energi alami untuk
                                                       memulai hari.
                                                   </p>
                                               </td>
                                           </tr>
                                           <tr class="additional-info" style="display: none">
                                               <td>-</td>
                                               <td>
                                                   <p class="p-0 m-0">Manfaat:</p>
                                               </td>
                                               <td class="pl-2">
                                                   <p class="text-justify overflow-hidden max-h-20 line-clamp-3 m-0">
                                                       Mendukung metabolisme, meredakan peradangan, dan
                                                       meningkatkan fokus.
                                                   </p>
                                               </td>
                                           </tr>
                                       </table>
                                       <div class="d-flex justify-content-end mt-2">
                                           <a href="#" class="blog__btn toggle-content">Selengkapnya<span
                                                   class="arrow_right"></span></a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div style="border-radius: 20px" class="blog__item border p-4">
                                   <div class="blog__item__text m-0 pt-0">
                                       <ul>
                                           <li></i>Artikel Herbal</li>
                                       </ul>
                                       <h5 class="text-justify"><a href="#">Herbal untuk Meningkatkan Kekebalan
                                               Tubuh</a></h5>
                                       <hr>
                                       <p class="text-justify overflow-hidden max-h-20 line-clamp-3 m-0">
                                           Musim flu sering kali membawa tantangan bagi sistem kekebalan
                                           tubuh kita. Ketika cuaca berubah, tubuh menjadi lebih rentan
                                           terhadap infeksi, dan menjaga kesehatan menjadi prioritas. Salah satu
                                           cara yang populer dan efektif untuk memperkuat pertahanan tubuh
                                           adalah dengan memanfaatkan herbal. Beberapa herbal yang dikenal
                                           mampu mendukung sistem kekebalan tubuh antara lain Echinacea,
                                           Astragalus, dan jahe. Herbal-herbal ini tidak hanya membantu
                                           melawan penyakit, tetapi juga bekerja secara alami dalam
                                           meningkatkan ketahanan tubuh terhadap serangan virus dan bakteri.
                                           Mari kita lihat lebih dalam bagaimana ketiganya berperan dalam
                                           menjaga kesehatan kita.
                                       </p>
                                       <div class="d-flex justify-content-center mt-2">
                                           <ul class="opt m-0 p-0">
                                               <li>
                                                   <a class="" target="" href="">
                                                       <i class="fas fa-eye"></i>
                                                   </a>
                                               </li>
                                           </ul>
                                       </div>
                                   </div>
                               </div>
                           </div>


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
       </section>
       <!-- Blog Section End -->


   @endsection
