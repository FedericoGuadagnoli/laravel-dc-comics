@extends('layouts.app')

@section('title', 'Crea comic')
    
@section('main-content')
<div class="create-comic">
    <h1>Crea comic</h1>
    <a href="{{ route('comics.index')}}">Indietro</a>
</div>
<form action="{{route('comics.update', $comic->id)}}" method="POST" class="form-control" novalidate>
    @method('PUT')
    @csrf
    <div class="left-form">
        <label for="title">Nome fumetto</label>
        <input type="text" id="title" name="title" placeholder="Nome del fumetto" required value="{{ old('title', $comic->title)}}">
    
        <label for="description">Descrizione</label>
        <textarea name="description" id="description" cols="50" placeholder="Descrizione del fumetto" value="{{ old('description', $comic->description)}}"></textarea>
        
        <label for="price">Prezzo</label>
        <input type="text" id="price" name="price" placeholder="Prezzo del fumetto" required value="{{ old('price', $comic->price)}}">
    </div>
    <div class="right-form">
        <label for="thumb">Immagine fumetto</label>
        <input type="url" id="thumb" name="thumb" placeholder="Immagine del fumetto" value="{{ old('thumb', $comic->thumb)}}">

        <label for="series">Serie</label>
        <input type="text" id="series" name="series" placeholder="Serie" required value="{{ old('series', $comic->series)}}">
    
        <label for="sale_date">Nome fumetto</label>
        <input type="sale_date" id="sale_date" name="sale_date" placeholder="Data di commercializzazione" required value="{{ old('sale_date', $comic->sale_date)}}">

        <label for="type">Tipo fumetto</label>
        <input type="type" id="type" name="type" placeholder="Tipo di fumetto" required value="{{ old('type', $comic->type)}}">
    </div>
    <div class="btn">
        <button type="submit">Salva</button>
    </div>
</form>
@endsection