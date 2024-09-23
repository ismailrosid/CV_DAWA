<!DOCTYPE html>
<html>

<head>
    <title>{{ $title }}</title>
</head>

<style>
    html body {
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    .container {
        /* Kontainer mengambil 100% dari lebar yang tersedia */
        padding: 96px;
        /* Padding 1 inci di semua sisi */
        box-sizing: border-box;
        /* Pastikan padding dihitung dalam ukuran total */
        margin: 0 auto;
        /* Kontainer ditampilkan di tengah */
    }


    .text-center {
        text-align: center !important;
    }

    .fw-bold {
        font-weight: 700 !important;
    }

    .fst-italic {
        font-style: italic !important;
    }

    .mb-3 {
        margin-bottom: 1rem !important;
    }

    /* Style untuk .row */
    .row {
        width: 100%;
        clear: both;
        margin-bottom: 10px;
        /* Spasi antar baris */
    }

    /* Style untuk .col-6 */
    .col-6 {
        float: left;
        width: 50%;
        /* Setengah dari row */
        box-sizing: border-box;
        /* Agar padding tidak menambah lebar total */
        padding: 5px;
        /* Opsional, untuk spasi dalam kolom */
        text-align: left;
        /* Untuk memastikan teks rata kiri */
    }

    /* Clearfix setelah setiap dua kolom */
    .clearfix {
        clear: both;
        display: block;
        content: "";
    }

    .paragrafh {
        line-height: 2;
        /* Line-height untuk spasi antar baris yang nyaman */
        /* Line-height 1 untuk spasi baris tunggal */
        font-size: 9pt;
        text-align: justify;
        /* Rata tengah */
        text-indent: 50px;
        /* Indentasi awal paragraf */
        margin: 0 auto;
        /* Untuk memastikan paragraf berada di tengah */
        max-width: 800px;
        /* Membatasi lebar paragraf agar tidak terlalu lebar */
    }

    .title {
        font-weight: bold;
        /* Membuat teks tebal (bold) */
        font-size: 11pt;
        /* Ukuran teks 11pt */
    }

    table {
        width: 100%;
        /* Lebar tabel penuh */
        border-collapse: collapse;
        /* Menghilangkan jarak antar border */
    }

    td {
        padding: 3px;
        /* Spasi di dalam setiap sel */
    }

    .fs-p {
        font-size: 9pt;
    }
</style>

<body>
    <!-- Gambar kategori -->
    <section style="height: 100%;">
        <div style="height: 100%; position: relative;">
            <div
                style="
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          text-align: center;
        ">
                <img class="img-fluid" src="catg_name.JPG" alt="category name" />
            </div>
        </div>

    </section>
    <!-- Title -->
    <section style="height: 100%;">
        <div style="height: 100%;  position: relative;">
            <div
                style="
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          text-align: center;
        ">
                <div class="text-center mb-3">
                    <div class="title">1. {{ $title }}</div>
                    <div class="fst-italic fs-p">{{ $nama_latin }}</div>
                </div>
                <img class="img-fluid" src="p.JPG" alt="category name" />
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            {{-- Sinonim --}}
            <div>
                {{-- Sinonim --}}
                <div>
                    <h3 class="title">SINONIM:</h3>
                    <div class="row fst-italic" style="font-size: 0.8rem">
                        @foreach (explode('|', $sinonim) as $sin)
                            <div class="col-6">{{ trim($sin) }}</div>
                            @if ($loop->iteration % 2 == 0)
                                <div class="clearfix"></div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            {{-- Nama Daerah --}}
            <div>
                <h3 class="title">NAMA DAERAH</h3>
                {{--  --}}
                <p class="paragrafh">Das-pedas (Aceh), Adas (Melayu), Adas manis (Minangkabau), Hades (Sunda), Adas
                    (Jawa Tengah), Adhas
                    (Madura), Adas (Bali), Walawunga (Sumba), Rempusa (Makasar), Adase (Bugis). </p>
                {{--  --}}
            </div>
            {{-- Klasifikasi --}}
            <div>
                <h3 class="title">KLASIFIKASI:</h3>
                <table>
                    <tr class="fs-p">
                        <td>Kerajaan</td>
                        <td>:</td>
                        <td>Plantae (Tumbuhan)</td>
                    </tr>
                    <tr class="fs-p">
                        <td>Sub Kerajaan</td>
                        <td>:</td>
                        <td>Tracheobionta (Tumbuhan berpembuluh)</td>
                    </tr>
                    <tr class="fs-p">
                        <td>Super Divisi</td>
                        <td>:</td>
                        <td>Spermatophyta (Tumbuhan berbiji)</td>
                    </tr>
                    <tr class="fs-p">
                        <td>Divisi</td>
                        <td>:</td>
                        <td>Magnoliophyta (Tumbuhan berbunga)</td>
                    </tr>
                    <tr class="fs-p">
                        <td>Kelas</td>
                        <td>:</td>
                        <td>Magnoliopsida (Berkeping dua/ Dikotil)</td>
                    </tr>
                    <tr class="fs-p">
                        <td>Sub Kelas</td>
                        <td>:</td>
                        <td>Rosidae</td>
                    </tr>
                    <tr class="fs-p">
                        <td>Ordo</td>
                        <td>:</td>
                        <td>Apiales</td>
                    </tr>
                    <tr class="fs-p">
                        <td>Famili</td>
                        <td>:</td>
                        <td>Apiaceae</td>
                    </tr>
                    <tr class="fs-p">
                        <td>Genus</td>
                        <td>:</td>
                        <td>Foeniculum Mill.</td>
                    </tr>
                    <tr class="fs-p">
                        <td>Spesies</td>
                        <td>:</td>
                        <td>Foeniculum vulgare Mill.</td>
                    </tr>
                </table>
            </div>
            {{-- Deskripsi --}}
            <div>
                <h3 class="title">DESKRIPSI:</h3>
                {{--  --}}
                <p class="paragrafh"> Habitus berupa perdu tahunan dengan tinggi ±2 m. Batang berlubang, beruas,
                    beralur, dengan percabangan
                    monopodial dan warnanya hijau keputih-putihan. Daun majemuk, menyirip ganda, bentuk daun jarum
                    dengan ujung
                    dan pangkalnya runcing, terdapat aurikel pada ujungnya, tepi rata, panjang daun 30 - 50 cm, lebar 15
                    - 25
                    cm, dan panjang pelepahnya 5 - 7 cm, hijau muda, hijau. Bunga majemuk, berbentuk payung, terdapat di
                    ujung
                    batang, kelopak bunga berbentuk tabung dengan warna hijau, jumlah helai mahkota ada lima dan
                    berwarna
                    kuning. Bentuk buah lonjong, beralur, panjangnya 6 - 10 mm dan lebar 3 - 4 mm, warna hijau bila muda
                    dan
                    hijau keabu-abuan bila sudah tua. Akar tunggang dan berwarna putih. </p>
                {{--  --}}
            </div>
            <div>
                {{-- Bagian yang digunakan --}}
                <h3 class="title">BAGIAN YANG DIGUNAKAN:</h3>
                <p class="paragrafh">Minyak adas yang diekstraksi dari buah yang matang dan buah yang dikeringkan.</p>
            </div>

            <div>
                {{-- Konstituen --}}
                <h3 class="title">KONSTITUEN:</h3>
                <p class="paragrafh">
                    Minyak esensial: Asam-anisat, dipenten. Buah: Asam-anisat, apiol, dianetol, asam-askorbat,
                    asam-benzoat. Daun: Avikularin, asam-klorogenat, sinarosida, guaoja - verin, kaempferol. Tanaman:
                    1,8 - sineol, anetol, anisaldehida, sinarin, dipenten, asam-glikolat, kaempferol. Akar: Asam -
                    glikolat, stigmasterol, umbeliferon. Minyak esensial biji: Alfa-terpinen, anisaldehida, kamfen,
                    karvon, sitronelal, asam-oleat. Tunas: Dilapiol, estragol, eugenol, P-anisaldehida, trans - anetol.
                </p>
            </div>

            <div>
                {{-- Indikasi --}}
                <h3 class="title">INDIKASI:</h3>
                <p class="paragrafh">
                    Abses gigi, Alaktea, Amenorea, Andropause, Anoreksia, Apnea, Asma, Bakteria, Batuk, Kram, Bau badan,
                    Bau mulut,
                    Bengkak, Cacingan, Cegukan, Demam, Diare, Disentri, Dispepsia, Disuria, Enuresis, Frigiditas,
                    Gigitan hewan,
                    Gigitan ular, Gonorea, Hernia, Impotensi, Indurasi, Infeksi, Infeksi jamur di dalam atau di bagian
                    tubuh,
                    Inflamasi, Jamur, Jantung, Kanker, Kanker diafragma, Kanker gusi, Kanker hati, Kanker lambung,
                    Kanker limpa,
                    Kanker payudara, Kanker prostat, Kanker Rahim, Kanker tenggorokan, Kanker uvula, Kegemukan,
                    Kehausan, Kejantanan,
                    Keriput, Kista pada kulit, Kolera, Kolik, Kolitis, Kusta, Kutil genitalis, Leukemia, Luka, Mabuk
                    perjalanan,
                    Masuk angin, Mempermudah kelahiran, Menopause, Mual, Mual saat hamil muda, Mulas, Muntah, Nyeri,
                    Nyeri abdomen,
                    Nyeri haid, Nyeri punggung, Nyeri samping, Nyeri telinga, Oftalmia, Oligogalaktia, Osteoporosis,
                    Penyakit bronkus,
                    Penyakit ginjal, Penyakit hati, Penyakit kandung empedu, Penyakit kelamin, Penyakit kelopak mata,
                    Penyakit
                    konjungtiva, Penyakit kuning, Penyakit lambung, Penyakit limpa, Penyakit paru, Penyakit pernafasan,
                    Penyakit Rahim,
                    Penyakit rongga mulut, Penyakit tenggorokan, Penyakit usus, Perasaan penuh atau tekanan di telinga,
                    Radang
                    selaput lendir hidung dan tenggorokan, Retensi cairan, Sakit gigi, Sakit kepala, Selesma, Selulit,
                    Sendawa,
                    Sindrom iritasi usus besar, Skirus, Spasme, Sperma encer, Stranguria, Tenesmus, Virus.
                </p>
            </div>

    </section>
</body>

</html>
