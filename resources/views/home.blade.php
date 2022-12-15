@extends('layouts.app')

@section('content')
    <section>
        <div class="cards-container">
            <div class="title">
                <h3>CURRENT SERIES</h3>
            </div>

            <ul class="row">
                @foreach ($comics as $comic)
                    <li class="card"><img src="{{ $comic['thumb'] }}" :alt="{{ $comic['title'] }}">
                        <p>{{ $comic['title'] }}</p>
                    </li>
                @endforeach

            </ul>

            <div class="btn">
                <a href="/infos">Clicca per maggiori Informazioni</a>
            </div>

        </div>
    </section>
@endsection
