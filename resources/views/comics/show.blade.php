@extends('layouts.app')

@section('main_content')
    <div class="container">
        <h1>Dettagli di un fumetto</h1>
        <img src="{{ $comic->thumb }}" alt="">
        <p>{{ $comic->description }}</p>
        <div class="d-flex">
            <a class="btn btn-primary me-3" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Modifica</a>

            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit" onclick="return confirm('Vuoi veramente cancellare questo comic?')">Cancella</button>
            </form>
        </div>
    </div>
@endsection
