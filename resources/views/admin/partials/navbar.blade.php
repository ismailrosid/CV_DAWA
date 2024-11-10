<style>
    #logout-toggle {
        cursor: pointer;
        /* Menambahkan ikon tangan saat dihover */
    }
</style>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <!-- Notifications Dropdown Menu -->
        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <li class="nav-item dropdown">
            <div class="nav-link d-flex align-items-center">
                <p class=".hide-logout p-0 m-0 p-0 m-0 text-primary mr-2">SELAMAT DATANG</p>
                <p class=".hide-logout p-0 m-0 p-0 m-0 text-primary">-</p>
                <p id="logout-toggle" class="p-0 m-0 p-0 m-0 font-weight-bolder text-primary ml-2"
                    data-toggle="dropdown">ADMIN</p>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                    <div class="p-2">
                        <a href="#" onclick="confirmLogout()"
                            class="dropdown-item bg-danger text-center rounded">Logout</a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</nav>

<script>
    function confirmLogout() {
        // Menampilkan SweetAlert konfirmasi
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: 'Anda akan logout dari akun ini.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, logout!',
            cancelButtonText: 'Batal',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika pengguna mengonfirmasi logout, tampilkan loading
                Swal.fire({
                    title: "Loading....",
                    html: '<div class="spinner-border text-primary"></div>',
                    showConfirmButton: false,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                });

                // Submit form logout setelah delay untuk menunjukkan loading
                setTimeout(function() {
                    document.getElementById('logout-form').submit();
                }, 1000); // Sesuaikan durasi delay sesuai kebutuhan
            }
        });
    }
</script>
