@extends('layouts.main')

@section('content')

<main>
  <div class="container mb-3 mt-3">
    <form action="{{route('comics.store')}}" method="POST">
      @csrf
  
      <div class="mb-3">
        <label for="title">Title</label>
        {{-- utilizzo le classi di bootstrap per gestire gli errori --}}
        <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" value="{{old('title')}}">
        @error('title')
          {{-- se c'è un errore visualizzo il messaggio di errore del campo specificato --}}
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
  
      <div class="mb-3">
        <label for="description">Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('description')}}</textarea>
        @error('description')
          {{-- se c'è un errore visualizzo il messaggio di errore del campo specificato --}}
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
  
      <div class="mb-3">
        <label for="thumb">Image Link</label>
        <input class="form-control @error('thumb') is-invalid @enderror" type="text" id="thumb" name="thumb" value="{{old('thumb')}}">
        @error('thumb')
          {{-- se c'è un errore visualizzo il messaggio di errore del campo specificato --}}
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
  
      <div class="mb-3">
        <label for="price">Price</label>
        <input class="form-control @error('price') is-invalid @enderror" type="number" id="price" name="price" value="{{old('price')}}">
        @error('price')
          {{-- se c'è un errore visualizzo il messaggio di errore del campo specificato --}}
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
  
      <div class="mb-3">
        <label for="series">Series</label>
        <input class="form-control @error('series') is-invalid @enderror" type="text" id="series" name="series" value="{{old('series')}}">
        @error('series')
          {{-- se c'è un errore visualizzo il messaggio di errore del campo specificato --}}
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
  
      <div class="mb-3">
        <label for="sale_date">Sale date</label>
        <input class="form-control @error('sale_date') is-invalid @enderror" type="date" id="sale_date" name="sale_date" value="{{old('sale_date')}}">
        @error('sale_date')
          {{-- se c'è un errore visualizzo il messaggio di errore del campo specificato --}}
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
  
      <div class="mb-3">
        <label for="type">Type</label>
        <input class="form-control @error('type') is-invalid @enderror" type="text" id="type" name="type" value="{{old('type')}}">
        @error('type')
          {{-- se c'è un errore visualizzo il messaggio di errore del campo specificato --}}
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>

      <button class="btn btn-primary" type="submit">Add New Comic</button>
    </form>
  </div>
</main>
@endsection