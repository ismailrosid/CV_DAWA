   @extends('layouts.frontpage')

   @section('title', 'Shop Page')

   @section('content')


       <!-- Hero Section Begin -->

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
                       <div class="banner-frame"> <img class="img-fluid" src="images/about-img.jpg" alt="" />
                       </div>
                   </div>
                   <div class="col-lg-6">
                       <h2 class="noo-sh-title-top mb-3">Kami adalah <span>MediPlants</span></h2>
                       <p class="text-justify">
                           "MediPlants berdiri dengan komitmen kuat untuk menghadirkan solusi kesehatan alami yang
                           diambil langsung dari kebaikan alam. Kami percaya bahwa kekuatan penyembuhan yang terbaik
                           datang dari alam, dan dengan semangat itu, kami menyediakan obat-obatan herbal yang telah
                           teruji manfaatnya untuk membantu Anda menjaga keseimbangan tubuh serta meningkatkan kualitas
                           hidup Anda."
                       </p>
                       <p class="text-justify">
                           Di MediPlants, kami percaya bahwa kesehatan adalah investasi terbaik yang bisa dilakukan, dan
                           kami berkomitmen untuk menyediakan hanya yang terbaik. Setiap produk herbal yang kami
                           tawarkan dipilih dengan teliti dari berbagai sumber tanaman alami, diproses dengan teknologi
                           terkini, dan disiapkan untuk memberikan manfaat kesehatan yang optimal bagi tubuh Anda.
                       </p>
                       <a class="btn hvr-hover" href="#">Baca Selengkapnya</a>
                   </div>
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
       </div>

   @endsection
