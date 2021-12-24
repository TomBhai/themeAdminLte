<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href= {{ route('main') }} class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href= {{ route('contact') }} class="nav-link">Contact</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href= {{ route('players.index') }} class="nav-link">Players</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- item-->
        <a class="dropdown-item text-danger" href="javascript: void(0)" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
            <i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
            <span key="t-logout">Logout</span>
            <form action="{{ route('logout') }}" id="logout-form" method="post">
                @csrf
            </form>
        </a>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
