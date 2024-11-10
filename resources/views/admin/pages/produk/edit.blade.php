@extends('layouts.admin')
@section('title', 'ADM - Edit Data Tumbuhan')
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
                            <h3 class="card-title">Edit Data Tumbuhan</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('admin.produk.update', $produk->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">

                                <div class="form-group mb-2">
                                    <label for="gambar">GAMBAR
                                        - <a class="text-decoration-none btn p-0 m-0"
                                            href="{{ asset('front/img/produk/' . $produk->gambar) }}" target="_blank">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </label>
                                    <div class="input-group">
                                        <div class="custom-file" id="gambar-container">
                                            <input type="file" class="form-control form-control-sm" id="gambar"
                                                name="gambar">
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
                                            <option value="{{ $item->id }}"
                                                {{ $item->id == $produk->id_kategori ? 'selected' : '' }}>
                                                {{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <hr>

                                <div class="mb-2">
                                    <label class="form-label" for="nama_produk">NAMA PRODUK:</label>
                                    <input type="text" class="form-control form-control-sm" id="nama_produk"
                                        name="nama_produk" value="{{ $produk->nama }}" spellcheck="false" autocomplete="off"
                                        placeholder="Masukan nama produk" autocomplete="off">
                                </div>
                                <hr>

                                <div class="mb-2">
                                    <label class="form-label" for="harga">HARGA:</label>
                                    <input type="text" class="form-control form-control-sm only-number" id="harga"
                                        name="harga" value="{{ intval($produk->harga) }}" spellcheck="false"
                                        autocomplete="off" placeholder="Masukan harga produk" autocomplete="off">


                                </div>
                                <hr>

                                <!-- Deskripsi Section -->
                                <div class="mb-2">
                                    <label for="deskripsi" class="form-label">DESKRIPSI:</label>
                                    <textarea class="form-control form-control-sm" id="deskripsi" name="deskripsi" rows="3" spellcheck="false"
                                        autocomplete="off" placeholder="Masukkan deskripsi produk...">{{ $produk->deskripsi }}</textarea>
                                </div>
                                <hr>

                                @if ($produk->kategori->nama == 'Herbal')
                                    <div class="mb-2">
                                        <label for="tidak_disarankan" class="form-label">TIDAK DISARANKAN UNTUK:</label>
                                        <div id="tidak-disarankan-container">
                                            @foreach ($produk->tidak_disarankan as $item)
                                                <div class="input-group input-group-sm mb-1">
                                                    <input type="text" class="form-control" name="tidak_disarankan[]"
                                                        value="{{ $item }}" spellcheck="false" autocomplete="off"
                                                        placeholder="Masukan tidak disarankan untuk">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-danger remove-tidak-disarankan"
                                                            type="button">
                                                            <i class="fas fa-minus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            @endforeach
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
                                        <label for="tidak_dikonsumsi_bersama_obat" class="form-label">TIDAK DIKONSUMSI
                                            BERSAMA
                                            OBAT:</label>
                                        <textarea class="form-control form-control-sm" id="tidak_dikonsumsi_bersama_obat" name="tidak_dikonsumsi_bersama_obat"
                                            rows="3" placeholder="Masukan tidak dikonsumsi bersama obat" spellcheck="false" autocomplete="off">{{ $produk->tidak_dikonsumsi_bersama_obat }}</textarea>
                                        <hr>
                                    </div>
                                    <hr>
                                    <!-- Komposisi -->
                                    <label for="klasifikasi" class="form-label">KOMPOSISI:</label>
                                    <table class="table table-sm table-bordered">
                                        <thead>
                                            <tr>
                                                <td class="border-top-0 border-bottom-0 text-center" style="width: 5%">No
                                                </td>
                                                <td class="border-top-0 border-bottom-0 text-center" style="width: 50%">
                                                    Takaran</td>
                                                <td class="border-top-0 border-bottom-0 text-center">Detail Komposisi</td>
                                                <td class="border-top-0 border-bottom-0 text-center" style="width: 5%">
                                                    Aksi
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody id="komposisi-body">
                                            @foreach ($result as $item)
                                                @foreach ($item as $key => $value)
                                                    {{-- $key adalah kunci dinamis seperti 'test', dan $value adalah array nilai --}}
                                                    <tr>
                                                        <td class="text-center vertical-align-middle">
                                                            {{ $loop->parent->iteration }}</td>
                                                        <td class="text-center p-3 vertical-align-middle">
                                                            <textarea class="form-control form-control-sm" id="takaran" name="komposisi[]" rows="3"
                                                                placeholder="Masukkan takaran komposisi..." spellcheck="false" autocomplete="off">{{ $key }}</textarea>
                                                        </td>
                                                        <td class="text-center vertical-align-middle p-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="detail-komposisi-container w-100">
                                                                    @foreach ($value as $detail)
                                                                        {{-- $value adalah array yang berisi nilai seperti [1, 2, 3] --}}
                                                                        <div class="input-group input-group-sm w-100 mb-1">
                                                                            <input type="text" class="form-control"
                                                                                name="komposisi[]"
                                                                                placeholder="Masukkan detail komposisi"
                                                                                value="{{ $detail }}"
                                                                                spellcheck="false" autocomplete="off">
                                                                            <div class="input-group-append">
                                                                                <button
                                                                                    class="btn btn-danger remove-detail-komposisi"
                                                                                    type="button">
                                                                                    <i class="fas fa-minus"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                                <div class="ml-2">
                                                                    <button
                                                                        class="btn btn-sm btn-primary add-detail-komposisi mb-1"
                                                                        type="button">
                                                                        <i class="fas fa-plus"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center vertical-align-middle">
                                                            <button class="btn btn-sm text-danger" type="button">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endforeach
                                        </tbody>

                                    </table>

                                    <div class="d-flex justify-content-end mt-1">
                                        <button id="add-komposisi-row" class="btn btn-sm btn-primary" type="button">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                    <hr>
                                    <!-- Tidak Disarankan Untuk -->
                                    <!-- Anjuran Pemakaian -->
                                    <div class="mb-2">
                                        <label for="anjuran_pemakaian" class="form-label">ANJURAN PEMAKAIAN:</label>
                                        <div id="anjuran-pemakaian-container">
                                            @foreach ($produk->anjuran_pemakaian as $item)
                                                <div class="input-group input-group-sm mb-1">
                                                    <input type="text" class="form-control" name="anjuran_pemakaian[]"
                                                        value="{{ $item }}" spellcheck="false"
                                                        autocomplete="off" placeholder="Masukan anjuran pemakaian">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-danger remove-anjuran-pemakaian"
                                                            type="button">
                                                            <i class="fas fa-minus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button class="btn btn-sm btn-primary" id="add-anjuran-pemakaian"
                                                type="button">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                @endif

                                @if ($produk->kategori->nama == 'Lemon Tea' || $produk->kategori->nama == 'Madu')

                                    <!-- Komposisi -->
                                    <div class="mb-2">
                                        <label for="komposisi" class="form-label">KOMPOSISI:</label>
                                        <div id="komposisi-container">
                                            @foreach ($produk->komposisi as $item)
                                                <div class="input-group input-group-sm mb-1">
                                                    <input type="text" class="form-control" name="komposisi[]"
                                                        value="{{ $item }}" spellcheck="false"
                                                        autocomplete="off" placeholder="Masukan komposisi">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-danger remove-komposisi" type="button">
                                                            <i class="fas fa-minus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button class="btn btn-sm btn-primary" id="add-komposisi" type="button">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="row mb-2">
                                            <div class="col-6">
                                                <label class="form-label" for="netto">Netto:</label>
                                                <input type="text" class="form-control form-control-sm only-number"
                                                    id="netto" name="netto" placeholder="Masukan netto"
                                                    spellcheck="false" autocomplete="off" value="{{ $produk->netto }}">
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label" for="satuan">Satuan:</label>
                                                <select class="form-control form-control-sm" id="satuan"
                                                    name="satuan" autocomplete="off">
                                                    <option value="">----------Pilih Satuan----------</option>
                                                    <option value="gr"
                                                        {{ $produk->satuan == 'gr' ? 'selected' : '' }}>GR</option>
                                                    <option value="ml"
                                                        {{ $produk->satuan == 'ml' ? 'selected' : '' }}>ML</option>
                                                </select>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                @endif


                                @if ($produk->kategori->nama == 'Buku')
                                    <div class="mb-2">
                                        <label class="form-label" for="jml_halaman">Jumlah Halaman:</label>
                                        <input type="text" class="form-control form-control-sm" id="jml_halaman"
                                            name="jml_halaman" placeholder="Masukan jumlah halaman" spellcheck="false"
                                            autocomplete="off" value="{{ $produk->jml_halaman }}">
                                        <hr>
                                    </div>
                                @endif

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

            $('#id_kategori').change(function() {
                // Tampilkan SweetAlert Loading
                // Tampilkan SweetAlert Loading
                Swal.fire({
                    title: "Loading....",
                    html: '<div class="spinner-border text-primary"></div>',
                    showConfirmButton: false,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                });

                // Ambil kategori yang dipilih
                let selectedCategory = $(this).find(':selected').text().toLowerCase();

                // Sembunyikan semua elemen terlebih dahulu
                $('.input-for-herbal, .input-for-lemon-tea').addClass('d-none');

                // Gunakan setTimeout untuk delay sebelum menampilkan form sesuai kategori
                setTimeout(function() {
                    // Tampilkan elemen sesuai kategori yang dipilih
                    if (selectedCategory.includes('herbal')) {
                        $('.input-for-herbal').removeClass('d-none');
                    }
                    if (selectedCategory.includes('lemon tea')) {
                        $('.input-for-lemon-tea').removeClass('d-none');
                    }
                    if (selectedCategory.includes('madu')) {
                        $('.input-for-madu').removeClass('d-none');
                    }
                    if (selectedCategory.includes('buku')) {
                        $('.input-for-buku').removeClass('d-none');
                    }
                    // Tutup SweetAlert Loading setelah form ditampilkan
                    Swal.close();
                }, 1000); // Delay selama 1 detik (1000ms)
            });

            // Sembunyikan form tambahan di awal

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

            // Add new komposisi input
            $('#add-komposisi').click(function() {
                const newInput = $(`        
                    <div class="input-group input-group-sm mb-1">
                        <input type="text" class="form-control" name="komposisi[]" placeholder="Masukan komposisi" spellcheck="false" autocomplete="off">
                        <div class="input-group-append">
                            <button class="btn btn-danger remove-komposisi" type="button">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                `).hide().fadeIn(300);
                $('#komposisi-container').append(newInput);
            });

            // Remove komposisi input
            $(document).on('click', '.remove-komposisi', function() {
                if ($('#komposisi-container .input-group').length > 1) {
                    $(this).closest('.input-group').fadeOut(300, function() {
                        $(this).remove();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Minimal satu input komposisi harus ada!',
                    });
                }
            });

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
                let selectedCategory = $('#id_kategori').find(':selected').text().toLowerCase().trim();;


                // Validasi "gambar" (input file)
                if ($('#gambar').val() !== '') {
                    const file = $('#gambar').get(0).files[0];
                    const fileSizeLimit = 2 * 1024 * 1024; // Maksimal ukuran file (2 MB)
                    const validExtensions = ['image/jpeg', 'image/png', 'image/jpg'];

                    if (!validExtensions.includes(file.type)) {
                        isValid = false;
                        $('#gambar-container').addClass('is-invalid');
                        $('#gambar').addClass('is-invalid');
                        $('#gambar-container').after(
                            '<div class="invalid-feedback">Format gambar harus JPEG, JPG, atau PNG.</div>'
                        );
                    }

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
                    $('#id_kategori').addClass('is-invalid');
                    $('#id_kategori').after(
                        '<div class="invalid-feedback">Kategori tidak boleh kosong.</div>'
                    );

                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Silakan pilih kategori terlebih dahulu.',
                    });
                    return; // Hentikan proses validasi lebih lanjut
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
                // Validasi berdasarkan kategori yang dipilih
                if (selectedCategory === 'herbal') {
                    // Validasi untuk herbal
                    $('input[name="tidak_disarankan[]"]').each(function() {
                        if ($(this).val().trim() === '') {
                            isValid = false;
                            $(this).addClass('is-invalid');
                            $(this).closest('.input-group').find('.input-group-append').after(
                                '<div class="invalid-feedback">Tidak disarankan untuk tidak boleh kosong.</div>'
                            );
                        }
                    });

                    if ($('#tidak_dikonsumsi_bersama_obat').val().trim() === '') {
                        isValid = false;
                        $('#tidak_dikonsumsi_bersama_obat').addClass('is-invalid');
                        $('#tidak_dikonsumsi_bersama_obat').after(
                            '<div class="invalid-feedback">Tidak dikonsumsi bersama obat tidak boleh kosong.</div>'
                        );
                    }

                    $('.input-for-herbal textarea[name="komposisi[]"]').each(function() {
                        if ($(this).val().trim() === '') {
                            isValid = false;
                            $(this).addClass('is-invalid');
                        }
                    });

                    // Validasi Detail Komposisi
                    $('.input-for-herbal input[name="komposisi[]"]').each(function() {
                        if ($(this).val().trim() === '') {
                            isValid = false;
                            $(this).addClass('is-invalid');
                        }
                    });

                    // Validasi anjuran pemakaiaan
                    $('input[name="anjuran_pemakaian[]"]').each(function() {
                        if ($(this).val().trim() === '') {
                            isValid = false;
                            $(this).addClass('is-invalid');
                            $(this).closest('.input-group').find('.input-group-append').after(
                                '<div class="invalid-feedback">Anjuran pemakaian tidak boleh kosong.</div>'
                            );
                        }
                    });
                } else if (selectedCategory === 'lemon tea') {
                    // Validasi untuk lemon tea (misalnya, hanya validasi komposisi)

                    // Validasi untuk "komposisi"
                    $('.input-for-lemon-tea input[name="komposisi[]"]').each(function() {
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
                    if ($('#netto').val().trim() === '') {
                        isValid = false;
                        $('#netto').addClass('is-invalid');
                        $('#netto').after(
                            '<div class="invalid-feedback">Netto tidak boleh kosong.</div>'
                        );
                    }
                    if ($('#satuan').val() === '') {
                        isValid = false;
                        $('#satuan').addClass('is-invalid');
                        $('#satuan').after(
                            '<div class="invalid-feedback">Kategori tidak boleh kosong.</div>'
                        );
                    }
                } else if (selectedCategory === 'madu') {
                    // Validasi untuk madu
                    if ($('#netto').val().trim() === '') {
                        isValid = false;
                        $('#netto').addClass('is-invalid');
                        $('#netto').after(
                            '<div class="invalid-feedback">Netto tidak boleh kosong.</div>'
                        );
                    }

                    if ($('#satuan').val() === '') {
                        isValid = false;
                        $('#satuan').addClass('is-invalid');
                        $('#satuan').after(
                            '<div class="invalid-feedback">Kategori tidak boleh kosong.</div>'
                        );
                    }

                } else if (selectedCategory === 'buku') {
                    // Validasi untuk buku
                    if ($('#jml_halaman').val().trim() === '') {
                        isValid = false;
                        $('#jml_halaman').addClass('is-invalid');
                        $('#jml_halaman').after(
                            '<div class="invalid-feedback">Jumlah halaman tidak boleh kosong.</div>'
                        );
                    }
                }

                // Validasi netto

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
                        // Menambahkan karakter tambahan di setiap textarea 'komposisi[]'
                        if (selectedCategory === 'herbal') {
                            $("textarea[name='komposisi[]']").each(function() {
                                let currentText = $(this).val();
                                if (currentText && !currentText.startsWith('+++')) {
                                    currentText = '+++' + currentText;
                                }
                                if (!currentText.endsWith('+++')) {
                                    currentText += '+++';
                                }
                                $(this).val(currentText);
                            });
                        }
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

            $('form').submit(function(e) {
                // Sebelum form disubmit, ubah nilai textarea dengan data yang sudah dimodifikasi
                $("textarea[name='komposisi[]']").each(function() {
                    let modifiedText = $(this).data(
                        'modifiedText'); // Ambil nilai yang sudah dimodifikasi
                    if (modifiedText) {
                        $(this).val(
                            modifiedText
                        ); // Ganti nilai textarea dengan teks yang sudah dimodifikasi
                    }
                });
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
                    .trim();

                // Masukkan teks bersih ke dalam textarea
                textarea.val(clipboardData);
            });

        });
    </script>
@endpush
