<header>
    <div class="header-top bg-primary text-light">
        <div class="container d-flex justify-content-end">
            <small>DC POWER""VISA@</small>
            <small>
                <div class="dropdown">
                    <a class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ADDITIONAL DC SITES
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Site 1</a></li>
                        <li><a class="dropdown-item" href="#">Site 2</a></li>
                    </ul>
                </div>
            </small>
        </div>
    </div>
    <div class="container d-flex align-items-center justify-content-between">
        <div class="container-logo py-4 ">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
        </div>
        <nav class=" d-flex justify-content-end ">
            <ul class="list-unstyled d-flex">
                <li><a class="menu-item" href="/characters"> CHARACTERS</a></li>
                <li><a class="menu-item menu-item--active" href="/">COMICS</a></li>
                <li><a class="menu-item" href="/movies">MOVIES</a></li>
                <li><a class="menu-item" href="/tv">TV</a></li>
                <li><a class="menu-item" href="/games">GAMES</a></li>
                <li><a class="menu-item" href="/collectibles">COLLECTIBLES</a></li>
                <li><a class="menu-item" href="/videos">VIDEOS</a></li>
                <li><a class="menu-item" href="/fans">FANS</a></li>
                <li><a class="menu-item" href="/news">NEWS</a></li>
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            SHOP
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Shop</a></li>
                            <li><a class="dropdown-item" href="#">Shop 1</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>
