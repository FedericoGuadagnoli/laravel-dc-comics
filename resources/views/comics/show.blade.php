@extends('layouts.app')

@section('title', $comic->title)
    
@section('main-content')
<div id="comic">
    <div class="banner">
        <div class="container">
            <figure>
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
            </figure>
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
                    <div class="advertisement">
                        <h5>ADVERTISEMENT</h5>
                        <figure>
                            <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="dc power visa">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="comic-info">
        <table>
            <tr>
              <th colspan="2">Talent</th>
            </tr>
            <tr>
              <td>Art by:</td>
              <td>
                John Smith, Jane Doe, Michael Lee, Sarah Jones, Robert Brown,
                Emily Wilson, David Davis, Lisa Wang, Thomas Lee, Michelle Chen
              </td>
            </tr>
            <tr>
              <td>Written by:</td>
              <td>
                James Johnson, Laura Lee, William Smith, Jennifer Chen, Kevin Brown,
                Sandra Lee, Benjamin Chen, Melissa Wilson, Daniel Davis, Olivia Wang
              </td>
            </tr>
            <tr>
              <th colspan="2">Specs</th>
            </tr>
            <tr>
              <td>Series:</td>
              <td>ACTION COMICS</td>
            </tr>
            <tr>
              <td>U.S. Price:</td>
              <td>$19.99</td>
            </tr>
            <tr>
              <td>On Sale Date:</td>
              <td>Oct 02 2018</td>
            </tr>
          </table>          
    </div>
</div>
@endsection