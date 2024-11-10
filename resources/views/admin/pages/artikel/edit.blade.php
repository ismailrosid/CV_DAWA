@extends('layouts.admin')
@section('title', 'ADM - Edit Data Artikel')
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
                            <h3 class="card-title">Edit Data Artikel</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('admin.artikel.update', $artikel->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT') <!-- Tambahkan method PUT untuk update -->

                            <div class="card-body">
                                <!-- Input ID Kategori (tetap) -->
                                <input type="hidden" class="form-control form-control-sm" id="id_kategori"
                                    name="id_kategori" value="{{ $artikel->id_kategori }}">

                                <!-- Input Nama -->
                                <div class="mb-2">
                                    <label for="nama" class="form-label">NAMA:</label>
                                    <input type="text" class="form-control form-control-sm" id="nama" name="nama"
                                        value="{{ $artikel->nama }}" spellcheck="false" autocomplete="off">
                                </div>
                                <hr>

                                <!-- Input Judul -->
                                <div class="mb-2">
                                    <label for="judul" class="form-label">JUDUL:</label>
                                    <input type="text" class="form-control form-control-sm" id="judul" name="judul"
                                        value="{{ $artikel->judul }}" spellcheck="false" autocomplete="off">
                                </div>
                                <hr>

                                <!-- Input Deskripsi -->
                                <div class="mb-2">
                                    <label for="deskripsi" class="form-label">DESKRIPSI:</label>
                                    <textarea class="form-control form-control-sm" id="deskripsi" name="deskripsi" spellcheck="false" autocomplete="off"
                                        rows="3">{{ $artikel->deskripsi }}</textarea>
                                </div>
                                <hr>

                                <!-- Input Detail -->
                                <div class="mb-2">
                                    <label for="detail" class="form-label">DETAIL:</label>
                                    <table class="table table-bordered table-sm">
                                        <thead>
                                            <tr>
                                                <td class="border-top-0 border-bottom-0 text-center">No</td>
                                                <td class="border-top-0 border-bottom-0 text-center">Nama Herbal</td>
                                                <td class="border-top-0 border-bottom-0 text-center">Manfaat</td>
                                                <td class="border-top-0 border-bottom-0 text-center">Deskripsi Herbal</td>
                                                <td class="border-top-0 border-bottom-0 text-center">Cara Kerja</td>
                                                <td class="border-top-0 border-bottom-0 text-center">Cara Konsumsi</td>
                                                <td class="border-top-0 border-bottom-0 text-center">Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody id="detail-body">
                                            @foreach ($detailArtikels as $index => $detail)
                                                <tr>
                                                    <td class="text-center vertical-align-middle">{{ $index + 1 }}</td>
                                                    <td class="text-center vertical-align-middle"><input type="text"
                                                            class="form-control form-control-sm" name="nama_herbal[]"
                                                            value="{{ $detail->nama_herbal }}" required></td>
                                                    <td class="text-center vertical-align-middle">
                                                        <textarea class="form-control form-control-sm" name="manfaat[]" spellcheck="false" autocomplete="off" rows="3">{{ $detail->manfaat }}</textarea>
                                                    </td>
                                                    <td class="text-center vertical-align-middle">
                                                        <textarea class="form-control form-control-sm" name="deskripsi_herbal[]" spellcheck="false" autocomplete="off"
                                                            rows="3">{{ $detail->deskripsi_herbal }}</textarea>
                                                    </td>
                                                    <td class="text-center vertical-align-middle">
                                                        <textarea class="form-control form-control-sm" name="cara_kerja[]" spellcheck="false" autocomplete="off" rows="3">{{ $detail->cara_kerja }}</textarea>
                                                    </td>
                                                    <td class="text-center vertical-align-middle">
                                                        <textarea class="form-control form-control-sm" name="cara_konsumsi[]" spellcheck="false" autocomplete="off"
                                                            rows="3">{{ $detail->cara_konsumsi }}</textarea>
                                                    </td>
                                                    <td class="text-center vertical-align-middle"><button type="button"
                                                            class="btn text-danger btn-sm remove-input-dtl-artikel"><i
                                                                class="fas fa-minus"></i></button></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-between">
                                        <div class="font-weight-bolder text-muted">Multiple Input</div>
                                        <div class="px-1">
                                            <button type="button" class="btn btn-primary btn-sm"
                                                id="add-input-dtl-artikel">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <!-- Input Kombinasi Herbal -->
                                <div class="mb-2">
                                    <label for="kombinasi_herbal" class="form-label">KOMBINASI HERBAL:</label>
                                    <textarea class="form-control form-control-sm" id="kombinasi_herbal" name="kombinasi_herbal" spellcheck="false"
                                        autocomplete="off" rows="3" required>{{ $artikel->kombinasi_herbal }}</textarea>
                                </div>

                                <hr>
                                <!-- Input Kesimpulan -->
                                <div class="mb-2">
                                    <label for="kesimpulan" class="form-label">KESIMPULAN:</label>
                                    <textarea class="form-control form-control-sm" id="kesimpulan" name="kesimpulan" spellcheck="false"
                                        autocomplete="off" rows="3" required>{{ $artikel->kesimpulan }}</textarea>
                                </div>
                            </div>

                            <div class="card-footer text-muted d-flex justify-content-end">
                                <button type="reset" class="btn btn-warning ml-2" id="cancel-button">Batal</button>
                                <button type="submit" class="btn btn-success ml-2" id="save-button">Simpan</button>
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
                let rowNumber = 1;

                // Function to add a new row
                $('#add-input-dtl-artikel').click(function() {
                    rowNumber++;
                    const newRow = `
                <tr style="display: none;">
                    <td class="text-center vertical-align-middle">${rowNumber}</td>
                    <td class="text-center vertical-align-middle">
                        <input type="text" class="form-control form-control-sm" name="nama_herbal[]" placeholder="Masukkan nama herbal" required>
                    </td>
                    <td class="text-center vertical-align-middle">
                        <textarea class="form-control form-control-sm" name="manfaat[]" spellcheck="false" autocomplete="off" rows="3" placeholder="Masukkan manfaat"></textarea>
                    </td>
                    <td class="text-center vertical-align-middle">
                        <textarea class="form-control form-control-sm" name="deskripsi_herbal[]" spellcheck="false" autocomplete="off" rows="3" placeholder="Masukkan deskripsi"></textarea>
                    </td>
                    <td class="text-center vertical-align-middle">
                        <textarea class="form-control form-control-sm" name="cara_kerja[]" spellcheck="false" autocomplete="off" rows="3" placeholder="Masukkan cara kerja"></textarea>
                    </td>
                    <td class="text-center vertical-align-middle">
                        <textarea class="form-control form-control-sm" name="cara_konsumsi[]" spellcheck="false" autocomplete="off" rows="3" placeholder="Masukkan cara konsumsi"></textarea>
                    </td>
                    <td class="text-center vertical-align-middle">
                        <button type="button" class="btn text-danger btn-sm remove-input-dtl-artikel">
                            <i class="fas fa-minus"></i>
                        </button>
                    </td>
                </tr>`;

                    $('#detail-body').append(newRow);
                    $('#detail-body tr:last').fadeIn(); // Animasi fade in saat baris baru ditambahkan
                });

                // Function to remove a row
                $(document).on('click', '.remove-input-dtl-artikel', function() {
                    if ($('#detail-body tr').length > 1) {
                        $(this).closest('tr').fadeOut(function() { // Animasi fade out sebelum menghapus baris
                            $(this).remove();
                            rowNumber--;
                            $('#detail-body tr').each(function(index) {
                                $(this).find('td:first').text(index + 1);
                            });
                        });
                    } else {
                        // SweetAlert2 untuk notifikasi saat mencoba menghapus baris terakhir

                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Minimal satu input detail artikel harus ada!',
                        });
                    }
                });

                $('#save-button').click(function(e) {
                    e.preventDefault();
                    let isValid = true;

                    // Remove previous invalid feedback
                    $('.is-invalid').removeClass('is-invalid');
                    $('.invalid-feedback').remove();

                    // Validasi kategori
                    // if ($('#id_kategori').val() === '') {
                    //     isValid = false;
                    //     $('#id_kategori').addClass('is-invalid'); // Tambah kelas is-invalid di input select
                    //     $('#id_kategori').after(
                    //         '<div class="invalid-feedback">Kategori tidak boleh kosong.</div>'
                    //     );
                    // }


                    // Validasi NAMA
                    if ($('#nama').val().trim() === '') {
                        isValid = false;
                        $('#nama').addClass('is-invalid');
                        $('#nama').after(
                            '<div class="invalid-feedback">Nama tidak boleh kosong.</div>'
                        );
                    }

                    // Validasi JUDUL
                    if ($('#judul').val().trim() === '') {
                        isValid = false;
                        $('#judul').addClass('is-invalid');
                        $('#judul').after(
                            '<div class="invalid-feedback">Judul tidak boleh kosong.</div>'
                        );
                    }

                    // $('textarea[name="deskripsi[]"]').each(function() {
                    //     if ($(this).val().trim() === '') {
                    //         isValid = false;
                    //         $(this).addClass('is-invalid');
                    //         $(this).after(
                    //             '<div class="invalid-feedback">Deskripsi tidak boleh kosong.</div>');
                    //     }
                    // });

                    if ($('#deskripsi').val().trim() === '') {
                        isValid = false;
                        $('#deskripsi').addClass('is-invalid');
                        $('#deskripsi').after(
                            '<div class="invalid-feedback">Deskripsi tidak boleh kosong.</div>'
                        );
                    }

                    // Validate table input fields
                    $('input[name="nama_herbal[]"]').each(function() {
                        if ($(this).val().trim() === '') {
                            isValid = false;
                            $(this).addClass('is-invalid');
                            // $(this).after(
                            //     '<div class="invalid-feedback">Nama herbal tidak boleh kosong.</div>'
                            // );
                        }
                    });

                    // Validasi Manfaat
                    $('textarea[name="manfaat[]"]').each(function() {
                        if ($(this).val().trim() === '') {
                            isValid = false;
                            $(this).addClass('is-invalid');
                            // $(this).after(
                            //     '<div class="invalid-feedback">Manfaat tidak boleh kosong.</div>');
                        }
                    });

                    // Validasi Deskripsi
                    $('textarea[name="deskripsi_herbal[]"]').each(function() {
                        if ($(this).val().trim() === '') {
                            isValid = false;
                            $(this).addClass('is-invalid');
                            // $(this).after(
                            //     '<div class="invalid-feedback">Deskripsi herbal tidak boleh kosong.</div>'
                            // );
                        }
                    });

                    // Validasi Cara Kerja
                    $('textarea[name="cara_kerja[]"]').each(function() {
                        if ($(this).val().trim() === '') {
                            isValid = false;
                            $(this).addClass('is-invalid');
                            // $(this).after(
                            //     '<div class="invalid-feedback">Cara Kerja tidak boleh kosong.</div>'
                            // );
                        }
                    });

                    // Validasi Cara Konsumsi
                    $('textarea[name="cara_konsumsi[]"]').each(function() {
                        if ($(this).val().trim() === '') {
                            isValid = false;
                            $(this).addClass('is-invalid');
                            // $(this).after(
                            //     '<div class="invalid-feedback">Cara Konsumsi tidak boleh kosong.</div>'
                            // );
                        }
                    });


                    // Validasi Kombinasi Herbal
                    if ($('#kombinasi_herbal').val().trim() === '') {
                        isValid = false;
                        $('#kombinasi_herbal').addClass('is-invalid');
                        $('#kombinasi_herbal').after(
                            '<div class="invalid-feedback">Kombinasi herbal tidak boleh kosong.</div>'
                        );
                    }

                    // Validasi Kesimpulan
                    if ($('#kesimpulan').val().trim() === '') {
                        isValid = false;
                        $('#kesimpulan').addClass('is-invalid');
                        $('#kesimpulan').after(
                            '<div class="invalid-feedback">Kesimpulan tidak boleh kosong.</div>'
                        );
                    }


                    if (isValid) {
                        Swal.fire({
                            title: "Loading....",
                            html: '<div class="spinner-border text-primary"></div>',
                            showConfirmButton: false,
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                        });

                        setTimeout(function() {
                            $('form').submit();
                        }, 2000);
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Terdapat beberapa data yang tidak lengkap atau tidak valid. Mohon periksa dan lengkapi semua inputan yang diperlukan.',
                        }).then(() => {
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
