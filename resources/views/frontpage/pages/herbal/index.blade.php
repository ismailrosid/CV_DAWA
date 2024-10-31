   @extends('layouts.frontpage')

   @section('title', 'Shop Page')

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
                                   <span class="arrow_carrot-down"></span>
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
       <section class="breadcrumb-section set-bg" data-setbg="bg.jpeg">
           <div class="container">
               <div class="row">
                   <div class="col-lg-12 text-center">
                       <div class="breadcrumb__text">
                           <h2>MediPlants</h2>
                           <div class="breadcrumb__option">
                               <a href="{{ url('/') }}">Beranda</a>
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
                                           <a>Materi Pelatihan Herbal</a>
                                           <table class="ml-1">
                                               <tr>
                                                   <td>a.</td>
                                                   <td><a href="{{ asset('Bab 1.pdf') }}" target="blank" style="font-size: 14px">BAB 1</a></td>
                                               </tr>
                                               <tr>
                                                   <td>b.</td>
                                                   <td><a href="{{ asset('Bab 2.pdf') }}" target="blank"  style="font-size: 14px">BAB 2</a></td>
                                               </tr>
                                               <tr>
                                                   <td>c.</td>
                                                   <td><a href="{{ asset('Bab 3.pdf') }}" target="blank"  style="font-size: 14px">BAB 3</a></td>
                                               </tr>
                                               <tr>
                                                   <td>d.</td>
                                                   <td><a href="{{ asset('Bab 4.pdf') }}" target="blank"  style="font-size: 14px">BAB 4</a></td>
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
                       <div class="row mt-3">
                           <div class="col-lg-6">
                               <div style="border-radius: 20px" class="blog__item border p-4">
                                   <div class="blog__item__text m-0 pt-0">
                                       <ul>
                                           <li></i> Tips Herbal</li>
                                       </ul>
                                       <h5 class="text-justify"><a href="#">Mulai Hari dengan Minuman Herbal
                                               Hangat</a></h5>
                                       <hr>
                                       <p class="text-justify overflow-hidden max-h-20 line-clamp-3 m-0">Sed quia non
                                           numquam
                                           modi tempora indunt ut labore et dolore magnam aliquam
                                           quaerat Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae,
                                           soluta. Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
                                           atque
                                           alias ad ducimus? Esse architecto quidem, quibusdam voluptates omnis
                                           doloribus!
                                       </p>
                                       <div class="d-flex justify-content-end mt-2">
                                           <a href="#" class="blog__btn">Selengkapnya<span
                                                   class="arrow_right"></span></a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div style="border-radius: 20px" class="blog__item border p-4">
                                   <div class="blog__item__text m-0 pt-0">
                                       <ul>
                                           <li></i> Info Herbal</li>
                                       </ul>
                                       <h5 class="text-justify"><a href="#">Herbal untuk Meningkatkan Kekebalan
                                               Tubuh</a></h5>
                                       <hr>
                                       <p class="text-justify overflow-hidden max-h-20 line-clamp-3 m-0">Sed quia non
                                           numquam
                                           modi tempora indunt ut labore et dolore magnam aliquam
                                           quaerat Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae,
                                           soluta. Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
                                           atque
                                           alias ad ducimus? Esse architecto quidem, quibusdam voluptates omnis
                                           doloribus!
                                       </p>
                                       <div class="d-flex justify-content-end mt-2">
                                           <a href="#" class="blog__btn">Selengkapnya<span
                                                   class="arrow_right"></span></a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div style="border-radius: 20px" class="blog__item border p-4">
                                   <div class="blog__item__text m-0 pt-0">
                                       <ul>
                                           <li></i> Info Herbal</li>
                                       </ul>
                                       <h5 class="text-justify"><a href="#">Herbal untuk Meningkatkan Kekebalan
                                               Tubuh</a></h5>
                                       <hr>
                                       <p class="text-justify overflow-hidden max-h-20 line-clamp-3 m-0">Sed quia non
                                           numquam
                                           modi tempora indunt ut labore et dolore magnam aliquam
                                           quaerat Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae,
                                           soluta. Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
                                           atque
                                           alias ad ducimus? Esse architecto quidem, quibusdam voluptates omnis
                                           doloribus!
                                       </p>
                                       <div class="d-flex justify-content-end mt-2">
                                           <a href="#" class="blog__btn">Selengkapnya<span
                                                   class="arrow_right"></span></a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div style="border-radius: 20px" class="blog__item border p-4">
                                   <div class="blog__item__text m-0 pt-0">
                                       <ul>
                                           <li></i> Info Herbal</li>
                                       </ul>
                                       <h5 class="text-justify"><a href="#">Herbal untuk Meningkatkan Kekebalan
                                               Tubuh</a></h5>
                                       <hr>
                                       <p class="text-justify overflow-hidden max-h-20 line-clamp-3 m-0">Sed quia non
                                           numquam
                                           modi tempora indunt ut labore et dolore magnam aliquam
                                           quaerat Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae,
                                           soluta. Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
                                           atque
                                           alias ad ducimus? Esse architecto quidem, quibusdam voluptates omnis
                                           doloribus!
                                       </p>
                                       <div class="d-flex justify-content-end mt-2">
                                           <a href="#" class="blog__btn">Selengkapnya<span
                                                   class="arrow_right"></span></a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div style="border-radius: 20px" class="blog__item border p-4">
                                   <div class="blog__item__text m-0 pt-0">
                                       <ul>
                                           <li></i> Info Herbal</li>
                                       </ul>
                                       <h5 class="text-justify"><a href="#">Herbal untuk Meningkatkan Kekebalan
                                               Tubuh</a></h5>
                                       <hr>
                                       <p class="text-justify overflow-hidden max-h-20 line-clamp-3 m-0">Sed quia non
                                           numquam
                                           modi tempora indunt ut labore et dolore magnam aliquam
                                           quaerat Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae,
                                           soluta. Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
                                           atque
                                           alias ad ducimus? Esse architecto quidem, quibusdam voluptates omnis
                                           doloribus!
                                       </p>
                                       <div class="d-flex justify-content-end mt-2">
                                           <a href="#" class="blog__btn">Selengkapnya<span
                                                   class="arrow_right"></span></a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div style="border-radius: 20px" class="blog__item border p-4">
                                   <div class="blog__item__text m-0 pt-0">
                                       <ul>
                                           <li></i> Info Herbal</li>
                                       </ul>
                                       <h5 class="text-justify"><a href="#">Herbal untuk Meningkatkan Kekebalan
                                               Tubuh</a></h5>
                                       <hr>
                                       <p class="text-justify overflow-hidden max-h-20 line-clamp-3 m-0">Sed quia non
                                           numquam
                                           modi tempora indunt ut labore et dolore magnam aliquam
                                           quaerat Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae,
                                           soluta. Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
                                           atque
                                           alias ad ducimus? Esse architecto quidem, quibusdam voluptates omnis
                                           doloribus!
                                       </p>
                                       <div class="d-flex justify-content-end mt-2">
                                           <a href="#" class="blog__btn">Selengkapnya<span
                                                   class="arrow_right"></span></a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div style="border-radius: 20px" class="blog__item border p-4">
                                   <div class="blog__item__text m-0 pt-0">
                                       <ul>
                                           <li></i> Info Herbal</li>
                                       </ul>
                                       <h5 class="text-justify"><a href="#">Herbal untuk Meningkatkan Kekebalan
                                               Tubuh</a></h5>
                                       <hr>
                                       <p class="text-justify overflow-hidden max-h-20 line-clamp-3 m-0">Sed quia non
                                           numquam
                                           modi tempora indunt ut labore et dolore magnam aliquam
                                           quaerat Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae,
                                           soluta. Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
                                           atque
                                           alias ad ducimus? Esse architecto quidem, quibusdam voluptates omnis
                                           doloribus!
                                       </p>
                                       <div class="d-flex justify-content-end mt-2">
                                           <a href="#" class="blog__btn">Selengkapnya<span
                                                   class="arrow_right"></span></a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-6">
                               <div style="border-radius: 20px" class="blog__item border p-4">
                                   <div class="blog__item__text m-0 pt-0">
                                       <ul>
                                           <li></i> Info Herbal</li>
                                       </ul>
                                       <h5 class="text-justify"><a href="#">Herbal untuk Meningkatkan Kekebalan
                                               Tubuh</a></h5>
                                       <hr>
                                       <p class="text-justify overflow-hidden max-h-20 line-clamp-3 m-0">Sed quia non
                                           numquam
                                           modi tempora indunt ut labore et dolore magnam aliquam
                                           quaerat Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae,
                                           soluta. Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore
                                           atque
                                           alias ad ducimus? Esse architecto quidem, quibusdam voluptates omnis
                                           doloribus!
                                       </p>
                                       <div class="d-flex justify-content-end mt-2">
                                           <a href="#" class="blog__btn">Selengkapnya<span
                                                   class="arrow_right"></span></a>
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
