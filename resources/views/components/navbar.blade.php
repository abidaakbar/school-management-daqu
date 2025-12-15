<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">Daqu School</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
                </li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Profil</a>
                </li>
                {{-- <li><a href="single-post.html">Single Post</a></li> --}}
                <li class="dropdown"><a href="#"><span>Kategori</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('achievement') }}">Prestasi</a></li>

                </li>
                <li><a href="{{ route('news') }}">Berita</a></li>
                <li><a href="{{ route('papers') }}">Artikel</a></li>
                <li><a href="{{ route('teachers') }}">Guru</a></li>
            </ul>
            </li>
            <li><a href="{{ route('contact') }}">Kontak</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <div class="header-social-links">
            {{-- <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a> --}}
            <a href="https://wa.me/+6282122277712" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
            <a href="https://www.instagram.com/pesantrendaqu_tangerang?igsh=cHpnaDlwMnp1bXpn" class="instagram"><i
                    class="bi bi-instagram"></i></a>
            <a href="#" class="envelope"><i class="bi bi-envelope"></i></a>
        </div>

    </div>
</header>
