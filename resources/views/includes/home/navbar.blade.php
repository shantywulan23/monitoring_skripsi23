<section class="navbar-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="#">
                        <strong>UNIVERSITAS MUSAMUS</strong>
                    </a>
                    <style>
                        .navbar-brand {
                            font-size: 35px;
                            font-weight: bold;
                            color: #c7c7c7;
                            text-transform: uppercase;
                        }
                    </style>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo"
                        aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item {{ request()->is('home') ? 'active' : '' }}">
                                <a class="page-scroll" href="{{ route('home') }}">Beranda</a>
                            </li>
                            {{-- <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
                                <a class="page-scroll" href="{{ route('dashboard') }}">Dashboard</a>
                            </li> --}}
                        </ul>
                    </div>

                    <div class="navbar-btn d-none d-sm-inline-block">
                        <ul>
                            @if (Auth::user())
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="solid">Keluar</button>
                                    </form>
                                </li>
                            @else
                                <li><a class="solid" href="{{ route('login') }}">Login</a></li>
                                {{-- <li><a class="solid" href="{{ route('register') }}">Daftar</a></li> --}}
                            @endif
                        </ul>
                    </div>
                </nav> <!-- navbar -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
