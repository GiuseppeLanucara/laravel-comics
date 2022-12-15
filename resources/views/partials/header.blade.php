<header>
    <div class="container-fluid">

    </div>
    <div class="container-fluid d-flex align-items-center justify-content-center pt-2">
        <div class="logo me-5">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div>
        <nav>
            <ul class="d-flex list-unstyled">
                @foreach ($datas as $data)
                    <li class="mx-4">{{ $data }}</li>
                @endforeach
            </ul>
        </nav>
        <form class="d-flex ms-5" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
    </div>
</header>
