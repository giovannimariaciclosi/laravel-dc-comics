@extends('layouts/main')

@section('content')
<main>
  <div id="card-section">
    <div class="container">
      <div class="current-btn">Current Series</div>
      
      @foreach ($comics as $singleComic)
        <a href="{{route('comics.show', $singleComic->id)}}" class="card">
          <div class="thumb-container">
            <img class="thumb" src="{{$singleComic->thumb}}" alt="{{$singleComic->series}}">
          </div>
          <div class="series">{{$singleComic->series}}</div>
        </a>
        @endforeach
      </div>
      <div class="container btn-container">
        <a href="{{route('comics.create')}}" class="load-more-btn">ADD NEW COMIC</a>
      </div>
  </div>
  <div id="icon-section">
    <div class="container">
      <div class="card-container">
        <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="Digital comics" />
        <div class="card-text">DIGITAL COMICS</div>
      </div>
      <div class="card-container">
        <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="DC MERCHANDISE" />
        <div class="card-text">DC MERCHANDISE</div>
      </div>
      <div class="card-container">
        <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="SUBSCRIPTION" />
        <div class="card-text">SUBSCRIPTION</div>
      </div>
      <div class="card-container">
        <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="COMIC SHOP LOCATOR" />
        <div class="card-text">COMIC SHOP LOCATOR</div>
      </div>
      <div class="card-container">
        <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="DC POWER VISA" />
        <div class="card-text">DC POWER VISA</div>
      </div>
    </div>
  </div>
</main>
@endsection