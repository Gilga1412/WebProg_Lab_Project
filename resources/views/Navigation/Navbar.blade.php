<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container">
        {{--             ^-fluid  --}}
        <a class="navbar-brand" href="/">Barbatos Shop</a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/null1">Null1</a></li>
                        <li><a class="dropdown-item" href="/null2">Null2</a></li>
                        <li><a class="dropdown-item" href="/null3">Null3</a></li>
                        <li><a class="dropdown-item" href="/nulldll">Nulldll</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <span class="nav-item">
                    <a class="nav-link {{ $title === 'About' ? 'active' : '' }}" href="/register">Register</a>
                </span>
                <span class="nav-item">
                    <a class="nav-link {{ $title === 'About' ? 'active' : '' }}" href="/login">Login</a>
                </span>
            </ul>
        </div>
    </div>
</nav>
