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
           <section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/breadcrumb.jpg') }}">
               <div class="container">
                   <div class="row">
                       <div class="col-lg-12 text-center">
                           <div class="breadcrumb__text">
                               <h2>MediPlants</h2>
                               <div class="breadcrumb__option">
                                   <a href="{{ route('/') }}">Beranda</a>
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
                           <img class="img-fluid" src="{{ asset('tag_a.png') }}" alt="">
                       </div>
                       <div class="col-lg-9 col-md-7">
                           <div class="row">
                               <div class="col-12">
                                   <div class="blog-box">
                                       <div class="blog-img border">
                                           <img class="w-100 h-100" src="{{ asset('images/blog-img.jpg') }}"
                                               alt="" />
                                       </div>
                                       <div class="blog-content">
                                           <div class="title-blog">
                                               <h3 class="text-center mb-1">{{ $data['title'] }}</h3>
                                               <h6 class="text-center fs-6 font-italic text-muted"
                                                   style="font-size: 0.8rem;">
                                                   {{ $data['nama_latin'] }}
                                               </h6>
                                               <div class="my-4">
                                                   <h5 class="h5">SINONIM:</h5>
                                                   @php
                                                       // Pecah string sinonim menjadi array menggunakan explode
                                                       $sinonimArray = explode('|', $data['sinonim']);
                                                   @endphp
                                                   <div class="row">
                                                       @foreach ($sinonimArray as $index => $sinonim)
                                                           <div class="col-6">
                                                               <p class="paragrafh-dtl font-italic">{{ $sinonim }}
                                                               </p>
                                                           </div>
                                                       @endforeach
                                                   </div>
                                               </div>
                                               {{--  --}}
                                               <div class="my-4">
                                                   <h5 class="h5">NAMA DAERAH:</h5>
                                                   <p class="paragrafh-dtl text-justify">Das-pedas (Aceh), Adas (Melayu),
                                                       Adas manis
                                                       (Minangkabau), Hades (Sunda), Adas
                                                       (Jawa Tengah), Adhas
                                                       (Madura), Adas (Bali), Walawunga (Sumba), Rempusa (Makasar), Adase
                                                       (Bugis). </p>
                                               </div>
                                               {{--  --}}
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
                                                               <p>Plantae (Tumbuhan)</p>
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
                                                               <p>Tracheobionta (Tumbuhan berpembuluh)</p>
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
                                                               <p>Spermatophyta (Tumbuhan berbiji)</p>
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
                                                               <p>Magnoliophyta (Tumbuhan berbunga)</p>
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
                                                               <p>Magnoliopsida (Berkeping dua/ Dikotil)</p>
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
                                                               <p>Rosidae</p>
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
                                                               <p>Apiales</p>
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
                                                               <p>Apiaceae</p>
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
                                                               <p>Foeniculum Mill.</p>
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
                                                               <p>Foeniculum vulgare Mill.</p>
                                                           </td>
                                                       </tr>
                                                   </table>
                                               </div>
                                               {{--  --}}
                                               <div class="my-4">
                                                   <h5 class="h5">DESKRIPSI:</h5>
                                                   <p class="paragrafh-dtl text-justify indent"> Habitus berupa perdu
                                                       tahunan
                                                       dengan tinggi ±2
                                                       m.
                                                       Batang berlubang, beruas,
                                                       beralur, dengan percabangan
                                                       monopodial dan warnanya hijau keputih-putihan. Daun majemuk, menyirip
                                                       ganda, bentuk daun jarum
                                                       dengan ujung
                                                       dan pangkalnya runcing, terdapat aurikel pada ujungnya, tepi rata,
                                                       panjang daun 30 - 50 cm, lebar 15
                                                       - 25
                                                       cm, dan panjang pelepahnya 5 - 7 cm, hijau muda, hijau. Bunga
                                                       majemuk, berbentuk payung, terdapat di
                                                       ujung
                                                       batang, kelopak bunga berbentuk tabung dengan warna hijau, jumlah
                                                       helai mahkota ada lima dan
                                                       berwarna
                                                       kuning. Bentuk buah lonjong, beralur, panjangnya 6 - 10 mm dan lebar
                                                       3 - 4 mm, warna hijau bila muda
                                                       dan
                                                       hijau keabu-abuan bila sudah tua. Akar tunggang dan berwarna putih.
                                                   </p>
                                               </div>
                                               {{--  --}}
                                               <div class="my-4">
                                                   <h5 class="h5">BAGIAN YANG DIGUNAKAN:</h5>
                                                   <p class="paragrafh-dtl text-justify">
                                                       Minyak adas yang diekstraksi dari buah yang matang dan buah yang
                                                       dikeringkan.
                                                   </p>
                                               </div>
                                               {{--  --}}
                                               <div class="my-4">
                                                   <h5 class="h5">KONSTITUEN:</h5>
                                                   <p class="paragrafh-dtl text-justify indent">
                                                       Minyak esensial: Asam-anisat, dipenten. Buah: Asam-anisat, apiol,
                                                       dianetol, asam-askorbat, asam-benzoat. Daun: Avikularin,
                                                       asam-klorogenat, sinarosida, guaoja - verin, kaempferol. Tanaman: 1,8
                                                       - sineol, anetol, anisaldehida, sinarin, dipenten, asam-glikolat,
                                                       kaempferol. Akar: Asam - glikolat, stigmasterol, umbeliferon. Minyak
                                                       esensial biji: Alfa-terpinen, anisaldehida, kamfen, karvon,
                                                       sitronelal, asam-oleat. Tunas: Dilapiol, estragol, eugenol,
                                                       P-anisaldehida, trans - anetol.
                                                   </p>
                                               </div>
                                               {{--  --}}
                                               <div class="my-4">
                                                   <h5 class="h5">INDIKASI:</h5>
                                                   <p class="paragrafh-dtl text-justify indent">
                                                       Abses gigi, Alaktea, Amenorea, Andropause, Anoreksia, Apnea, Asma,
                                                       Bakteria, Batuk, Kram, Bau badan, Bau mulut, Bengkak, Cacingan,
                                                       Cegukan, Demam, Diare, Disentri, Dispepsia, Disuria, Enuresis,
                                                       Frigiditas, Gigitan hewan, Gigitan ular, Gonorea, Hernia, Impotensi,
                                                       Indurasi, Infeksi, Infeksi jamur di dalam atau di bagian tubuh,
                                                       Inflamasi, Jamur, Jantung, Kanker, Kanker diafragma, Kanker gusi,
                                                       Kanker hati, Kanker lambung, Kanker limpa, Kanker payudara, Kanker
                                                       prostat, Kanker Rahim, Kanker tenggorokan, Kanker uvula, Kegemukan,
                                                       Kehausan, Kejantanan, Keriput, Kista pada kulit, Kolera, Kolik,
                                                       Kolitis, Kusta, Kutil genitalis, Leukemia, Luka, Mabuk perjalanan,
                                                       Masuk angin, Mempermudah kelahiran, Menopause, Mual, Mual saat hamil
                                                       muda, Mulas, Muntah, Nyeri, Nyeri abdomen, Nyeri haid, Nyeri
                                                       punggung, Nyeri samping, Nyeri telinga, Oftalmia, Oligogalaktia,
                                                       Osteoporosis, Penyakit bronkus, Penyakit ginjal, Penyakit hati,
                                                       Penyakit kandung empedu, Penyakit kelamin, Penyakit kelopak mata,
                                                       Penyakit konjungtiva, Penyakit kuning, Penyakit lambung, Penyakit
                                                       limpa, Penyakit paru, Penyakit pernafasan, Penyakit Rahim, Penyakit
                                                       rongga mulut, Penyakit tenggorokan, Penyakit usus, Perasaan penuh
                                                       atau tekanan di telinga, Radang selaput lendir hidung dan
                                                       tenggorokan, Retensi cairan, Sakit gigi, Sakit kepala, Selesma,
                                                       Selulit, Sendawa, Sindrom iritasi usus besar, Skirus, Spasme, Sperma
                                                       encer, Stranguria, Tenesmus, Virus.
                                                   </p>
                                               </div>
                                               {{--  --}}
                                               <div class="my-4">
                                                   <h5 class="h5">
                                                       PENGGUNAAN TRADISIONAL:
                                                   </h5>
                                                   <p class="paragrafh-dtl text-justify indent">
                                                       Abses gigi, Alaktea, Amenorea, Andropause, Anoreksia, Apnea, Asma,
                                                       Bakteria, Batuk, Kram, Bau badan, Bau mulut, Bengkak, Cacingan,
                                                       Cegukan, Demam, Diare, Disentri, Dispepsia, Disuria, Enuresis,
                                                       Frigiditas, Gigitan hewan, Gigitan ular, Gonorea, Hernia, Impotensi,
                                                       Indurasi, Infeksi, Infeksi jamur di dalam atau di bagian tubuh,
                                                       Inflamasi, Jamur, Jantung, Kanker, Kanker diafragma, Kanker gusi,
                                                       Kanker hati, Kanker
                                                   </p>
                                               </div>
                                               {{--  --}}
                                               <div class="my-4">
                                                   <h5 class="h5">
                                                       DOSIS HARIAN:
                                                   </h5>
                                                   <p class="paragrafh-dtl text-justify indent">
                                                       Abses gigi, Alaktea, Amenorea, Andropause, Anoreksia, Apnea, Asma,
                                                       Bakteria, Batuk, Kram, Bau badan, Bau mulut, Bengkak, Cacingan,
                                                       Cegukan, Demam, Diare, Disentri, Dispepsia, Disuria, Enuresis,
                                                       Frigiditas, Gigitan hewan, Gigitan ular, Gonorea, Hernia, Impotensi,
                                                       Indurasi, Infeksi, Infeksi jamur di dalam atau di bagian tubuh,
                                                       Inflamasi, Jamur, Jantung, Kanker, Kanker diafragma, Kanker gusi,
                                                       Kanker hati, Kanker
                                                   </p>
                                               </div>
                                               {{--  --}}
                                               <div class="my-4">
                                                   <h5 class="h5">
                                                       KONTRAINDIKASI, INTERAKSI, DAN EFEK SAMPING:
                                                   </h5>
                                                   <p class="paragrafh-dtl text-justify indent">
                                                       “Bahaya dan/ efek samping yang tidak dikenal untuk dosis terapi yang
                                                       tepat". Tidak ada kontraindikasi untuk teh herbal (ataupun sediaan
                                                       yang lainnya yang menyediakan dosis yang sama dengan minyak
                                                       esensial), namun bentuk sediaan lainnya (misalnya, minyak esensial)
                                                       harus dihindari selama kehamilan. Minyak esensial juga harus
                                                       dihindari pada bayi dan anak-anak kecil. Pada ibu menyusui yang
                                                       menggunakan adas manis sebagai minuman teh untuk merangsang laktasi,
                                                       akan mengalami gangguan sementara SSP, emesis, lesu, ASI berkurang,
                                                       kegelisahan, dan ketidakaktifan bayi yang baru lahir (berusia 15 - 20
                                                       hari), mungkin karena anetol dalam susu. Harus dihindari oleh wanita
                                                       yang sedang hamil, menyusui, atau dengan kanker yang ketergantungan
                                                       estrogen. Dampak buruk: reaksi alergi kulit dan paru-paru. Adas
                                                       memiliki risiko alergi rendah. Adas dapat menyebabkan asma dengan
                                                       disposisi atopik. Biji tidak dikonsumsi lebih dari 6 g biji/ hari,
                                                       kemungkinan karena anetol estrogenik dan estragol karsinogenik. "Obat
                                                       ini dikontraindikasikan pada radang ginjal", karena minyak esensial
                                                       dapat meningkatkan peradangan yang disebabkan iritasi epitel. Ekstrak
                                                       adas dapat mendorong estrus (gairah birahi wanita) dan menyebabkan
                                                       pertumbuhan kelenjar susu. Dosis moderat ekstrak aseton meningkatkan
                                                       berat kelenjar susu pada tikus. LD50 Minyak Esensial 3.120 = 4.500
                                                       ml/ kg secara oral, LD50 anetol 2.090 mg/ kg ORL tikus, LD50 biji
                                                       adas tingtur => 3.000 mg/ kg ORL tikus (setara dengan 30.000 bibit).
                                                       Penelitian awal pada hewan telah menunjukkan bahwa adas dapat
                                                       mengurangi penyerapan Siprofloksasin (Antibiotik yang digunakan untuk
                                                       mengobati infeksi bakteri). Siprofloksasin menembus berbagai jaringan
                                                       yang sulit dijangkau dalam tubuh dan membunuh berbagai macam bakteri.
                                                       Interaksi ini mungkin karena herbal ini kaya dengan kandungan
                                                       mineral. Orang yang mengkonsumsi obat Siprofloksasin sebaiknya
                                                       menghindari penggunaan adas sampai diketahui lebih jauh lagi
                                                       informasinya.
                                                   </p>
                                               </div>
                                               {{--  --}}
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
