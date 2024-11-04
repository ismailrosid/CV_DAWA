<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <nav class="humberger__menu__nav  mobile-menu ">
        <ul class="mx-0 px-0">
            <li class=" {{ request()->is('/') ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="text-white fas fa-home fs-5"></i>
                </a>
            </li>
            <li class="{{ request()->is('tentang-kami') ? 'active' : '' }}">
                <a href="{{ url('/tentang-kami') }}">
                    <i class="text-white fas fa-user fs-5"></i>
                </a>
            </li>
            <li class="{{ request()->is('tumbuhan') || request()->is('tumbuhan/*') ? 'active' : '' }}">
                <a href="{{ url('/tumbuhan') }}">
                    <i class="text-white fas fa-leaf fs-5"></i>
                </a>
            </li>
            <li class="{{ request()->is('informasi') ? 'active' : '' }}">
                <a href="{{ url('/informasi') }}">
                    <i class="text-white fas fa-info fs-5"></i>
                </a>
            </li>
            <li class="{{ request()->is('shop') || request()->is('shop/product/*') ? 'active' : '' }}">
                <a href="{{ url('/shop') }}">
                    <i class="text-white fas fa-handshake fs-5"></i>
                </a>
            </li>
            <li class="{{ request()->is('shop') || request()->is('shop/product/*') ? 'active' : '' }}">
                <a href="{{ url('/shop') }}">
                    <i class="text-white fas fa-shopping-cart fs-5"></i>
                </a>
            </li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>

</div>
<!-- Humberger End -->


<header class="header fixed-top">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 px-0 d-flex align-items-center gap-3">
                <div class="header__logo">
                    <a href="{{ url('/') }}"><img id="logo-img" class="img-fluid"
                            src="{{ asset('front/img/logo.png') }}" alt="" /></a>
                </div>
                <p class="p-0 m-0">Jam oprasional 09.00 – 14.00</p>
            </div>
            <div class="col-lg-6 d-flex justify-content-end">
                <nav class="header__menu">
                    <ul>
                        <li class=" {{ request()->is('/') ? 'active' : '' }}">
                            <a style="display: inline-flex; justify-content: center; align-items: center;"
                                href="{{ url('/') }}">
                                <i class="p-0 m-0 text-white fas fa-home fs-5"></i>
                            </a>
                        </li>
                        <li class="{{ request()->is('tentang-kami') ? 'active' : '' }}">
                            <a style="display: inline-flex; justify-content: center; align-items: center;"
                                href="{{ url('/tentang-kami') }}">
                                <i class="p-0 m-0 text-white fas fa-user fs-5"></i>
                            </a>
                        </li>
                        <li class="{{ request()->is('tumbuhan') || request()->is('tumbuhan/*') ? 'active' : '' }}">
                            <a style="display: inline-flex; justify-content: center; align-items: center;"
                                href="{{ url('/tumbuhan') }}">
                                <i class="p-0 m-0 text-white fas fa-leaf fs-5"></i>
                            </a>
                        </li>
                        <li class="{{ request()->is('informasi') ? 'active' : '' }}">
                            <a style="display: inline-flex; justify-content: center; align-items: center;"
                                href="{{ url('/informasi') }}">
                                <i class="p-0 m-0 text-white fas fa-info fs-5"></i>
                            </a>
                        </li>
                        <li
                            class="{{ request()->is('fathnership') || request()->is('fathnership/*') ? 'active' : '' }}">
                            <a style="display: inline-flex; justify-content: center; align-items: center;"
                                href="{{ url('/fathnership') }}">
                                <i class="p-0 m-0 text-white fas fa-handshake fs-5"></i>
                            </a>
                        </li>
                        <li class="{{ request()->is('shop') || request()->is('shop/product/*') ? 'active' : '' }}">
                            <a style="display: inline-flex; justify-content: center; align-items: center;"
                                href="{{ url('/shop') }}">
                                <i class="p-0 m-0 text-white fas fa-shopping-cart fs-5"></i>
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
