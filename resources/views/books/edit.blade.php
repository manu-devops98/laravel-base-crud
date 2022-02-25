@extends('layouts.base')

@section('documentTitle')
    Modifica {{ $book->title }}
@endsection


@section('content')

    <div class="container">
        <h1 class="my-3">Modifica Fumetto:</h1>
        <div class="row">
            <div class="col py-3">
                <form action="{{ route('books.update', $book->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="title" name="title" value="{{ $book->title}}">
                  @error('title')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="genre" class="form-label">Genre</label>
                  <input type="text" class="form-control" id="genre" name="genre" value="{{ $book->genre}}">
                  @error('genre')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="authors" class="form-label">Authors</label>
                    <input type="text" class="form-control" id="authors" name="authors" rows="3" value="{{ $book->authors}}">
                    @error('authors')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="writers" class="form-label">Writers</label>
                  <input type="text" class="form-control" id="writers" name="writers" value="{{ $book->writers}}">
                    @error('writers')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="edition" class="form-label">Edition</label>
                  <input type="text" class="form-control" id="edition" name="edition" value="{{ $book->edition}}">
                  @error('edition')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="publisher" class="form-label">Publisher</label>
                  <input type="text" class="form-control" id="publisher" name="publisher" value="{{ $book->publisher}}">
                  @error('publisher')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="isbn" class="form-label">ISBN</label>
                  <input type="text" class="form-control" id="isbn" name="isbn" value="{{ $book->isbn}}">
                  @error('isbn')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="photo" class="form-label">Photo</label>
                  <input type="text" class="form-control" id="photo" name="photo" value="{{ $book->photo}}">
                  @error('photo')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="price" class="form-label">Price</label>
                  <input type="number" class="form-control" id="price" name="price" value="{{ $book->price}}">
                  @error('price')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <a class="btn btn-danger my-3" href="{{ route('books.index')}}">Home</a>
                <button type="submit" class="btn btn-primary">Edit</button>
          </form>
            </div>
        </div>
    </div>
@endsection