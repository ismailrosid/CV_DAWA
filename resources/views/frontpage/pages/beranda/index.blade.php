@extends('layouts.frontpage')

@section('title', 'Home Page')

@section('content')
    <main>
        <section class="full-screen-bg d-flex justify-content-center align-items-center">
            <div class="content text-center text-white w-75">
                <header class="content-header">
                    <h2 class="">300</h2>
                    <h2 class="">Tumbuhan Obat</h2>
                    <h2 class="">Indonesia</h2>
                    <p class="my-1 my-md-3">Menguak kekayaan alam Indonesia Tentang <br> 300 Tumbuhan Obat
                        Indonesia dan Lainnya
                    </p>
                </header>
                <div class="px-md-2 px-lg-4 d-flex justify-content-center">
                    <div class="input-group mt-2 mt-md-0 mb-3 w-100 w-md-75 w-lg-50">
                        <div class="input-group-prepend">
                            <span class="input-group-text border-0  search-icon" id="">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                        <input type="text" class="pl-0 form-control search-input" placeholder="Search"
                            aria-label="Search" aria-describedby="" onfocus="this.style.boxShadow='none'">
                    </div>
                </div>
                <article class="d-flex justify-content-center w-100 mt-2">
                    <p class="article-text">
                        Web ini, dilengkapi dengan nama umum tumbuhan, nama ilmiah tumbuhan, gambar tumbuhan, sinonim, nama
                        daerah,
                        klasifikasi tumbuhan, deskripsi tumbuhan, bagian yang digunakan, kandungan & aktifitas, indikasi,
                        contoh
                        penggunaan, dosis, kontraindikasi, interaksi, serta efek samping. Web ini memuat lebih dari 500
                        contoh ramuan herbal asli Indonesia.
                    </p>
                </article>
            </div>
        </section>
    </main>
@endsection
