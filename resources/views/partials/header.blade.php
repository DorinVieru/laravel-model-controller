<header>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-6">
                <a href="/" class="brand">
                    Booldata Movies
                </a>
            </div>
            <div class="col-6">
                <nav>
                    <ul class="list-unstyled d-flex">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{ route('home') }}">Home</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>