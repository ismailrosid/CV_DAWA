<aside class="main-sidebar sidebar-light-success elevation-4">
    <!-- Brand Logo -->
    <!-- Uncomment if you want to display a logo or branding information -->
    <!--
    <a href="index3.html" class="brand-link">
        <img src="admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>
    -->

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-center">
            <div class="image w-75 p-0 m-0 d-flex justify-content-center">
                <img src="{{ asset('front/img/logo.png') }}" class="w-100 h-100" alt="User Image">
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Management Section -->
                <li class="nav-header">MANAGEMENT</li>

                <li class="nav-item {{ request()->is('admin/produk*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('admin/produk*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-box"></i>
                        <p>
                            Shop
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.produk.index') }}"
                                class="nav-link {{ request()->is('admin/produk') || request()->is('admin/produk/create') || request()->is('admin/produk/*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Produk</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Shop -->
                {{-- <li class="nav-item">
                    <a href="{{ route('admin.shop.index') }}"
                        class="nav-link {{ request()->is('admin/shop') || request()->is('admin/shop/create') || request()->is('admin/shop/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-box"></i>
                        <p>Shop</p>
                    </a>
                </li> --}}


                <!-- Tumbuhan -->
                <li class="nav-item">
                    <a href="{{ route('admin.tumbuhan.index') }}"
                        class="nav-link {{ request()->is('admin/tumbuhan') || request()->is('admin/tumbuhan/create') || request()->is('admin/tumbuhan/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-seedling"></i>
                        <p>Tumbuhan</p>
                    </a>
                </li>


                <!-- Informasi -->
                <li class="nav-item">
                    <a href="{{ route('admin.informasi.index') }}"
                        class="nav-link {{ request()->is('admin/informasi') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-info-circle"></i>
                        <p>Informasi</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
