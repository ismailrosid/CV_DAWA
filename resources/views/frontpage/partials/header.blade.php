<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="#"><img src="{{ asset('img/logo.png') }}" alt="" /></a>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="{{ request()->is('/') ? 'active' : '' }}">
                <a href="{{ url('/') }}">Beranda</a>
            </li>
            {{-- <li class="{{ request()->is('shop') ? 'active' : '' }}">
                <a href="{{ url('/shop') }}">Tentang Kami</a>
            </li>
            <li class="{{ request()->is('shop') ? 'active' : '' }}">
                <a href="{{ url('/shop') }}">Shop</a>
            </li>
            <li class="{{ request()->is('shop') ? 'active' : '' }}">
                <a href="{{ url('/shop') }}">Tumbuhan</a>
            </li>
            <li class="{{ request()->is('shop') ? 'active' : '' }}">
                <a href="{{ url('/shop') }}">Tips & Info Herbal</a>
            </li> --}}
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i> customercare@mediplants.co.id</li>
            {{-- <li>Jam Operasional: Senin - Jumat 08:00 - 17:00</li> --}}
        </ul>
    </div>
</div>
<!-- Humberger End -->

<header class="border fixed-top"
    style="width: 100%; box-sizing: border-box; background-color: white">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="{{ url('/') }}"><img class="w-50 h-50" src="{{ asset('img/logo.png') }}"
                            alt="" /></a>
                </div>
            </div>
            <div class="col-lg-9 d-flex justify-content-end">
                <nav style="margin-left: auto;" class="header__menu">
                    <ul>
                        <li class=" {{ request()->is('/') ? 'active' : '' }}">
                            <a class="p-2 rounded-circle" href="{{ url('/') }}">
                                <i class="text-white fas fa-home fs-5"></i>
                            </a>
                        </li>
                        <li class="{{ request()->is('tentang-kami') ? 'active' : '' }}">
                            <a class="p-2 rounded-circle" href="{{ url('/tentang-kami') }}">
                                <i class="text-white fas fa-user fs-5"></i>
                            </a>
                        </li>
                        <li class="{{ request()->is('tumbuhan') || request()->is('tumbuhan/*') ? 'active' : '' }}">
                            <a class="p-2 rounded-circle" href="{{ url('/tumbuhan') }}">
                                <i class="text-white fas fa-leaf fs-5"></i>
                            </a>
                        </li>
                        <li class="{{ request()->is('herbal') ? 'active' : '' }}">
                            <a class="p-2 rounded-circle" href="{{ url('/herbal') }}">
                                <i class="text-white fas fa-info fs-5"></i>
                            </a>
                        </li>
                        <li class="{{ request()->is('shop') || request()->is('shop/product/*') ? 'active' : '' }}">
                            <a class="p-2 rounded-circle" href="{{ url('/shop') }}">
                                <i class="text-white fas fa-handshake fs-5"></i>
                            </a>
                        </li>
                        <li class="{{ request()->is('shop') || request()->is('shop/product/*') ? 'active' : '' }}">
                            <a class="p-2 rounded-circle" href="{{ url('/shop') }}">
                                <i class="text-white fas fa-shopping-cart fs-5"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
