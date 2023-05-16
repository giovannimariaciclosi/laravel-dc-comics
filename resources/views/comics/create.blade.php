@extends('layouts.main')

@section('content')

<main>
  <div class="container mb-3 mt-3">
    <form action="{{route('comics.store')}}" method="POST">
      @csrf
  
      <div class="mb-3">
        <label for="title">Title</label>
        <input type="text" id="title" name="title">
      </div>
  
      <div class="mb-3">
        <label for="description">Description</label>
        <textarea id="description" name="description"></textarea>
      </div>
  
      <div class="mb-3">
        <label for="thumb">Image Link</label>
        <input type="text" id="thumb" name="thumb">
      </div>
  
      <div class="mb-3">
        <label for="price">Price</label>
        <input type="text" id="price" name="price">
      </div>
  
      <div class="mb-3">
        <label for="series">Series</label>
        <input type="text" id="series" name="series">
      </div>
  
      <div class="mb-3">
        <label for="sale_date">Sale date</label>
        <input type="text" id="sale_date" name="sale_date">
      </div>
  
      <div class="mb-3">
        <label for="type">Type</label>
        <input type="text" id="type" name="type">
      </div>
  
      <button class="btn btn-primary" type="submit">Add New Comic</button>
    </form>
  </div>
</main>
@endsection