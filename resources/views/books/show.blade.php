@extends('layouts.base')

@section('documentTitle')
    {{ $book->title }}
@endsection

@section('content')
    <div class="container">
        <div class="container">
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
    </div>
@endsection