<header>
    <nav class="navbar d-flex justify-content-between ">

        <div class="logo">
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
        </div>
        <div class="nav-menu">
            <ul class="navbar-nav d-flex flex-row gap-5">
                <div class="nav-wrap d-flex justify-content-center align-items-center gap-4">
                    <li class="nav-item">
                        <a href="{{ route('characters') }}">
                            <h6>Characters</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <h6>Comics</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <h6>Movies</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <h6>TV</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <h6>Games</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <h6>Collectibles</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <h6>Videos</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <h6>Fans</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <h6>News</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <h6>Shop</h6>
                        </a>
                    </li>
                </div>
            </ul>
        </div>
        <div class="search">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
</header>