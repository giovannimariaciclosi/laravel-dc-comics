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
  <div class="container mt-5 mb-5 d-flex justify-content-around">
    <a href="{{route('home')}}"><button class="btn btn-primary">Go Back</button></a>
    {{-- EDIT --}}
    <a href="{{route('comics.edit', $comic->id)}}"><button class="btn btn-success">Edit Comic</button></a>
    {{-- DELETE --}}
    {{-- Button trigger modal --}}
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
      DELETE
    </button>
  
    {{-- Modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Are you sure? <br>
            This is an irreversible action, you can never go back.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger">Delete</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    {{-- /Modal --}}
  </div>
</main>

@endsection