@extends('layouts.main')

@section('content')

<main>
  <div class="container mb-3 mt-3">
    <form action="{{route('comics.update', $comic->id)}}" method="POST">
      @csrf

      @method('PUT')
  
      <div class="mb-3">
        <label for="title">Title</label>
        <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" value="{{old('title') ?? $comic->title}}">
        @error('title')
          {{-- se c'è un errore visualizzo il messaggio di errore del campo specificato --}}
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
  
      <div class="mb-3">
        <label for="description">Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('description') ?? $comic->description}}</textarea>
        @error('description')
          {{-- se c'è un errore visualizzo il messaggio di errore del campo specificato --}}
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
  
      <div class="mb-3">
        <label for="thumb">Image Link</label>
        <input class="form-control @error('thumb') is-invalid @enderror" type="text" id="thumb" name="thumb" value="{{old('thumb') ?? $comic->thumb}}">
        @error('thumb')
          {{-- se c'è un errore visualizzo il messaggio di errore del campo specificato --}}
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
  
      <div class="mb-3">
        <label for="price">Price</label>
        <input class="form-control @error('price') is-invalid @enderror" type="text" id="price" name="price" value="{{old('price') ?? $comic->price}}">
        @error('price')
          {{-- se c'è un errore visualizzo il messaggio di errore del campo specificato --}}
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
  
      <div class="mb-3">
        <label for="series">Series</label>
        <input class="form-control @error('series') is-invalid @enderror" type="text" id="series" name="series" value="{{old('series') ?? $comic->series}}">
        @error('series')
          {{-- se c'è un errore visualizzo il messaggio di errore del campo specificato --}}
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
  
      <div class="mb-3">
        <label for="sale_date">Sale date</label>
        <input class="form-control @error('sale_date') is-invalid @enderror" type="date" id="sale_date" name="sale_date" value="{{old('sale_date') ?? $comic->sale_date}}">
        @error('sale_date')
          {{-- se c'è un errore visualizzo il messaggio di errore del campo specificato --}}
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
  
      <div class="mb-3">
        <label for="type">Type</label>
        <input class="form-control @error('type') is-invalid @enderror" type="text" id="type" name="type" value="{{old('type') ?? $comic->type}}">
        @error('type')
          {{-- se c'è un errore visualizzo il messaggio di errore del campo specificato --}}
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
      
      <button class="btn btn-primary" type="submit">Save Edits</button>
    </form>
  </div>
</main>
@endsection