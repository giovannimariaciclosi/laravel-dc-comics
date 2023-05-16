@extends('layouts/main')

@section('content')
<main>
  <div class="container">
    <div class="title">
      {{$comics[0]['title']}}
    </div>
    <div class="price">
      {{$comics[0]['price']}}
    </div>
    <div class="description">
      {{$comics[0]['description']}}
    </div>

    <div class="talent-container">
      <div class="subtitle">Art by:</div>
      @foreach ($comics[0]['artists'] as $singleArtist)
      <a href="">  {{$singleArtist}}</a>
      @endforeach
      <div class="subtitle">Written by:</div>
      @foreach ($comics[0]['writers'] as $singleWriter)
      <a href="">  {{$singleWriter}}</a>
      @endforeach
    </div>
    <div class="specs-container">
      <div class="subtitle">Series</div>
      <div class="price">
        {{$comics[0]['series']}}
      </div>
      <div class="subtitle">U.S. Price:</div>
      <div class="price">
        {{$comics[0]['price']}}
      </div>
      <div class="subtitle">On Sale Date:</div>
      <div class="price">
        {{$comics[0]['sale_date']}}
      </div>
    </div>
  </div>
</main>
@endsection