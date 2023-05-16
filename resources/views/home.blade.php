@extends('layouts/main')

@section('content')
<main>
  <div id="card-section">
    <div class="container">
      <div class="current-btn">Current Series</div>
      
      @foreach ($comics as $singleComic)
        <div class="card">
          <div class="thumb-container">
            <img class="thumb" src="{{$singleComic['thumb']}}" alt="{{$singleComic['series']}}">
          </div>
          <div class="series">{{$singleComic['series']}}</div>
        </div>
        @endforeach
      </div>
      <div class="container btn-container">
        <div class="load-more-btn">Load More</div>
      </div>
  </div>
  <div id="icon-section">
    <div class="container">
      @foreach ($iconsList as $singleIcon)
        <div class="card-container">
          <img src="{{ Vite::asset('resources/img/' . $singleIcon['image']) }}" alt="Digital comics" />
          <div class="card-text">{{ $singleIcon['text'] }}</div>
        </div>
      @endforeach
    </div>
  </div>
</main>
@endsection