<style>
    body {
        font-family: 'Fira Sans Condensed', sans-serif;

    }

    .navbar {
        flex-wrap: nowrap;
    }

    .logo img {
        width: 80px;
    }

    nav {
        width: 70%;
        margin: auto;
    }

    .nav-item {
        text-transform: uppercase;
    }

    .nav-wrap {
        height: 80px;
    }
</style>

<header>
    <nav class="navbar d-flex justify-content-between pb-0">

        <div class="logo">
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
        </div>
        <div class="nav-menu">
            <ul class="navbar-nav d-flex flex-row gap-5">
                <div class="nav-wrap d-flex justify-content-center align-items-center gap-4">
                    <li class="nav-item">
                        <h6>Characters</h6>
                    </li>
                    <li class="nav-item">
                        <h6>Comics</h6>
                    </li>
                    <li class="nav-item">
                        <h6>Movies</h6>
                    </li>
                    <li class="nav-item">
                        <h6>TV</h6>
                    </li>
                    <li class="nav-item">
                        <h6>Games</h6>
                    </li>
                    <li class="nav-item">
                        <h6>Collectibles</h6>
                    </li>
                    <li class="nav-item">
                        <h6>Videos</h6>
                    </li>
                    <li class="nav-item">
                        <h6>Fans</h6>
                    </li>
                    <li class="nav-item">
                        <h6>News</h6>
                    </li>
                    <li class="nav-item">
                        <h6>Shop</h6>
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