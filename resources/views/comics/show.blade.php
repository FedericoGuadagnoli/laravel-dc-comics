@extends('layouts.app')

@section('title', $comic->title)
    
@section('main-content')
<div id="comic">
    <div class="banner">
        <div class="container">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
        </div>
    </div>
    <div class="comic-content">
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h2 class="title">{{$comic['title']}}</h2>
                    </div>
                    <div class="card-body">
                        <div class="comic-label">
                            <div class="price-status">
                               <span class="price">
                                   U.S. Price: {{$comic['price']}}
                                </span> 
                                <span class="status">AVAILABLE</span>
                            </div>
                            <div class="available">
                                <span>Check Availability &#9660;</span>
                            </div>
                        </div>
                        <div class="description">
                            <p>{{$comic['description']}}</p>
                        </div>
                    </div>
                </div>
                <div class="advertisement">
                    <h5>ADVERTISEMENT</h5>
                    <figure>
                        <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="dc">
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <div class="comic-info">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card specs">
                        <div>
                            <h1>Specs</h1>
                        </div>
                        <div class="serie">
                            <span>Series:</span>
                            <span class="series">
                                {{$comic['series']}}
                            </span>
                        </div>
                        <div class="price">
                            <span>U.S. Price:</span>
                            <span class="prices">
                                {{$comic['price']}}
                            </span>
                        </div>
                        <div class="on-sale-date">
                            <span>On Sale Date:</span>
                            <span class="sale-date">
                                {{$comic['sale_date']}}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-actions">
        <a href="{{ route('comics.edit', $comic->id)}}">Modifica</a>
        <a href="{{ route('comics.index') }}">Indietro</a>
    </div>
</div>
@endsection