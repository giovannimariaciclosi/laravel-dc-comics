@extends('layouts/main')


@section('content')

<main>
  <div id="singlecomic-section">
    <div class="current-image">
    </div>
    <div class="container">

      <img class="thumb" src="{{$comic->thumb}}" alt="image">

      <h1 class="title">
        {{$comic->title}}
      </h1>
      <div class="price">
        <span class="opacity">U.S. Price:</span> {{$comic->price}}
      </div>
      <div class="description">
        {{$comic->description}}
      </div>
    </div>
    <hr>
    <div class="grey-section">
      <div class="container">
        <h3>Specs</h3>
        <div class="specs-container">
          <div class="specs-inner">
            <span class="spec-title">Series:</span>
            <span class="spec-type">{{$comic->series}}</span>
          </div>
          <div class="specs-inner">
            <span class="spec-title">U.S. Price:</span>
            <span class="spec-type">{{$comic->price}}</span>
          </div>
          <div class="specs-inner">
            <span class="spec-title">On Sale Date:</span>
            <span class="spec-type">{{$comic->sale_date}}</span>
          </div>
        </div>
      </div>
      <hr>
    </div>
  </div>
  <div class="container mt-5 mb-5">
    <a href="{{route('home')}}">Go Back</a>
  </div>
</main>

@endsection