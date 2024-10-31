   @extends('layouts.frontpage')

   @section('title', 'Shop Page')

   @section('content')


       <!-- Hero Section Begin -->

       <!-- Hero Section End -->

       <!-- Breadcrumb Section Begin -->
       <section style="margin-top: 80px;" class="breadcrumb-section set-bg" data-setbg="{{ asset('bg.jpeg') }}">
           <div class="container">
               <div class="row">
                   <div class="col-lg-12 text-center">
                       <div class="breadcrumb__text">
                           <h2>MediPlants</h2>
                           <div class="breadcrumb__option">
                               <a href="{{ route('/') }}">Beranda</a>
                               <a href="{{ route('tumbuhan.index') }}">Tumbuhan</a>
                               <span>Daftar Pustaka</span>
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
                       <h2 class="noo-sh-title-top mb-4 text-center">Daftar Pustaka</h2>
                       <hr class="p-0 m-0">
                       <div class="container mt-5">
                           <ol>
                               <li>Keputusan Menteri Kesehatan Republik Indonesia No. HK.01.07/MENKES/187/2017 tentang
                                   Formularium Ramuan Obat Tradisional Indonesia.</li>
                               <li>Ahmad, I., Aqil, F., Owais, M., 2006, Modern Phytomedicine: Turning Medicinal Plants into
                                   Drugs, WILEY-VCH Verlag GmbH & Co. KGaA, Weinheim.</li>
                               <li>Al-Achi, Antoine, An Introduction to Botanical Medicines, History, Science, Uses, and
                                   Dangers, Greenwood Publishing Group.</li>
                               <li>Anonim, 2007, Acuan Sediaan Herbal, Volume Ketiga Edisi Pertama, Direktorat Obat Asli
                                   Indonesia, Badan Pengawas Obat dan Makanan RI, Jakarta.</li>
                               <li>Anonim, 2010, Acuan Sediaan Herbal, Volume Kelima Edisi Pertama, Direktorat Obat Asli
                                   Indonesia, Badan Pengawas Obat dan Makanan RI, Jakarta.</li>
                               <li>Anonim, 2008, Taksonomi Koleksi Tanaman Obat Kebun Tanaman Obat Citeureup, Badan Pengawas
                                   Obat dan Makanan RI Direktorat Obat Asli Indonesia, Jakarta.</li>
                               <li>Anonim, 2016, Ramuan Obat Tradisional Indonesia, Serat Centhini, Buku Jampi dan Kitab
                                   Tibb, Badan Pengawas Obat dan Makanan RI, Direktorat Obat Asli Indonesia, Jakarta.</li>
                               <li>Anonim, Teknologi Pascapanen Tanaman Obat, Balai Besar Penelitian dan Pengembangan
                                   Pascapanen Pertanian.</li>
                               <li>Anonim, 2011, Formulatorium Obat Herbal Asli Indonesia, Kementrian Kesehatan Republik
                                   Indonesia, Vol. 1, Direktorat Bina Pelayanan Kesehatan Tradisional, Alternatif dan
                                   Komplementer, Jakarta.</li>
                               <li>Anonim, 2011, Prosiding Ekspose Hasil-Hasil Penelitian, Hutan Lestari untuk Kesejahteraan
                                   Masyarakat, Balai Penelitian Kehutanan Manado, Manado.</li>
                               <li>Anonim, 2010, Guidelines for The Use of Herbal Medicines in Family Health Care, Sixth
                                   Edition, Ministry of Health Republic of Indonesia.</li>
                               <li>Anonim, 1990, Medicinal Plants in Viet Nam, WHO Regional Office for the Western Pacific
                                   Manila, Institute of Materia Medica Hanoi, WHO Regional Publications Western Pacific
                                   Series No 3, Viet Nam.</li>
                               <li>Anonim, 2006. Medicine Plant of Myanmar, Ministry of Health Department of Traditional
                                   Medicine, Myanmar.</li>
                               <li>Anonim, Contraindications and cautions for MediHerb Botanicals, MediHerb.</li>
                               <li>Anonim, 2010, WHO monographs on medicinal plants commonly used in the Newly Independent
                                   States (NIS), WHO Press, Geneva, Switzerland.</li>
                               <li>Anonim, 2009, WHOMedicinal Plants in Papua New Guinea, Information on 126 commonly used
                                   medicinal plants in Papua New Guinea, WHO Press, Geneva, Switzerland.</li>
                               <li>Anonim, 1999, WHO Monographs on Selected Medicinal Plants, Vol.1, WHO, Geneva.</li>
                               <li>Anonim, 2002, WHO Monographs on Selected Medicinal Plants, Vol.2, WHO, Geneva.</li>
                               <li>Anonim, 2007, WHO Monographs on Selected Medicinal Plants, Vol.3, WHO, Geneva.</li>
                               <li>Anonim, 1975, Herbal Pharmacology in the People’s Republic of China, National Academy of
                                   Sciences 2101 Constitution Avenue, N.W. Washington, D.C.</li>
                               <li>Anonim, 2010, Traditional Herbal Remedies for Primary Health Care, World Health
                                   Organization (WHO). Regional Office for South-East Asia.</li>
                               <li>B. Jonas, W., S. Levin, J. (Eds), Essential of Complementary and Alternative Medicine.
                               </li>
                               <li>Bagetta, G., Cosentino, M., Sakurada, T., (Eds), Aromatherapy Basic Mechanisms and
                                   Evidence-Based Clinical Use, CRC Press.</li>
                               <li>Barceloux, Donald G., 2008, Medical toxicology of natural substances : foods, fungi,
                                   medicinal herbs, plants, and venomous animals, John Wiley & Sons.</li>
                               <!-- Remaining list items go here (Items 25-138) -->
                           </ol>

                       </div>
                   </div>
               </div>
           </div>
       </div>

   @endsection
