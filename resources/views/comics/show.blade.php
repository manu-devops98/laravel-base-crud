@extends('layouts.base')

@section('documentTitle')
    {{ $book->title }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                 <h1>{{ $book->title }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
              <img class="fluid-img" src=" {{$book->photo }}" alt="{{$book->title}}">
            </div>
            <div class="col">
              <div>{{ $book->authors }}</div>
              <div><h2>{{  $book->price }} €</h2></div>
            </div>
        </div>
    </div>
@endsection