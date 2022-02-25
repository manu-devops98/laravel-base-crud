@extends('layouts.base')

@section('documentTitle')
    {{ $title }}
@endsection

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif
    <div class="container">
        <div class="row">
            <h1 class="pt-3">Admin Books</h1>
            <div class="col">
                <a href="{{ route('books.create') }}" class="btn btn-danger mb-5">Aggiungi libro</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-primary table-hover table-bordered border-dark">
                    <thead>
                        <tr class="table-danger border-dark">
                            <th scope="col">Title</th>
                            <th scope="col">Authors</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Edition</th>
                            <th scope="col">Price</th>
                            <th scope="col">ISBN</th>
                            <th colspan="3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->authors }}</td>
                            <td>{{ $book->genre }} </td>
                            <td>{{ $book->edition }} </td>
                            <td>{{ $book->price }} €</td>
                            <td>{{ $book->isbn }} </td>
                            <td><a class="btn btn-primary" href="{{ route('books.show', $book) }}">View</a></td>
                             <td><a class="btn btn-primary" href="{{ route('books.edit', $book) }}">Edit</a></td>
                            <td><form action="{{ route('books.destroy', $book->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger" type="submit" value="Delete">
                            </form></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col">
                {{ $books->links() }}
            </div>
        </div>
@endsection