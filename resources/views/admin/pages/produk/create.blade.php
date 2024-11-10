@extends('layouts.admin')
@section('title', 'ADM - Tambah Data Tumbuhan')
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
                            <h3 class="card-title">Tambah Data Produk</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('admin.produk.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <div class="form-group mb-2">
                                    <label for="gambar">GAMBAR</label>
                                    <div class="input-group input-group-sm">
                                        <div class="custom-file" id="gambar-container">
                                            <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                            <label class="custom-file-label" for="gambar">Masukan gambar</label>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <!-- Select Kategori Section -->
                                <div class="mb-2">
                                    <label for="id_kategori" class="form-label">KATEGORI:</label>
                                    <select class="form-control form-control-sm" id="id_kategori" name="id_kategori">
                                        <option value="">---------------------Pilih Kategori---------------------
                                        </option>
                                        @foreach ($kategori as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <hr>

                                <div class="mb-2">
                                    <label class="form-label" for="nama_produk">NAMA PRODUK:</label>
                                    <input type="text" class="form-control form-control-sm" id="nama_produk"
                                        name="nama_produk" placeholder="Masukan nama produk" spellcheck="false"
                                        autocomplete="off">
                                </div>
                                <hr>

                                <div class="mb-2">
                                    <label class="form-label" for="harga">HARGA:</label>
                                    <input type="text" class="form-control form-control-sm only-number" id="harga"
                                        name="harga" placeholder="Masukan harga produk" spellcheck="false"
                                        autocomplete="off">
                                </div>
                                <hr>


                                <!-- Deskripsi Section -->
                                <div class="mb-2">
                                    <label for="deskripsi" class="form-label">DESKRIPSI:</label>
                                    <textarea class="form-control form-control-sm" id="deskripsi" name="deskripsi" rows="3"
                                        placeholder="Masukkan deskripsi produk..." spellcheck="false" autocomplete="off"></textarea>
                                </div>
                                <hr>
                                <!-- Tidak Disarankan Untuk -->
                                <div class="mb-2">
                                    <label for="tidak_disarankan" class="form-label">TIDAK DISARANKAN UNTUK:</label>
                                    <div id="tidak-disarankan-container">
                                        <div class="input-group input-group-sm mb-1">
                                            <input type="text" class="form-control" name="tidak_disarankan[]"
                                                placeholder="Masukan tidak disarankan untuk" spellcheck="false"
                                                autocomplete="off">
                                            <div class="input-group-append">
                                                <button class="btn btn-danger remove-tidak-disarankan" type="button">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-sm btn-primary" id="add-tidak-disarankan" type="button">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>

                                <hr>

                                <!-- Tidak Dikonsumsi Bersama Obat -->
                                <div class="mb-2">
                                    <label for="tidak_dikonsumsi_bersama_obat" class="form-label">TIDAK DIKONSUMSI BERSAMA
                                        OBAT:</label>
                                    <div id="tidak-dikonsumsi-bersama-obat-container">
                                        <div class="input-group input-group-sm mb-1">
                                            <input type="text" class="form-control"
                                                name="tidak_dikonsumsi_bersama_obat[]"
                                                placeholder="Masukan tidak dikonsumsi bersama obat" spellcheck="false"
                                                autocomplete="off">
                                            <div class="input-group-append">
                                                <button class="btn btn-danger remove-tidak-dikonsumsi-bersama-obat"
                                                    type="button">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-sm btn-primary" id="add-tidak-dikonsumsi-bersama-obat"
                                            type="button">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>

                                <hr>

                                <label for="klasifikasi" class="form-label">KOMPOSISI:</label>
                                <table class="table table-sm table-bordered">
                                    <thead>
                                        <tr>
                                            <td class="border-top-0 border-bottom-0 text-center" style="width: 5%">No</td>
                                            <td class="border-top-0 border-bottom-0 text-center" style="width: 50%">
                                                Takaran</td>
                                            <td class="border-top-0 border-bottom-0 text-center">Detail Komposisi</td>
                                            <td class="border-top-0 border-bottom-0 text-center" style="width: 5%">Aksi
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody id="komposisi-body">
                                        <tr>
                                            <td class="text-center vertical-align-middle">1</td>
                                            <td class="text-center p-3 vertical-align-middle">
                                                <textarea class="form-control form-control-sm" id="takaran" name="komposisi[]" rows="3"
                                                    placeholder="Masukkan takaran komposisi..." spellcheck="false" autocomplete="off"></textarea>
                                            </td>
                                            <td class="text-center vertical-align-middle p-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="detail-komposisi-container w-100">
                                                        <div class="input-group input-group-sm w-100">
                                                            <input type="text" class="form-control" name="komposisi[]"
                                                                placeholder="Masukkan detail komposisi" spellcheck="false"
                                                                autocomplete="off">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-danger remove-detail-komposisi"
                                                                    type="button">
                                                                    <i class="fas fa-minus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ml-2">
                                                        <button id=""
                                                            class="btn btn-sm btn-primary add-detail-komposisi"
                                                            type="button">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center vertical-align-middle">
                                                <button class="btn btn-sm text-danger" id="" type="button">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-end mt-1">
                                    <button id="add-komposisi-row" class="btn btn-sm btn-primary" type="button">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                                <hr>

                                <!-- Anjuran Pemakaian -->
                                <div class="mb-2">
                                    <label for="anjuran_pemakaian" class="form-label">ANJURAN PEMAKAIAN:</label>
                                    <div id="anjuran-pemakaian-container">
                                        <div class="input-group input-group-sm mb-1">
                                            <input type="text" class="form-control" name="anjuran_pemakaian[]"
                                                placeholder="Masukan anjuran pemakaian" spellcheck="false"
                                                autocomplete="off">
                                            <div class="input-group-append">
                                                <button class="btn btn-danger remove-anjuran-pemakaian" type="button">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-sm btn-primary" id="add-anjuran-pemakaian" type="button">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
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
                // Add new tidak disarankan input
                $('#add-tidak-disarankan').click(function() {
                    const newInput = $(`        
                    <div class="input-group input-group-sm mb-1">
                        <input type="text" class="form-control" name="tidak_disarankan[]" placeholder="Masukan tidak disarankan untuk" spellcheck="false" autocomplete="off">
                        <div class="input-group-append">
                            <button class="btn btn-danger remove-tidak-disarankan" type="button">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                `).hide().fadeIn(300);
                    $('#tidak-disarankan-container').append(newInput);
                });

                // Remove tidak disarankan input
                $(document).on('click', '.remove-tidak-disarankan', function() {
                    if ($('#tidak-disarankan-container .input-group').length > 1) {
                        $(this).closest('.input-group').fadeOut(300, function() {
                            $(this).remove();
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Minimal satu input tidak disarankan harus ada!',
                        });
                    }
                });

                // Add new tidak dikonsumsi bersama obat input
                $('#add-tidak-dikonsumsi-bersama-obat').click(function() {
                    const newInput = $(`        
                    <div class="input-group input-group-sm mb-1">
                        <input type="text" class="form-control" name="tidak_dikonsumsi_bersama_obat[]" placeholder="Masukan tidak dikonsumsi bersama obat" spellcheck="false" autocomplete="off">
                        <div class="input-group-append">
                            <button class="btn btn-danger remove-tidak-dikonsumsi-bersama-obat" type="button">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                `).hide().fadeIn(300);
                    $('#tidak-dikonsumsi-bersama-obat-container').append(newInput);
                });

                // Remove tidak dikonsumsi bersama obat input
                $(document).on('click', '.remove-tidak-dikonsumsi-bersama-obat', function() {
                    if ($('#tidak-dikonsumsi-bersama-obat-container .input-group').length > 1) {
                        $(this).closest('.input-group').fadeOut(300, function() {
                            $(this).remove();
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Minimal satu input tidak dikonsumsi bersama obat harus ada!',
                        });
                    }
                });

                // Menambah komposisi baru

                // Menambah input detail komposisi baru
                let komposisiRowNumber = 1;

                // Fungsi untuk menambah baris komposisi baru
                $('#add-komposisi-row').click(function() {
                    komposisiRowNumber++;
                    const newKomposisiRow = `
        <tr style="display: none;">
            <td class="text-center vertical-align-middle">${komposisiRowNumber}</td>
            <td class="text-center p-3 vertical-align-middle">
                <textarea class="form-control form-control-sm" name="komposisi[]" rows="3" placeholder="Masukan takaran komposisi..." spellcheck="false" autocomplete="off"></textarea>
            </td>
            <td class="text-center vertical-align-middle p-3">
                <div class="d-flex align-items-center">
                    <div class="detail-komposisi-container w-100">
                        <div class="input-group input-group-sm w-100">
                            <input type="text" class="form-control" name="komposisi[]" placeholder="Masukkan detail komposisi" spellcheck="false" autocomplete="off">
                            <div class="input-group-append">
                                <button class="btn btn-danger remove-detail-komposisi" type="button">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="ml-2">
                        <button class="btn btn-sm btn-primary add-detail-komposisi" type="button">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </td>
            <td class="text-center vertical-align-middle">
                <button class="btn btn-sm text-danger remove-komposisi-row" type="button">
                    <i class="fas fa-minus"></i>
                </button>
            </td>
        </tr>`;

                    $('#komposisi-body').append(newKomposisiRow);
                    $('#komposisi-body tr:last').fadeIn(300); // Animasi fade in saat baris baru ditambahkan
                    updateRowNumbers(); // Memperbarui nomor urut
                });

                // Fungsi untuk menghapus baris komposisi
                $(document).on('click', '.remove-komposisi-row', function() {
                    if ($('#komposisi-body tr').length > 1) {
                        $(this).closest('tr').fadeOut(300, function() {
                            $(this).remove();
                            komposisiRowNumber--;
                            updateRowNumbers(); // Memperbarui nomor urut setelah penghapusan
                        });
                    } else {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Minimal satu baris komposisi harus ada!',
                            timer: 1500,
                            showConfirmButton: false
                        });
                    }
                });

                // Fungsi untuk menambah input detail komposisi di dalam satu baris
                $(document).on('click', '.add-detail-komposisi', function() {
                    const detailKomposisiInput = `
                    <div class="input-group input-group-sm w-100 mt-1">
                        <input type="text" class="form-control" name="komposisi[]" placeholder="Masukkan detail komposisi" spellcheck="false" autocomplete="off">
                        <div class="input-group-append">
                            <button class="btn btn-danger remove-detail-komposisi" type="button">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>`;
                    $(this).closest('.d-flex').find('.detail-komposisi-container').append(detailKomposisiInput);
                });

                // Fungsi untuk menghapus input detail komposisi di dalam satu baris
                $(document).on('click', '.remove-detail-komposisi', function() {
                    const detailContainer = $(this).closest('.detail-komposisi-container');
                    if (detailContainer.find('.input-group').length > 1) {
                        $(this).closest('.input-group').fadeOut(300, function() {
                            $(this).remove();
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Minimal satu detail komposisi harus ada di setiap baris!',
                        });
                    }
                });

                // Fungsi untuk memperbarui nomor urut baris
                function updateRowNumbers() {
                    $('#komposisi-body tr').each(function(index) {
                        $(this).find('td:first').text(index + 1); // Mengupdate nomor urut sesuai urutan baris
                    });
                }

                // Add new anjuran pemakaian input
                $('#add-anjuran-pemakaian').click(function() {
                    const newInput = $(`        
                    <div class="input-group input-group-sm mb-1">
                        <input type="text" class="form-control" name="anjuran_pemakaian[]" placeholder="Masukan anjuran pemakaian" spellcheck="false" autocomplete="off">
                        <div class="input-group-append">
                            <button class="btn btn-danger remove-anjuran-pemakaian" type="button">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                `).hide().fadeIn(300);
                    $('#anjuran-pemakaian-container').append(newInput);
                });

                // Remove anjuran pemakaian input
                $(document).on('click', '.remove-anjuran-pemakaian', function() {
                    if ($('#anjuran-pemakaian-container .input-group').length > 1) {
                        $(this).closest('.input-group').fadeOut(300, function() {
                            $(this).remove();
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Minimal satu input anjuran pemakaian harus ada!',
                        });
                    }
                });

                // Validasi form sebelum submit
                $('#save-button').click(function(e) {
                    e.preventDefault(); // Mencegah form dari submit default

                    // Menyimpan status validasi
                    let isValid = true;

                    // Menghapus pesan kesalahan dan kelas invalid sebelumnya
                    $('.is-invalid').removeClass('is-invalid');
                    $('.invalid-feedback').remove(); // Menghapus semua pesan kesalahan sebelumnya         

                    // Validasi "gambar" (input file)
                    if ($('#gambar').val() === '') {
                        isValid = false;
                        $('#gambar-container').addClass('is-invalid'); // Tambah kelas is-invalid di container
                        $('#gambar').addClass('is-invalid'); // Tambah kelas is-invalid di input file
                        $('#gambar-container').after(
                            '<div class="invalid-feedback">Gambar tidak boleh kosong.</div>'
                        );
                    } else {
                        // Mendapatkan file dari input
                        const file = $('#gambar').get(0).files[0];
                        const fileSizeLimit = 2 * 1024 * 1024; // Maksimal ukuran file (2 MB)
                        const validExtensions = ['image/jpeg', 'image/png', 'image/jpg'];

                        // Cek tipe file
                        if (!validExtensions.includes(file.type)) {
                            isValid = false;
                            $('#gambar-container').addClass('is-invalid');
                            $('#gambar').addClass('is-invalid');
                            $('#gambar-container').after(
                                '<div class="invalid-feedback">Format gambar harus JPEG, JPG, atau PNG.</div>'
                            );
                        }

                        // Cek ukuran file
                        if (file.size > fileSizeLimit) {
                            isValid = false;
                            $('#gambar-container').addClass('is-invalid');
                            $('#gambar').addClass('is-invalid');
                            $('#gambar-container').after(
                                '<div class="invalid-feedback">Ukuran gambar tidak boleh lebih dari 2 MB.</div>'
                            );
                        }
                    }

                    // Validasi kategori
                    if ($('#id_kategori').val() === '') {
                        isValid = false;
                        $('#id_kategori').addClass('is-invalid'); // Tambah kelas is-invalid di input select
                        $('#id_kategori').after(
                            '<div class="invalid-feedback">Kategori tidak boleh kosong.</div>'
                        );
                    }

                    // Validasi nama produk
                    if ($('#nama_produk').val().trim() === '') {
                        isValid = false;
                        $('#nama_produk').addClass('is-invalid');
                        $('#nama_produk').after(
                            '<div class="invalid-feedback">Nama produk tidak boleh kosong.</div>'
                        );
                    }

                    // Validasi harga
                    if ($('#harga').val().trim() === '') {
                        isValid = false;
                        $('#harga').addClass('is-invalid');
                        $('#harga').after(
                            '<div class="invalid-feedback">Harga tidak boleh kosong.</div>'
                        );
                    }

                    // Validasi deskripsi
                    if ($('#deskripsi').val().trim() === '') {
                        isValid = false;
                        $('#deskripsi').addClass('is-invalid');
                        $('#deskripsi').after(
                            '<div class="invalid-feedback">Deskripsi tidak boleh kosong.</div>'
                        );
                    }

                    // Validasi untuk "tidak disarankan"
                    $('input[name="tidak_disarankan[]"]').each(function() {
                        if ($(this).val().trim() === '') {
                            isValid = false;
                            $(this).addClass('is-invalid');
                            $(this).closest('.input-group')
                                .find('.input-group-append')
                                .after(
                                    '<div class="invalid-feedback">Field ini tidak boleh kosong.</div>'
                                );
                        }
                    });

                    // Validasi untuk "tidak dikonsumsi bersama obat"
                    $('input[name="tidak_dikonsumsi_bersama_obat[]"]').each(function() {
                        if ($(this).val().trim() === '') {
                            isValid = false;
                            $(this).addClass('is-invalid');
                            $(this).closest('.input-group')
                                .find('.input-group-append')
                                .after(
                                    '<div class="invalid-feedback">Field ini tidak boleh kosong.</div>'
                                );
                        }
                    });


                    // Validasi untuk "anjuran pemakaian"
                    $('input[name="anjuran_pemakaian[]"]').each(function() {
                        if ($(this).val().trim() === '') {
                            isValid = false;
                            $(this).addClass('is-invalid');
                            // $(this).closest('.input-group')
                            //     .find('.input-group-append')
                            //     .after(
                            //         '<div class="invalid-feedback">Field ini tidak boleh kosong.</div>'
                            //     );
                        }
                    });

                    $('textarea[name="komposisi[]"]').each(function() {
                        if ($(this).val().trim() === '') {
                            isValid = false;
                            $(this).addClass('is-invalid');
                            //     $(this).after(
                            //         '<div class="invalid-feedback">Takaran komposisi tidak boleh kosong.</div>'
                            //     );
                        }
                    });

                    // Validasi Detail Komposisi (input[name="komposisi[]"])
                    $('input[name="komposisi[]"]').each(function() {
                        if ($(this).val().trim() === '') {
                            isValid = false;
                            $(this).addClass('is-invalid');
                            // $(this).after(
                            //     '<div class="invalid-feedback">Detail komposisi tidak boleh kosong.</div>'
                            // );
                        }
                    });

                    // Jika tidak valid, tidak submit form
                    if (isValid) {
                        Swal.fire({
                            title: "Loading....",
                            html: '<div class="spinner-border text-primary"></div>',
                            showConfirmButton: false,
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                        });

                        // Menambahkan karakter tambahan di setiap textarea 'komposisi[]'
                        $("textarea[name='komposisi[]']").each(function() {
                            let currentText = $(this).val(); // Ambil teks yang ada di textarea
                            if (currentText && !currentText.startsWith(
                                    '+++')) { // Cek apakah belum ada '+++' di awal
                                currentText = '+++' + currentText; // Tambahkan '+++' di awal teks
                            }
                            if (!currentText.endsWith('+++')) { // Cek apakah belum ada '+++' di akhir
                                currentText += '+++'; // Tambahkan '+++' di akhir teks
                            }
                            $(this).val(currentText); // Set kembali teks dengan '+++' di awal dan akhir
                        });
                        // Delay simulasi loading (hanya untuk contoh, hapus jika tidak perlu)
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


                $(document).on("keypress keyup", ".only-number", function(event) {
                    var inputVal = $(this).val();
                    $(this).val(inputVal.replace(/[^\d.,]/g, ""));
                    if (
                        (event.which !== 44 || inputVal.indexOf(",") !== -1) &&
                        (event.which !== 46 || inputVal.indexOf(".") !== -1) &&
                        (event.which < 48 || event.which > 57)
                    ) {
                        event.preventDefault();
                    }
                });

                // Mengubah teks label saat file diunggah
                $('#gambar').on('change', function() {
                    // Mendapatkan nama file yang diunggah
                    const fileName = $(this).val().split('\\').pop();
                    // Menampilkan nama file pada label
                    $(this).next('.custom-file-label').text(fileName);
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
