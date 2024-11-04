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
                               <a href="{{ url('/') }}">Beranda</a>
                               <span>Tentang Kami</span>
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
               <div class="row">
                   <div class="col-lg-6">
                       <h2 class="noo-sh-title-top mb-3">Sejarah</h2>
                       <p class="text-justify" style="text-indent: 2em;">
                           CV. Dawa Sukses Mandiri didirikan pada tahun 2006 oleh Abu Adam Ridwan & Ummu Adam Khairunnisaa'
                           dengan semangat untuk “Back to Basic” menghadirkan kembali manfaat herbal ke dalam gaya hidup
                           modern.
                       </p>
                       <p class="text-justify" style="text-indent: 2em;">
                           Berangkat dari pengalaman pribadi dan ketertarikan mendalam terhadap pengobatan alami, kami
                           memulai perjalanan pengetahuan kami dari sebuah buku kecil yang menjelaskan tentang manfaat
                           tumbuhan obat. Berawal sebagai usaha keluarga kecil, kami memulai perjalanan kami dengan
                           memproduksi kapsul serbuk Habbatus Sauda yang terus kami kembangkan.
                       </p>
                       <p class="text-justify" style="text-indent: 2em;">
                           Usaha kami tumbuh berkat bimbingan pemerintah (Sudinkes Jakarta, BBPOM Jakarta, BPOM di Bogor,
                           dan BPOM RI) serta kepercayaan masyarakat yang semakin memahami pentingnya pendekatan kesehatan
                           alami.
                       </p>

                   </div>
                   <div class="col-lg-6 d-flex justify-content-center align-items-center">
                       <div class="banner-frame"> <img class="img-fluid" src="{{ asset('front/img/about.jpeg') }}"
                               alt="" />
                       </div>
                   </div>
               </div>
               <div class="row">
                   {{-- <div class="col-lg-6">
                       <div class="banner-frame"> <img class="img-fluid" src="images/about-img.jpg" alt="" />
                       </div>
                   </div> --}}
                   <div class="col-12">
                       <h2 class="noo-sh-title-top mb-3">Visi</h2>
                       <p class="text-justify" style="text-indent: 2em;">
                           Menjadikan tanaman obat alami sebagai kebutuhan utama dalam
                           pengobatan dan pemeliharaan kesehatan masyarakat.
                       </p>
                       <h2 class="noo-sh-title-top mb-3">Misi</h2>
                       <ul style=" list-style-type: disc; padding-left: 20px; color: #666666;">
                           <li style="margin-bottom: 10px;">Menjadi produsen herbal terlengkap dengan berbagai pilihan
                               produk yang sesuai dengan
                               kebutuhan konsumen.</li>
                           <li style="margin-bottom: 10px;">Mengembangkan dan memproduksi obat-obatan herbal yang aman dan
                               efektif sesuai dengan
                               permintaan konsumen.</li>
                           <li style="margin-bottom: 10px;">Meningkatkan kualitas produk herbal melalui inovasi serta
                               pengendalian mutu yang ketat dan
                               berkelanjutan.</li>
                           <li style="margin-bottom: 10px;">Membangun kemitraan yang kuat dengan herbalis, terapis, dan
                               lembaga kesehatan untuk mendukung
                               pengembangan dan penerapan produk herbal yang berstandar tinggi.</li>
                           <li style="margin-bottom: 10px;">Menghadirkan informasi kearifan lokal dan ilmu pengetahuan
                               modern pada website ini .</li>
                       </ul>
                       <h2 class="noo-sh-title-top mt-5 mb-3">Natural Herbal Medicine</h2>
                       <p class="text-justify" style="text-indent: 2em;">
                           Dengan semangat untuk menghadirkan kesehatan alami, kami
                           berusaha kerja keras, inovasi, dan dedikasi untuk menggabungkan
                           kearifan lokal dan ilmu pengetahuan modern agar mendapatkan
                           produk herbal yang bermanfaat bagi masyarakat.
                       </p>

                   </div>
                   <div class="row my-5">
                       <div class="col-sm-6 col-lg-4">
                           <div class="service-block-inner">
                               <h3>Kami Terpercaya</h3>
                               <p class="text-justify">
                                   Mendplants selalu berkomitmen untuk menyediakan obat herbal yang aman dan berkualitas.
                                   Dengan fokus pada kualitas dan kepercayaan, kami memastikan bahwa setiap produk yang Anda
                                   terima sudah melalui pengujian.
                               </p>
                           </div>
                       </div>
                       <div class="col-sm-6 col-lg-4">
                           <div class="service-block-inner">
                               <h3>Kami Profesional</h3>
                               <p class="text-justify">
                                   Tim kami terdiri dari ahli herbal berpengalaman yang bekerja dengan standar tinggi. Kami
                                   selalu menjaga profesionalisme dalam setiap proses produksi untuk memastikan Anda
                                   mendapatkan yang terbaik dari alam.
                               </p>
                           </div>
                       </div>
                       <div class="col-sm-6 col-lg-4">
                           <div class="service-block-inner">
                               <h3>Kami Ahli</h3>
                               <p class="text-justify">
                                   Dengan pengetahuan luas tentang tanaman obat, kami menghadirkan solusi herbal alami yang
                                   efektif dan bermanfaat. Keahlian kami membantu memberikan produk yang tepat untuk
                                   kebutuhan kesehatan Anda.
                               </p>
                           </div>
                       </div>
                   </div>

               </div>

               <div class="row">
                   <div class="col-12">
                       <hr class="p-0 m-0">
                       <p style="font-style: italic; font-size: 0.8rem;" class="text-center p-0 m-0 mt-4">
                           **Terima kasih telah mempercayakan kesehatan Anda pada produk-
                           produk herbal kami**
                       </p>
                   </div>
               </div>
           </div>
       </div>

   @endsection
