@extends('layouts.app')

@section('main_content')
    <div class="container">
        <h1>Crea un nuovo fumetto</h1>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            
            <div class="form-group mb-3">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            <div class="form-group mb-3">
                <label for="description">Descrizione</label>
                <input type="text" class="form-control" name="description" id="description">
            </div>
            <div class="form-group mb-3">
                <label for="thumb">Immagine</label>
                <input type="text" class="form-control" name="thumb" id="thumb">
            </div>
            <div class="form-group mb-3">
                <label for="price">Prezzo</label>
                <input type="number" class="form-control" name="price" id="price">
            </div>
            <div class="form-group mb-3">
                <label for="series">Serie</label>
                <input type="text" class="form-control" name="series" id="series">
            </div>
            <div class="form-group mb-3">
                <label for="sale_date">Data vendita</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date">
            </div>
            <div class="form-group mb-3">
                <label for="type">Tipo</label>
                <input type="text" class="form-control" name="type" id="type">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
