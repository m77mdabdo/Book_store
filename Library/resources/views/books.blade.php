@extends('layouts.app')

@section('content')
<div class="container">
    <h1>All Books</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Available Copies</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->available_copies }}</td>
                <td><a href="{{ route('student.books.borrow', $book->id) }}" class="btn btn-primary">Borrow</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
