@extends('layouts.base')

@section('documentTitle')
    {{ $book->title }}
@endsection

@section('content')
    
        <div class="container">
            <a class="btn btn-danger my-3" href="{{ route('books.index')}}">Home</a>
            <h1>Libro: "{{ $book->title }}"</h1>
            <ul>
                @foreach ($book->toArray() as $key => $item)
                <li>
                    <h2 class="fs-3 text-danger">{{$key}}: <span class="fw-normal text-dark">{{$item}}</span></h2>
                </li>
                @endforeach
            </ul>
            <a href="{{ url()->previous()}}" type="submit" class="btn btn-primary">Previous</a>
        </div>
 
@endsection