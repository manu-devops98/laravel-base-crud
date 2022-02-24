@extends('layouts.base')

@section('documentTitle')
    {{ $book->title }}
@endsection

@section('content')
    <div class="container">
        <div class="container">
            <h1>Info Prodotto:</h1>
            <ul>
                @foreach ($book->toArray() as $key => $item)
                <li>
                    {{$key}}: {{$item}}
                </li>
                @endforeach
            </ul>
            <a href="{{ url()->previous()}}" type="submit" class="btn btn-primary">Previous</a>
        </div>
    </div>
@endsection