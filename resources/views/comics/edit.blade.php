@extends('layouts.main')

@section('content')

<main>
  <div class="container mb-3 mt-3">
    <form action="{{route('comics.update', $comic->id)}}" method="POST">
      @csrf

      @method('PUT')
  
      <div class="mb-3">
        <label for="title">Title</label>
        <input class="form-control" type="text" id="title" name="title" value="{{$comic->title}}">
      </div>
  
      <div class="mb-3">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description">
          {{$comic->description}}
        </textarea>
      </div>
  
      <div class="mb-3">
        <label for="thumb">Image Link</label>
        <input class="form-control" type="text" id="thumb" name="thumb" value="{{$comic->thumb}}">
      </div>
  
      <div class="mb-3">
        <label for="price">Price</label>
        <input class="form-control" type="number" id="price" name="price" value="{{$comic->price}}">
      </div>
  
      <div class="mb-3">
        <label for="series">Series</label>
        <input class="form-control" type="text" id="series" name="series" value="{{$comic->series}}">
      </div>
  
      <div class="mb-3">
        <label for="sale_date">Sale date</label>
        <input class="form-control" type="date" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
      </div>
  
      <div class="mb-3">
        <label for="type">Type</label>
        <input class="form-control" type="text" id="type" name="type" value="{{$comic->type}}">
      </div>
      
      <button class="btn btn-primary" type="submit">Save Edits</button>
    </form>
  </div>
</main>
@endsection