<header class="header-area">
    <!-- Navbar Area -->
    <div class="palatin-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="palatinNav">

                    <!-- Nav brand -->
                    <a href="/" class="nav-brand" style=""><img src="{{ asset('assets/img/core-img/logo.png') }}" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li class={{ request()->routeIs('') ? "active" : "" }}><a href="/">Accueil</a></li>
                                <li class={{ request()->routeIs('about-us') ? "active" : "" }}><a href="{{ route('about-us') }}">A Propos De Nous</a></li>
                                <li class={{ request()->routeIs('news') ? "active" : "" }}><a href="{{ route('news') }}">Actualités</a></li>
                                <li class={{ request()->routeIs('contacts') ? "active" : "" }}><a href="{{ route('contacts') }}">Contacts</a></li>
                            </ul>

                            <!-- Button -->
                            <div class="menu-btn">
                                <a href="{{ route('donation') }}" class="btn palatin-btn">Agir Avec Nous</a>
                            </div>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>