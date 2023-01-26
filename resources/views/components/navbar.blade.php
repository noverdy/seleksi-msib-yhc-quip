<nav class="navbar navbar-expand-lg sticky-top bg-white">
    <div class="container">
        <a class="navbar-brand" href="{{ route('students.index') }}">
            <img src="{{ asset('logo.png') }}" alt="Logo" height="24" class="d-inline-block align-text-top">
            <span class="d-none d-sm-inline fw-bold">Sistem Pengelolaan Data Mahasiswa</span>
        </a>
        <div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    @if (auth()->check())
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    @else
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</nav>
