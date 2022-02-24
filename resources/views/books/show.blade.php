@extends('layouts.base')

@section('documentTitle')
    {{ $book->title }}
@endsection

@section('content')
    
        <div class="container">
            <h1 class="my-3">Libro: "{{ $book->title }}"</h1>
            <div class="row">
                <div class="col-6">
                    <ul>
                        @foreach ($book->toArray() as $key => $item)
                        <li>
                            <h2 class="fs-3 text-danger">{{$key}}: <span class="fw-normal text-dark">{{$item}}</span></h2>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-5 mx-2">
                    <div class="image">
                        <h2 class="fs-3 text-danger">Copertina:</h2>
                        <img class="image-fluid" src="{{ $book->photo}}" alt="{{$book->title}}">
                    </div>
                </div>
            </div>
            <a class="btn btn-danger my-3" href="{{ route('books.index')}}">Home</a>
            <a href="{{ url()->previous()}}" type="submit" class="btn btn-primary">Previous</a>
        </div>
 
@endsection