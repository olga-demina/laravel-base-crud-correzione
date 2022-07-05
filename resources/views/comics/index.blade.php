@extends('layouts.app')

@section('main_content')
    <h1> Lista di fumetti: </h1>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <h3>{{ $comic->title }}</h3>
                <p>{{ $comic->series }}</p>
                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">Vedi dettagli</a>
            </li>
        @endforeach
    </ul>
@endsection
