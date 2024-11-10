@extends('layouts.admin')
@section('title', 'ADM - Data Produk')
@push('styles')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <style>
        .dt-buttons {
            float: right;
            margin-left: 15px;
        }

        #example1_filter {
            float: left;
        }

        #example1_filter input {}

        .vertical-align-middle {
            vertical-align: middle !important;
        }

        #example1_length label {
            font-size: 0;
        }

        #example1_length select {
            font-size: initial;
        }

        .blurry {
            filter: blur(3px);
            pointer-events: none;
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
                            <h3 class="card-title">Data Produk</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-sm table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 7%"
                                            class="border-left-0 border-top-0 border-bottom-0 text-center">NO</th>
                                        <th style="width: 25%" class="border-left-0 border-top-0 border-bottom-0">NAMA
                                            PRODUK</th>
                                        <th style="width: 20%" class="border-left-0 border-top-0 border-bottom-0">KATEGORI
                                        </th>
                                        <th class="border-left-0 border-top-0 border-bottom-0">DESKRIPSI</th>
                                        <th style="width: 10%"
                                            class="border-left-0 border-top-0 border-bottom-0 text-center">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="loading-spinner" style="display: none;">
        <i class="fas fa-spinner fa-spin fa-3x"></i>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script>
        $(function() {
            var table = $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "pageLength": 100,
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "{{ route('admin.produk.data') }}",
                    "type": "GET"
                },
                "columns": [{
                        "data": null,
                        "orderable": false,
                        "searchable": false,
                        "render": function(data, type, row, meta) {
                            return type === 'display' ?
                                meta.row + meta.settings._iDisplayStart + 1 :
                                meta.row + 1; // For export
                        },
                        createdCell: function(td) {
                            $(td).addClass("text-center vertical-align-middle");
                        },
                    },
                    {
                        "data": "nama",
                        createdCell: function(td) {
                            $(td).addClass("vertical-align-middle");
                        },
                    },
                    {
                        "data": "kategori",
                        createdCell: function(td) {
                            $(td).addClass("vertical-align-middle");
                        },
                    },
                    {
                        "data": "deskripsi",
                        createdCell: function(td) {
                            $(td).addClass("vertical-align-middle text-justify");
                        },
                    },
                    {
                        "data": null,
                        "orderable": false,
                        "searchable": false,
                        "render": function(data, type, row) {
                            return `
                                <a href="{{ route('admin.produk.edit', '') }}/${row.id}" class="btn m-0 btn-warning btn-sm" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button class="btn m-0 btn-danger btn-sm" onclick="deleteData(${row.id})" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            `;
                        },
                        createdCell: function(td) {
                            $(td).addClass("text-center vertical-align-middle");
                        },
                    }
                ],
                preDrawCallback: function() {
                    $("#example1_wrapper tbody td").addClass("blurry");
                },
                "language": {
                    "processing": '<i style="color:#4a4a4a" class="fas fa-spinner fa-spin fa-3x fa-fw"></i>' +
                        '<span class="sr-only">Loading...</span>' +
                        '<p><span style="color:#4a4a4a" class="loading-text">Memuat data...</span></p>'
                },
                "buttons": [{
                        extend: 'csv',
                        className: 'btn btn-success',
                        title: 'Data_Produk' + '(' + getCurrentDate() + ')',
                        exportOptions: {
                            columns: ':not(:last-child)'
                        }
                    },
                    {
                        extend: 'excel',
                        title: 'Data_Produk' + '(' + getCurrentDate() + ')',
                        className: 'btn btn-light border-success',
                        exportOptions: {
                            columns: ':not(:last-child)'
                        }
                    },
                    {
                        text: 'Tambah Data',
                        className: 'btn btn-primary',
                        action: function(e, dt, node, config) {
                            window.location.href = "{{ route('admin.produk.create') }}";
                        }
                    }
                ],
                dom: 'l<"row"<"col-6"f><"col-6"B>>rtip',
                "createdRow": function(row, data, dataIndex) {
                    var pageInfo = this.api().page.info();
                    $('td:eq(0)', row).html(pageInfo.start + dataIndex + 1);
                }
            });

            table.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });

        function deleteData(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data ini akan dihapus secara permanen!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('admin.produk.destroy', '') }}/" + id,
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            Swal.fire('Terhapus!', response.success, 'success');
                            $('#example1').DataTable().ajax.reload();
                        },
                        error: function(xhr) {
                            Swal.fire('Error!', xhr.responseJSON.error ||
                                "Terjadi kesalahan saat menghapus data.", 'error');
                        }
                    });
                }
            });
        }

        function getCurrentDate() {
            const today = new Date();
            const day = String(today.getDate()).padStart(2, '0');
            const month = String(today.getMonth() + 1).padStart(2, '0');
            const year = today.getFullYear();
            return `${year}/${month}/${day}`;
        }
    </script>
@endpush
