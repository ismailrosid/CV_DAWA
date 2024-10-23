@extends('layouts.frontpage')

@section('title', 'Home Page')

@section('content')
    <main>
        <section class="full-screen-bg d-flex justify-content-center align-items-center">
            <div style="margin-top: 72px;" class="content text-center text-white w-75">
                <header>
                    <h2 class="font-weight-bold">300</h2>
                    <h2 class="font-weight-bold">Tumbuhan Obat</h2>
                    <h2 class="font-weight-bold">Indonesia</h2>
                    <p style="font-size: 1.2rem; font-weight: 400;">Menguak kekayaan alam Indonesia Tentang <br> 300 Tumbuhan Obat
                        Indonesia dan Lainnya
                    </p>
                </header>

                <div class="px-5 d-flex justify-content-center">
                    <div class="input-group input-group-lg mb-3 w-50">
                        <div class="input-group-prepend">
                            <span class="input-group-text border-0" id="basic-addon1"
                                style="border-top-left-radius: 1rem; border-bottom-left-radius: 1rem; background-color: white; color: #9E9E9E;">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                        <input
                            style="font-size: 1rem; border-top-right-radius: 1rem; border-bottom-right-radius: 1rem; color: #9E9E9E; border: none; outline: none; box-shadow: none;"
                            type="text" class="pl-0 form-control" placeholder="Search" aria-label="Search"
                            aria-describedby="basic-addon1" onfocus="this.style.boxShadow='none'">
                    </div>
                </div>


                <article class="d-flex justify-content-center w-100 mt-4">
                    <p style="border: 2px solid; width: 50%; text-align: justify; padding: 1rem;">
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
