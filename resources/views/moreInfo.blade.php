<div class="container infos d-flex">
    <ul class="list-unstyled">
        @foreach ($comics as $comic)
            <li class="card list-unstyled"><img src="{{ $comic['thumb'] }}" :alt="{{ $comic['title'] }}">
                <p class="mb-0">{{ $comic['series'] }}</p>
                <h3 class="text-center mt-0 mb-3">{{ $comic['title'] }}</h3>

                <p>{{ $comic['description'] }}</p>

            </li>
        @endforeach
    </ul>
    <a href="/infos">Torna alla Home</a>
</div>
