@extends('layouts.base')

@section('documentTitle')
    {{ $title }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <h1>Admin Books</h1>
            <div class="col">
                <a href="{{ route('comics.create') }}" class="btn btn-danger mb-5">Aggiungi libro</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-primary">
                    <thead>
                        <tr class="table-primary">
                            <th>Title</th>
                            <th>Authors</th>
                            <th>Genre</th>
                            <th>Edition</th>
                            <th>Price</th>
                            <th>ISBN</th>
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
                            <td><a class="btn btn-primary" href="{{ route('comics.show', $book) }}">View</a></td>
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