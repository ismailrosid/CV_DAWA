@extends('layouts.admin')
@section('title', 'ADM - Tambah Data Tumbuhan')
@push('styles')
    <style>
        .card-footer {
            border-top: 1px solid #dee2e6;
        }
    </style>
@endpush

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-success">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data Tumbuhan</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('admin.tumbuhan.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <div class="form-group mb-2">
                                    <label for="gambar">GAMBAR</label>
                                    <div class="input-group">
                                        <div class="custom-file" id="gambar-container">
                                            <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                            <label class="custom-file-label" for="gambar">Masukan gambar</label>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="mb-2">
                                    <label class="form-label" for="nama_tumbuhan">NAMA TUMBUHAN:</label>
                                    <input type="text" class="form-control form-control-sm" id="nama_tumbuhan"
                                        name="nama_tumbuhan" placeholder="Masukan nama tumbuhan" autocomplete="off">
                                </div>
                                <hr>
                                <div class="mb-2">
                                    <label class="form-label" for="nama_latin">NAMA LATIN:</label>
                                    <input type="text" class="form-control form-control-sm" id="nama_latin"
                                        name="nama_latin" placeholder="Masukan nama latin" autocomplete="off">
                                </div>
                                <hr>
                                <!-- Sinonim Section -->
                                <div class="mb-2">
                                    <label for="sinonim" class="form-label">SINONIM:</label>
                                    <div id="sinonim-container">
                                        <div class="input-group input-group-sm mb-1">
                                            <input type="text" class="form-control" name="sinonims[]"
                                                placeholder="Masukan sinonim">
                                            <div class="input-group-append">
                                                <button class="btn btn-danger remove-sinonim" type="button">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-sm btn-primary" id="add-sinonim" type="button">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <hr>
                                <!-- Nama Daerah Section -->
                                <div class="mb-2">
                                    <label for="nama_daerah" class="form-label">NAMA DAERAH:</label>
                                    <textarea class="form-control form-control-sm" id="nama_daerah" name="nama_daerah" rows="3"
                                        placeholder="Masukkan nama daerah..."></textarea>
                                </div>
                                <hr>
                                <!-- Klasifikasi Section -->
                                <label for="klasifikasi" class="form-label">KLASIFIKASI:</label>
                                <div class="row">
                                    <div class="col-md-4 mb-1">
                                        <label style="font-weight: 400; font-size: 0.8rem;" for="kerajaan"
                                            class="form-label">KERJAAN:</label>
                                        <input type="text" class="form-control form-control-sm" id="kerajaan"
                                            name="kerajaan" placeholder="Masukan Kerajaan">
                                    </div>
                                    <div class="col-md-4 mb-1">
                                        <label style="font-weight: 400; font-size: 0.8rem;" for="sub_kerajaan"
                                            class="form-label">SUB KERAJAAN:</label>
                                        <input type="text" class="form-control form-control-sm" id="sub_kerajaan"
                                            name="sub_kerajaan" placeholder="Masukan Sub Kerajaan">
                                    </div>
                                    <div class="col-md-4 mb-1">
                                        <label style="font-weight: 400; font-size: 0.8rem;" for="super_divisi"
                                            class="form-label">SUPER DIVISI:</label>
                                        <input type="text" class="form-control form-control-sm" id="super_divisi"
                                            name="super_divisi" placeholder="Masukan Super Divisi">
                                    </div>
                                    <div class="col-md-4 mb-1">
                                        <label style="font-weight: 400; font-size: 0.8rem;" for="divisi"
                                            class="form-label">DIVISI:</label>
                                        <input type="text" class="form-control form-control-sm" id="divisi"
                                            name="divisi" placeholder="Masukan Divisi">
                                    </div>
                                    <div class="col-md-4 mb-1">
                                        <label style="font-weight: 400; font-size: 0.8rem;" for="kelas"
                                            class="form-label">KELAS:</label>
                                        <input type="text" class="form-control form-control-sm" id="kelas"
                                            name="kelas" placeholder="Masukan Kelas">
                                    </div>
                                    <div class="col-md-4 mb-1">
                                        <label style="font-weight: 400; font-size: 0.8rem;" for="sub_kelas"
                                            class="form-label">SUB KELAS:</label>
                                        <input type="text" class="form-control form-control-sm" id="sub_kelas"
                                            name="sub_kelas" placeholder="Masukan Sub Kelas">
                                    </div>
                                    <div class="col-md-4 mb-1">
                                        <label style="font-weight: 400; font-size: 0.8rem;" for="ordo"
                                            class="form-label">ORDO:</label>
                                        <input type="text" class="form-control form-control-sm" id="ordo"
                                            name="ordo" placeholder="Masukan Ordo">
                                    </div>
                                    <div class="col-md-4 mb-1">
                                        <label style="font-weight: 400; font-size: 0.8rem;" for="famili"
                                            class="form-label">FAMILI:</label>
                                        <input type="text" class="form-control form-control-sm" id="famili"
                                            name="famili" placeholder="Masukan Famili">
                                    </div>
                                    <div class="col-md-4 mb-1">
                                        <label style="font-weight: 400; font-size: 0.8rem;" for="genus"
                                            class="form-label">GENUS:</label>
                                        <input type="text" class="form-control form-control-sm" id="genus"
                                            name="genus" placeholder="Masukan Genus">
                                    </div>
                                    <div class="col-md-4 mb-1">
                                        <label style="font-weight: 400; font-size: 0.8rem;" for="spesies"
                                            class="form-label">SPESIES:</label>
                                        <input type="text" class="form-control form-control-sm" id="spesies"
                                            name="spesies" placeholder="Masukan Spesies">
                                    </div>
                                </div>
                                <hr>
                                <div class="mb-2">
                                    <label for="deskripsi" class="form-label">DESKRIPSI:</label>
                                    <textarea class="form-control form-control-sm" id="deskripsi" name="deskripsi" rows="5"
                                        placeholder="Masukkan deskripsi di sini..."></textarea>
                                </div>
                                <hr>
                                <div class="mb-2">
                                    <label for="bagian_yang_digunakan" class="form-label">BAGIAN YANG DIGUNAKAN:</label>
                                    <textarea class="form-control form-control-sm" id="bagian_yang_digunakan" name="bagian_yang_digunakan"
                                        rows="3" placeholder="Masukkan bagian yang digunakan..."></textarea>
                                </div>
                                <hr>
                                <div class="mb-2">
                                    <label for="konstituen" class="form-label">KONSTITUEN:</label>
                                    <textarea class="form-control form-control-sm" id="konstituen" name="konstituen" rows="3"
                                        placeholder="Masukkan konstituen..."></textarea>
                                </div>
                                <hr>
                                <div class="mb-2">
                                    <label for="indikasi" class="form-label">INDIKASI:</label>
                                    <textarea class="form-control form-control-sm" id="indikasi" name="indikasi" rows="3"
                                        placeholder="Masukkan indikasi..."></textarea>
                                </div>
                                <hr>
                                <div class="mb-2">
                                    <label for="penggunaan_tradisional" class="form-label">PENGGUNAAN TRADISIONAL:</label>
                                    <textarea class="form-control form-control-sm" id="penggunaan_tradisional" name="penggunaan_tradisional"
                                        rows="3" placeholder="Masukkan penggunaan tradisional..."></textarea>
                                </div>
                                <hr>
                                <div class="mb-2">
                                    <label for="dosis_harian" class="form-label">DOSIS HARIAN:</label>
                                    <textarea class="form-control form-control-sm" id="dosis_harian" name="dosis_harian" rows="3"
                                        placeholder="Masukkan dosis harian..."></textarea>
                                </div>
                                <hr>
                                <div class="mb-2">
                                    <label for="kontraindikasi" class="form-label">KONTRAINDIKASI, INTERAKSI, DAN EFEK
                                        SAMPING:</label>
                                    <textarea class="form-control form-control-sm" id="kontraindikasi" name="kontraindikasi" rows="3"
                                        placeholder="Masukkan kontraindikasi, interaksi, dan efek samping..."></textarea>
                                </div>
                                <!-- Daftar Pustaka Section -->
                                <div class="mb-2">
                                    <label for="daftar_pustaka" class="form-label">DAFTAR PUSTAKA:</label>
                                    <div id="daftar-pustaka-container">
                                        <div class="input-group input-group-sm mb-1">
                                            <input type="text" class="form-control" name="daftar_pustaka[]"
                                                placeholder="Masukan daftar pustaka">
                                            <div class="input-group-append">
                                                <button class="btn btn-danger remove-daftar-pustaka" type="button">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-sm btn-primary" id="add-daftar-pustaka" type="button">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <hr>
                                <!-- Sumber Internet Section -->
                                <div class="mb-2">
                                    <label for="sumber_internet" class="form-label">SUMBER INTERNET:</label>
                                    <div id="sumber-internet-container">
                                        <div class="input-group input-group-sm mb-1">
                                            <input type="text" class="form-control" name="sumber_internet[]"
                                                placeholder="Masukan sumber internet">
                                            <div class="input-group-append">
                                                <button class="btn btn-danger remove-sumber-internet" type="button">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-sm btn-primary" id="add-sumber-internet" type="button">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <hr>
                                <!-- Gambar Section -->
                                <div class="mb-2">
                                    <label for="link_gambar" class="form-label">LINK GAMBAR:</label>
                                    <div id="link-gambar-container">
                                        <div class="input-group input-group-sm mb-1">
                                            <input type="text" class="form-control" name="link_gambar[]"
                                                accept="image/*" placeholder="Masukan link gambar">
                                            <div class="input-group-append">
                                                <button class="btn btn-danger remove-link-gambar" type="button">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-sm btn-primary" id="add-link-gambar" type="button">
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
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Add new synonym input
            $('#add-sinonim').click(function() {
                const newInput = $(`
        <div class="input-group input-group-sm mb-1">
            <input type="text" class="form-control form-control-sm" name="sinonims[]" placeholder="Masukan sinonim">
            <div class="input-group-append">
                <button class="btn btn-danger remove-sinonim" type="button">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
    `).hide().fadeIn(300);
                $('#sinonim-container').append(newInput);
            });

            // Remove synonym input
            $(document).on('click', '.remove-sinonim', function() {
                if ($('#sinonim-container .input-group').length > 1) {
                    $(this).closest('.input-group').fadeOut(300, function() {
                        $(this).remove();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Minimal satu input sinonim harus ada!',
                    });
                }
            });

            // Add new daftar pustaka input
            $('#add-daftar-pustaka').click(function() {
                const newInput = $(`
        <div class="input-group input-group-sm mb-1">
            <input type="text" class="form-control" name="daftar_pustaka[]" placeholder="Masukan daftar pustaka">
            <div class="input-group-append">
                <button class="btn btn-danger remove-daftar-pustaka" type="button">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
    `).hide().fadeIn(300);
                $('#daftar-pustaka-container').append(newInput);
            });

            // Remove daftar pustaka input
            $(document).on('click', '.remove-daftar-pustaka', function() {
                if ($('#daftar-pustaka-container .input-group').length > 1) {
                    $(this).closest('.input-group').fadeOut(300, function() {
                        $(this).remove();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Minimal satu input daftar pustaka harus ada!',
                    });
                }
            });

            // Add new sumber internet input
            $('#add-sumber-internet').click(function() {
                const newInput = $(`
        <div class="input-group input-group-sm mb-1">
            <input type="text" class="form-control" name="sumber_internet[]" placeholder="Masukan sumber internet">
            <div class="input-group-append">
                <button class="btn btn-danger remove-sumber-internet" type="button">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
    `).hide().fadeIn(300);
                $('#sumber-internet-container').append(newInput);
            });

            // Remove sumber internet input
            $(document).on('click', '.remove-sumber-internet', function() {
                if ($('#sumber-internet-container .input-group').length > 1) {
                    $(this).closest('.input-group').fadeOut(300, function() {
                        $(this).remove();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Minimal satu input sumber internet harus ada!',
                    });
                }
            });

            // Add new gambar input
            $('#add-link-gambar').click(function() {
                const newInput = $(`
        <div class="input-group input-group-sm mb-1">
            <input type="text" class="form-control" name="link-gambar[]" placeholder="Masukan link gambar">
            <div class="input-group-append">
                <button class="btn btn-danger remove-link-gambar" type="button">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
    `).hide().fadeIn(300);
                $('#link-gambar-container').append(newInput);
            });

            // Remove gambar input
            $(document).on('click', '.remove-link-gambar', function() {
                if ($('#link-gambar-container .input-group').length > 1) {
                    $(this).closest('.input-group').fadeOut(300, function() {
                        $(this).remove();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Minimal satu input link gambar harus ada!',
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

                // Validasi untuk "komposisi"
                $('input[name="komposisi[]"]').each(function() {
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
                        $(this).closest('.input-group')
                            .find('.input-group-append')
                            .after(
                                '<div class="invalid-feedback">Field ini tidak boleh kosong.</div>'
                            );
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

            // Mengubah teks label saat file diunggah
            $('#gambar').on('change', function() {
                // Mendapatkan nama file yang diunggah
                const fileName = $(this).val().split('\\').pop();
                // Menampilkan nama file pada label
                $(this).next('.custom-file-label').text(fileName);
            });

        });
    </script>
@endpush
