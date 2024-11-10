   @extends('layouts.frontpage')

   @section('title', 'Shop Page')

   @section('content')


       <!-- Hero Section Begin -->

       <!-- Hero Section End -->

       <!-- Breadcrumb Section Begin -->
       <section style="margin-top: 80px;" class="breadcrumb-section set-bg"
           data-setbg="{{ asset('front/img/breadcrumb.jpeg') }}">
           <div class="container">
               <div class="row">
                   <div class="col-lg-12 text-center">
                       <div class="breadcrumb__text">
                           <h2>MediPlants</h2>
                           <div class="breadcrumb__option">
                               <a href="{{ url('beranda') }}">Beranda</a>
                               <span>Kemitraan</span>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       <!-- Breadcrumb Section End -->

       <!-- Product Section Begin -->
       <!-- Start About Page  -->
       <div class="about-box-main">
           <div class="container">
               <div class="row p-5 mx-5">
                   <div class="col-12">
                       <h2 class="noo-sh-title-top mb-4 text-center">KEMITRAAN BERSAMA KAMI</h2>
                       <hr>
                       <p style="font-weight: bold;" class="p-0 m-0 text-dark mb-2">Mitra Kami, Kesuksesan Bersama!</p>
                       <p class="text-justify" style="text-indent: 2em;">
                           Bergabunglah dengan kami untuk meningkatkan pelayanan kesehatan dengan produk herbal berkualitas.
                           Kami percaya bahwa kemitraan yang kuat dapat memberikan manfaat lebih besar bagi pasien dan
                           bisnis Anda.
                       </p>

                       <p style="font-weight: bold;" class="p-0 m-0 text-dark mb-2">Menyediakan Produk Berkualitas Tinggi
                       </p>
                       <p class="text-justify" style="text-indent: 2em;">
                           Kami menawarkan kapsul ekstrak herbal yang terbuat dari bahan alami pilihan dan telah terbukti
                           aman
                           serta efektif. Dengan produk kami, Anda mendapatkan solusi terbaik untuk kebutuhan kesehatan
                           pasien Anda.
                       </p>

                       <p style="font-weight: bold;" class="p-0 m-0 text-dark mb-2">Dukungan dan Pelatihan Khusus</p>
                       <p class="text-justify" style="text-indent: 2em;">
                           Kami tidak hanya menyediakan produk, tetapi juga dukungan penuh untuk mitra kami. Tim kami siap
                           memberikan
                           pelatihan dan konsultasi untuk membantu Anda memahami produk kami dan cara terbaik untuk
                           mengintegrasikannya
                           ke dalam praktik klinik Anda.
                       </p>

                       <p style="font-weight: bold;" class="p-0 m-0 text-dark mb-2">Program Kemitraan yang Menguntungkan</p>
                       <p class="text-justify" style="text-indent: 2em;">
                           Kami menawarkan berbagai keuntungan dan insentif bagi klinik yang bergabung dalam kemitraan ini.
                           Diskon khusus yang dapat membantu meningkatkan pendapatan Anda dan memperkuat hubungan bisnis
                           kita.
                       </p>

                       <p style="font-weight: bold;" class="p-0 m-0 text-dark mb-2">Bersama untuk Kesehatan yang Lebih Baik
                       </p>
                       <p class="text-justify mb-3" style="text-indent: 2em;">
                           Mari kita bersama-sama menciptakan lingkungan kesehatan yang lebih baik dengan produk herbal yang
                           berkualitas.
                           Hubungi kami hari ini untuk mengetahui lebih lanjut tentang peluang kemitraan yang menarik ini!
                       </p>
                       <hr class="p-0 m-0 my-4">
                       <div class="d-flex justify-content-end mt-5 align-items-center">
                           <div class="text-center border border-2 p-4 rounded-lg">
                               <h5 style="font-weight: bold" class="text-dark">Surat Penawaran</h5>
                               <p class="p-0 m-0 text-dark mt-2">Download</p>
                           </div>
                       </div>

                   </div>
               </div>
           </div>
       </div>

   @endsection
