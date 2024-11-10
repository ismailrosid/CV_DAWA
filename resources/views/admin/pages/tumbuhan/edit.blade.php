@extends('layouts.admin')
@section('title', 'ADM - Edit Data Tumbuhan')
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
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Data Tumbuhan</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('admin.tumbuhan.update', $tumbuhan->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group mb-2">
                                    {{-- <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <img class="img-fluid"
                                                src="{{ asset("front/img/tumbuhan/{$tumbuhan->gambar}") }}">
                                        </div>
                                    </div> --}}
                                    <label for="gambar">GAMBAR - <a class="text-decoration-none btn p-0 m-0"
                                            href="{{ asset('front/img/tumbuhan/' . $tumbuhan->gambar) }}" target="_blank">
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
                                <div class="mb-2">
                                    <label class="form-label" for="nama_tumbuhan">NAMA TUMBUHAN:</label>
                                    <input type="text" class="form-control form-control-sm" id="nama_tumbuhan"
                                        name="nama_tumbuhan" spellcheck="false" autocomplete="off"
                                        placeholder="Masukan nama tumbuhan"
                                        value="{{ old('nama_tumbuhan', $tumbuhan->nama) }}" spellcheck="false"
                                        autocomplete="off">
                                </div>
                                <hr>
                                <div class="mb-2">
                                    <label class="form-label" for="nama_latin">NAMA LATIN:</label>
                                    <input type="text" class="form-control form-control-sm" id="nama_latin"
                                        name="nama_latin" spellcheck="false" autocomplete="off"
                                        placeholder="Masukan nama latin"
                                        value="{{ old('nama_latin', $tumbuhan->nama_latin) }}" spellcheck="false"
                                        autocomplete="off">
                                </div>
                                <hr>
                                <!-- Sinonim Section -->
                                <div class="mb-2">
                                    <label for="sinonim" class="form-label">SINONIM:</label>
                                    <div id="sinonim-container">
                                        @foreach ($tumbuhan->sinonims as $sinonim)
                                            <div class="input-group input-group-sm mb-1">
                                                <input type="text" class="form-control" name="sinonims[]"
                                                    spellcheck="false" autocomplete="off" placeholder="Masukan sinonim"
                                                    value="{{ $sinonim }}">
                                                <div class="input-group-append">
                                                    <button class="btn btn-danger remove-sinonim" type="button">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        @endforeach
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
                                    <textarea class="form-control form-control-sm" id="nama_daerah" name="nama_daerah" rows="3" spellcheck="false"
                                        autocomplete="off" placeholder="Masukkan nama daerah...">{{ old('nama_daerah', $tumbuhan->nama_daerah) }}</textarea>
                                </div>
                                <hr>
                                <!-- Klasifikasi Section -->
                                <label for="klasifikasi" class="form-label">KLASIFIKASI:</label>
                                <div class="row">
                                    <div class="col-md-4 mb-1">
                                        <label style="font-weight: 400; font-size: 0.8rem;" for="kerajaan"
                                            class="form-label">KERJAAN:</label>
                                        <input type="text" class="form-control form-control-sm" id="kerajaan"
                                            name="kerajaan" spellcheck="false" autocomplete="off"
                                            placeholder="Masukan Kerajaan"
                                            value="{{ old('kerajaan', $tumbuhan->kerajaan) }}">
                                    </div>
                                    <div class="col-md-4 mb-1">
                                        <label style="font-weight: 400; font-size: 0.8rem;" for="sub_kerajaan"
                                            class="form-label">SUB KERAJAAN:</label>
                                        <input type="text" class="form-control form-control-sm" id="sub_kerajaan"
                                            name="sub_kerajaan" spellcheck="false" autocomplete="off"
                                            placeholder="Masukan Sub Kerajaan"
                                            value="{{ old('sub_kerajaan', $tumbuhan->sub_kerajaan) }}">
                                    </div>
                                    <div class="col-md-4 mb-1">
                                        <label style="font-weight: 400; font-size: 0.8rem;" for="super_divisi"
                                            class="form-label">SUPER DIVISI:</label>
                                        <input type="text" class="form-control form-control-sm" id="super_divisi"
                                            name="super_divisi" spellcheck="false" autocomplete="off"
                                            placeholder="Masukan Super Divisi"
                                            value="{{ old('super_divisi', $tumbuhan->super_divisi) }}">
                                    </div>
                                    <div class="col-md-4 mb-1">
                                        <label style="font-weight: 400; font-size: 0.8rem;" for="divisi"
                                            class="form-label">DIVISI:</label>
                                        <input type="text" class="form-control form-control-sm" id="divisi"
                                            name="divisi" spellcheck="false" autocomplete="off"
                                            placeholder="Masukan Divisi" value="{{ old('divisi', $tumbuhan->divisi) }}">
                                    </div>
                                    <div class="col-md-4 mb-1">
                                        <label style="font-weight: 400; font-size: 0.8rem;" for="kelas"
                                            class="form-label">KELAS:</label>
                                        <input type="text" class="form-control form-control-sm" id="kelas"
                                            name="kelas" spellcheck="false" autocomplete="off"
                                            placeholder="Masukan Kelas" value="{{ old('kelas', $tumbuhan->kelas) }}">
                                    </div>
                                    <div class="col-md-4 mb-1">
                                        <label style="font-weight: 400; font-size: 0.8rem;" for="sub_kelas"
                                            class="form-label">SUB KELAS:</label>
                                        <input type="text" class="form-control form-control-sm" id="sub_kelas"
                                            name="sub_kelas" spellcheck="false" autocomplete="off"
                                            placeholder="Masukan Sub Kelas"
                                            value="{{ old('sub_kelas', $tumbuhan->sub_kelas) }}">
                                    </div>
                                    <div class="col-md-4 mb-1">
                                        <label style="font-weight: 400; font-size: 0.8rem;" for="ordo"
                                            class="form-label">ORDO:</label>
                                        <input type="text" class="form-control form-control-sm" id="ordo"
                                            name="ordo" spellcheck="false" autocomplete="off"
                                            placeholder="Masukan Ordo" value="{{ old('ordo', $tumbuhan->ordo) }}">
                                    </div>
                                    <div class="col-md-4 mb-1">
                                        <label style="font-weight: 400; font-size: 0.8rem;" for="famili"
                                            class="form-label">FAMILI:</label>
                                        <input type="text" class="form-control form-control-sm" id="famili"
                                            name="famili" spellcheck="false" autocomplete="off"
                                            placeholder="Masukan Famili" value="{{ old('famili', $tumbuhan->famili) }}">
                                    </div>
                                    <div class="col-md-4 mb-1">
                                        <label style="font-weight: 400; font-size: 0.8rem;" for="genus"
                                            class="form-label">GENUS:</label>
                                        <input type="text" class="form-control form-control-sm" id="genus"
                                            name="genus" spellcheck="false" autocomplete="off"
                                            placeholder="Masukan Genus" value="{{ old('genus', $tumbuhan->genus) }}">
                                    </div>
                                    <div class="col-md-4 mb-1">
                                        <label style="font-weight: 400; font-size: 0.8rem;" for="spesies"
                                            class="form-label">SPESIES:</label>
                                        <input type="text" class="form-control form-control-sm" id="spesies"
                                            name="spesies" spellcheck="false" autocomplete="off"
                                            placeholder="Masukan Spesies"
                                            value="{{ old('spesies', $tumbuhan->spesies) }}">
                                    </div>
                                </div>
                                <hr>
                                <div class="mb-2">
                                    <label for="deskripsi" class="form-label">DESKRIPSI:</label>
                                    <textarea class="form-control form-control-sm" id="deskripsi" name="deskripsi" rows="5" spellcheck="false"
                                        autocomplete="off" placeholder="Masukkan deskripsi di sini...">{{ old('deskripsi', $tumbuhan->deskripsi) }}</textarea>
                                </div>
                                <hr>
                                <div class="mb-2">
                                    <label for="bagian_yang_digunakan" class="form-label">BAGIAN YANG DIGUNAKAN:</label>
                                    <textarea class="form-control form-control-sm" id="bagian_yang_digunakan" name="bagian_yang_digunakan"
                                        rows="5" spellcheck="false" autocomplete="off" placeholder="Masukkan bagian yang digunakan di sini...">{{ old('bagian_yang_digunakan', $tumbuhan->bagian_yang_digunakan) }}</textarea>
                                </div>
                                <hr>
                                <div class="mb-2">
                                    <label for="konstituen" class="form-label">KONSTITUEN:</label>
                                    <textarea class="form-control form-control-sm" id="konstituen" name="konstituen" rows="3" spellcheck="false"
                                        autocomplete="off" placeholder="Masukkan konstituen...">{{ old('konstituen', $tumbuhan->konstituen) }}</textarea>
                                </div>
                                <hr>
                                <div class="mb-2">
                                    <label for="indikasi" class="form-label">INDIKASI:</label>
                                    <textarea class="form-control form-control-sm" id="indikasi" name="indikasi" rows="3" spellcheck="false"
                                        autocomplete="off" placeholder="Masukkan indikasi...">{{ old('indikasi', $tumbuhan->indikasi) }}</textarea>
                                </div>
                                <hr>
                                <div class="mb-2">
                                    <label for="penggunaan_tradisional" class="form-label">PENGGUNAAN TRADISIONAL:</label>
                                    <textarea class="form-control form-control-sm" id="penggunaan_tradisional" name="penggunaan_tradisional"
                                        rows="3" spellcheck="false" autocomplete="off" placeholder="Masukkan penggunaan tradisional...">{{ old('penggunaan_tradisional', $tumbuhan->penggunaan_tradisional) }}</textarea>
                                </div>
                                <hr>
                                <div class="mb-2">
                                    <label for="dosis_harian" class="form-label">DOSIS HARIAN:</label>
                                    <textarea class="form-control form-control-sm" id="dosis_harian" name="dosis_harian" rows="3"
                                        spellcheck="false" autocomplete="off" placeholder="Masukkan dosis harian...">{{ old('dosis_harian', $tumbuhan->dosis_harian) }}</textarea>
                                </div>
                                <hr>
                                <div class="mb-2">
                                    <label for="kontraindikasi" class="form-label">KONTRAINDIKASI, INTERAKSI, DAN EFEK
                                        SAMPING:</label>
                                    <textarea class="form-control form-control-sm" id="kontraindikasi" name="kontraindikasi" rows="3"
                                        spellcheck="false" autocomplete="off" placeholder="Masukkan kontraindikasi, interaksi, dan efek samping...">{{ old('kontraindikasi', $tumbuhan->kontra_indikasi) }}</textarea>
                                </div>
                                <hr>

                                <!-- Daftar Pustaka Section -->
                                <div class="mb-2">
                                    <label for="daftar_pustaka" class="form-label">DAFTAR PUSTAKA:</label>
                                    <div id="daftar-pustaka-container">
                                        @foreach ($tumbuhan->daftar_pustaka as $pustaka)
                                            <div class="input-group input-group-sm mb-1">
                                                <input type="text" class="form-control" name="daftar_pustaka[]"
                                                    spellcheck="false" autocomplete="off"
                                                    placeholder="Masukan daftar pustaka" value="{{ $pustaka }}">
                                                <div class="input-group-append">
                                                    <button class="btn btn-danger remove-daftar-pustaka" type="button">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        @endforeach
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
                                        @foreach ($tumbuhan->sumber_internet as $sumber)
                                            <div class="input-group input-group-sm mb-1">
                                                <input type="text" class="form-control" name="sumber_internet[]"
                                                    spellcheck="false" autocomplete="off"
                                                    placeholder="Masukan sumber internet" value="{{ $sumber }}">
                                                <div class="input-group-append">
                                                    <button class="btn btn-danger remove-sumber-internet" type="button">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        @endforeach
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
                                        @foreach ($tumbuhan->link_gambar as $gambar)
                                            <div class="input-group input-group-sm mb-1">
                                                <input type="text" class="form-control" name="link_gambar[]"
                                                    accept="image/*" spellcheck="false" autocomplete="off"
                                                    placeholder="Masukan link gambar" value="{{ $gambar }}">
                                                <div class="input-group-append">
                                                    <button class="btn btn-danger remove-link-gambar" type="button">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        @endforeach
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
            <input type="text" class="form-control form-control-sm" name="sinonims[]" spellcheck="false"  autocomplete="off" placeholder="Masukan sinonim">
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
            <input type="text" class="form-control" name="daftar_pustaka[]" spellcheck="false"  autocomplete="off" placeholder="Masukan daftar pustaka">
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
            <input type="text" class="form-control" name="sumber_internet[]" spellcheck="false"  autocomplete="off" placeholder="Masukan sumber internet">
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
            <input type="text" class="form-control" name="link-gambar[]" spellcheck="false"  autocomplete="off" placeholder="Masukan link gambar">
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


                if ($('#gambar').val() !== '') {
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

                // Validasi nama tumbuhan
                if ($('#nama_tumbuhan').val() === '') {
                    isValid = false;
                    $('#nama_tumbuhan').addClass('is-invalid');
                    $('#nama_tumbuhan').after(
                        '<div class="invalid-feedback">Nama Tumbuhan tidak boleh kosong.</div>');
                }

                // Validasi nama latin
                if ($('#nama_latin').val() === '') {
                    isValid = false;
                    $('#nama_latin').addClass('is-invalid');
                    $('#nama_latin').after(
                        '<div class="invalid-feedback">Nama Latin tidak boleh kosong.</div>');
                }


                // // Validasi input sinonim
                $('input[name="sinonims[]"]').each(function(index) {
                    if ($(this).val() === '') {
                        isValid = false;
                        $(this).addClass('is-invalid');
                        $(this).closest('.input-group')
                            .find('.input-group-append') // Menemukan elemen input-group-append
                            .after(
                                '<div class="invalid-feedback">Sinonim tidak boleh kosong.</div>'
                            ); // Menambahkan pesan kesalahan setelah input-group-append
                    }
                });

                // Validasi nama daerah
                if ($('#nama_daerah').val() === '') {
                    isValid = false;
                    $('#nama_daerah').addClass('is-invalid');
                    $('#nama_daerah').after(
                        '<div class="invalid-feedback">Nama Daerah tidak boleh kosong.</div>'
                    );
                }

                // Validasi klasifikasi
                const klasifikasiFields = [{
                        selector: '#kerajaan',
                        message: 'Kerajaan tidak boleh kosong.'
                    },
                    {
                        selector: '#sub_kerajaan',
                        message: 'Sub Kerajaan tidak boleh kosong.'
                    },
                    {
                        selector: '#super_divisi',
                        message: 'Super Divisi tidak boleh kosong.'
                    },
                    {
                        selector: '#divisi',
                        message: 'Divisi tidak boleh kosong.'
                    },
                    {
                        selector: '#kelas',
                        message: 'Kelas tidak boleh kosong.'
                    },
                    {
                        selector: '#sub_kelas',
                        message: 'Sub Kelas tidak boleh kosong.'
                    },
                    {
                        selector: '#ordo',
                        message: 'Ordo tidak boleh kosong.'
                    },
                    {
                        selector: '#famili',
                        message: 'Famili tidak boleh kosong.'
                    },
                    {
                        selector: '#genus',
                        message: 'Genus tidak boleh kosong.'
                    },
                    {
                        selector: '#spesies',
                        message: 'Spesies tidak boleh kosong.'
                    }
                ];

                klasifikasiFields.forEach(function(field) {
                    if ($(field.selector).val() === '') {
                        isValid = false;
                        $(field.selector).addClass('is-invalid');
                        $(field.selector).after('<div class="invalid-feedback">' + field.message +
                            '</div>');
                    }
                });

                // Validasi deskripsi dan bagian yang digunakan
                const textareaFields = [{
                        selector: '#deskripsi',
                        message: 'Deskripsi tidak boleh kosong.'
                    },
                    {
                        selector: '#bagian_yang_digunakan',
                        message: 'Bagian yang digunakan tidak boleh kosong.'
                    },
                    {
                        selector: '#konstituen',
                        message: 'Konstituen tidak boleh kosong.'
                    },
                    {
                        selector: '#indikasi',
                        message: 'Indikasi tidak boleh kosong.'
                    },
                    {
                        selector: '#penggunaan_tradisional',
                        message: 'Penggunaan tradisional tidak boleh kosong.'
                    },
                    {
                        selector: '#dosis_harian',
                        message: 'Dosis harian tidak boleh kosong.'
                    },
                    {
                        selector: '#kontraindikasi',
                        message: 'Kontraindikasi tidak boleh kosong.'
                    }
                ];

                textareaFields.forEach(function(field) {
                    if ($(field.selector).val() === '') {
                        isValid = false;
                        $(field.selector).addClass('is-invalid');
                        $(field.selector).after('<div class="invalid-feedback">' + field.message +
                            '</div>');
                    }
                });

                // Validasi daftar pustaka
                $('input[name="daftar_pustaka[]"]').each(function() {
                    if ($(this).val() === '') {
                        isValid = false;
                        $(this).addClass('is-invalid');
                        $(this).closest('.input-group') // Mengambil elemen input-group terdekat
                            .find('.input-group-append') // Menemukan elemen input-group-append
                            .after(
                                '<div class="invalid-feedback">Daftar pustaka tidak boleh kosong.</div>'
                            ); // Menambahkan pesan kesalahan setelah input-group-append
                    }
                });

                // Validasi sumber internet
                $('input[name="sumber_internet[]"]').each(function() {
                    if ($(this).val() === '') {
                        isValid = false;
                        $(this).addClass('is-invalid');
                        $(this).closest('.input-group') // Mengambil elemen input-group terdekat
                            .find('.input-group-append') // Menemukan elemen input-group-append
                            .after(
                                '<div class="invalid-feedback">Sumber internet tidak boleh kosong.</div>'
                            ); // Menambahkan pesan kesalahan setelah input-group-append
                    }
                });

                // Validasi link gambar
                $('input[name="link_gambar[]"]').each(function() {
                    if ($(this).val() === '') {
                        isValid = false;
                        $(this).addClass('is-invalid');
                        $(this).closest('.input-group') // Mengambil elemen input-group terdekat
                            .find('.input-group-append') // Menemukan elemen input-group-append
                            .after(
                                '<div class="invalid-feedback">Link gambar tidak boleh kosong.</div>'
                            ); // Menambahkan pesan kesalahan setelah input-group-append
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
