@extends('layouts.app')

@section('title', 'Comics')
    
@section('main-content')
<section id="Content-Goes-Here">
    <div class="container">
        <div class="main-info">
            <h2>CURRENT SERIES</h2>
        </div>
        <div class="row">
            @foreach ($comics as $comic )               
            <div class="card">
                <figure>
                    <a href="{{ route('comics.show', $comic->id)}}">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    </a>
                </figure>
                <figcaption>{{$comic['title']}}</figcaption>
            </div>
            @endforeach  
        </div>  
        <div>
            <button>load more</button>
        </div>
    </div>
  </section>
  <section id="actions">
    <div class="container">
        <ul>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="digital-comics">
                <a href="#">digital comics</a>
            </li>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="dc-merchandise">
                <a href="#">dc merchandise</a>
            </li>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="subscriptions">
                <a href="#">subscriptions</a>
            </li>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="comics shop locator">
                <a href="#">comics shop locator</a>
            </li>
            <li>
                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="dc power visa">
                <a href="#">dc power visa</a>
            </li>
        </ul>
    </div>
  </section>
    
@endsection