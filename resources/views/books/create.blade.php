@extends('layouts.base')

@section('documentTitle')
    {{ $title }}
@endsection


@section('content')

    <div class="container">
      <a class="btn btn-danger my-3" href="{{ route('books.index')}}">Home</a>
        <h1 class="my-3">Aggiungi nuovo Fumetto:</h1>
        <div class="row">
            <div class="col py-3">
                <form action="{{ route('books.store') }}" method="post">
                @csrf
                @method('POST')
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="title" name="title">
                    @error('title')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="genre" class="form-label">Genre</label>
                  <input type="text" class="form-control" id="genre" name="genre">
                    @error('genre')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="authors" class="form-label">Authors</label>
                    <input type="text" class="form-control" id="authors" name="authors" rows="3">
                    @error('authors')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="writers" class="form-label">Writers</label>
                  <input type="text" class="form-control" id="writers" name="writers">
                  @error('writers')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="edition" class="form-label">Edition</label>
                  <input type="text" class="form-control" id="edition" name="edition">
                  @error('edition')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="publisher" class="form-label">Publisher</label>
                  <input type="text" class="form-control" id="publisher" name="publisher">
                  @error('publisher')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="isbn" class="form-label">ISBN</label>
                  <input type="text" class="form-control" id="isbn" name="isbn">
                  @error('isbn')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="photo" class="form-label">Photo</label>
                  <input type="text" class="form-control" id="photo" name="photo">
                  @error('photo')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="price" class="form-label">Price</label>
                  <input type="number" class="form-control" id="price" name="price">
                  @error('price')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <a href="{{ url()->previous()}}" type="submit" class="btn btn-primary">Previous</a>
                <button type="submit" class="btn btn-danger">Save</button>

          </form>
            </div>
        </div>
    </div>
@endsection