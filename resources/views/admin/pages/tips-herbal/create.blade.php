@extends('layouts.admin')
@section('title', 'ADM - Tambah Data Artikel')
@push('styles')
    <style>
        .card-footer {
            border-top: 1px solid #dee2e6;
        }

        .vertical-align-middle {
            vertical-align: middle !important;
        }
    </style>
@endpush

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data Tips Herbal</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('admin.tips-herbal.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <!-- Select Kategori Section -->

                                <input type="hidden" class="form-control form-control-sm" id="id_kategori"
                                    name="id_kategori" value="2">

                                <!-- Input Judul -->
                                <div class="mb-2">
                                    <label for="judul" class="form-label">JUDUL:</label>
                                    <input type="text" class="form-control form-control-sm" id="judul" name="judul"
                                        placeholder="Masukkan judul" spellcheck="false" autocomplete="off">
                                </div>
                                <hr>

                                <!-- Input Tips -->
                                <div class="mb-2">
                                    <label for="tips" class="form-label">TIPS:</label>
                                    <textarea class="form-control form-control-sm" id="tips" name="tips" rows="3"
                                        placeholder="Masukkan tips herbal" spellcheck="false" autocomplete="off"></textarea>
                                </div>
                                <hr>

                                <!-- Input Manfaat -->
                                <div class="mb-2">
                                    <label for="manfaat" class="form-label">MANFAAT:</label>
                                    <textarea class="form-control form-control-sm" id="manfaat" name="manfaat" rows="3"
                                        placeholder="Masukkan manfaat" spellcheck="false" autocomplete="off"></textarea>
                                </div>
                            </div>

                            <div class="card-footer text-muted d-flex justify-content-end">
                                <button type="reset" class="btn btn-warning ml-2" id="cancel-button">
                                    Batal
                                </button>
                                <button type="submit" class="btn btn-success ml-2" id="save-button">
                                    Simpan
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Loading Spinner -->
    <div id="loading-spinner" style="display: none;">
        <i class="fas fa-spinner fa-spin fa-3x"></i>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                // Validasi form sebelum submit
                $('#save-button').click(function(e) {
                    e.preventDefault(); // Mencegah form dari submit default

                    // Menyimpan status validasi
                    let isValid = true;

                    // Menghapus pesan kesalahan dan kelas invalid sebelumnya
                    $('.is-invalid').removeClass('is-invalid');
                    $('.invalid-feedback').remove();


                    // Validasi judul
                    if ($('#judul').val().trim() === '') {
                        isValid = false;
                        $('#judul').addClass('is-invalid');
                        $('#judul').after('<div class="invalid-feedback">Judul tidak boleh kosong.</div>');
                    }

                    // Validasi tips
                    if ($('#tips').val().trim() === '') {
                        isValid = false;
                        $('#tips').addClass('is-invalid');
                        $('#tips').after('<div class="invalid-feedback">Tips tidak boleh kosong.</div>');
                    }

                    // Validasi manfaat
                    if ($('#manfaat').val().trim() === '') {
                        isValid = false;
                        $('#manfaat').addClass('is-invalid');
                        $('#manfaat').after('<div class="invalid-feedback">Manfaat tidak boleh kosong.</div>');
                    }

                    // Jika tidak valid, tidak submit form
                    if (isValid) {
                        Swal.fire({
                            title: "Loading....",
                            html: '<div class="spinner-border text-primary"></div>',
                            showConfirmButton: false,
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                        });

                        // Simulasi loading
                        setTimeout(function() {
                            $('form').submit(); // Submit form setelah loading
                        }, 2000); // Ganti 2000 dengan waktu loading yang diinginkan
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Terdapat beberapa data yang tidak lengkap atau tidak valid. Mohon periksa dan lengkapi semua inputan yang diperlukan.',
                        }).then(() => {
                            // Scroll ke elemen pertama yang memiliki kelas is-invalid
                            $('html, body').animate({
                                scrollTop: $('.is-invalid').first().offset().top - 100
                            }, 500);
                        });
                    }
                });

                $('textarea').on('paste', function(e) {
                    const textarea = $(this);
                    e.preventDefault();

                    // Mendapatkan teks yang di-paste dan membersihkan format tambahan
                    let clipboardData = (e.originalEvent || e).clipboardData.getData('text/plain');
                    clipboardData = clipboardData.replace(/\s+/g, ' ')
                        .trim(); // Menghapus spasi dan baris berlebih

                    // Masukkan teks bersih ke dalam textarea
                    textarea.val(clipboardData);
                });
            });
        </script>
    @endpush


@endsection
