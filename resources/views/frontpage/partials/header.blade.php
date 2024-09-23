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
            <li class="{{ request()->is('shop') ? 'active' : '' }}">
                <a href="{{ url('/shop') }}">Tentang Kami</a>
            </li>
            <li class="{{ request()->is('shop') ? 'active' : '' }}">
                <a href="{{ url('/shop') }}">Shop</a>
            </li>
            <li class="{{ request()->is('shop') ? 'active' : '' }}">
                <a href="{{ url('/shop') }}">Tumbuhan</a>
            </li>
            <li class="{{ request()->is('shop') ? 'active' : '' }}">
                <a href="{{ url('/shop') }}">Tips Herbal</a>
            </li>
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
            <li>Jam Operasional: Senin - Jumat 08:00 - 17:00</li>
        </ul>
    </div>
</div>
<!-- Humberger End -->

<header class="header">
    <div class="header__top" style="background-color: #7ead392f;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> customercare@mediplants.co.id</li>
                            <li>Jam Operasional: Senin - Jumat 08:00 - 17:00</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" alt="" /></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class="{{ request()->is('/') ? 'active' : '' }}">
                            <a href="{{ url('/') }}">Beranda</a>
                        </li>
                        <li class="{{ request()->is('tentang_kami') ? 'active' : '' }}">
                            <a href="{{ url('/tentang_kami') }}">Tentang Kami</a>
                        </li>
                        <li class="{{ request()->is('shop') ? 'active' : '' }}">
                            <a href="{{ url('/shop') }}">Shop</a>
                        </li>
                        <li class="{{ request()->is('tumbuhan') ? 'active' : '' }}">
                            <a href="{{ url('/tumbuhan') }}">Tumbuhan</a>
                        </li>
                        <li class="{{ request()->is('tips_herbal') ? 'active' : '' }}">
                            <a href="{{ url('/tips_herbal') }}">Tips Herbal</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__phone">
                    <div class="header__search__phone">
                        <div class="header__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div style="text-align: start" class="header__search__phone__text">
                            <h5>+6295344029393</h5>
                            <span>Dukungan 24/7</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
