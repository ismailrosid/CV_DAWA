@extends('layouts.admin')
@section('title', 'ADM - Dashboard')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div style="background-color: #007bff" class="small-box text-white">
                        <div class="inner">
                            <h3>{{ $totalProduk }}</h3>
                            <p>Produk</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-cube"></i>
                        </div>
                        <a href="{{ route('admin.produk.index') }}" class="small-box-footer text-white">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $totalTumbuhan }}</h3>
                            <p>Tumbuhan</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-leaf"></i> <!-- Ubah ikon sesuai kategori Tumbuhan -->
                        </div>
                        <a href="{{ route('admin.tumbuhan.index') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $totalArtikel }}</h3>
                            <p>Artikel</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-newspaper"></i> <!-- Ubah ikon sesuai kategori Artikel -->
                        </div>
                        <a href="{{ route('admin.artikel.index') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning"> <!-- Warna lebih cocok untuk Tips Herbal -->
                        <div class="inner">
                            <h3>{{ $totalTips }}</h3>
                            <p>Tips Herbal</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-heart"></i> <!-- Ubah ikon sesuai kategori Tips Herbal -->
                        </div>
                        <a href="{{ route('admin.tips-herbal.index') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
    </section>
@endsection
