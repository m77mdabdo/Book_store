@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Student Dashboard</h1>
    
    <h2>Borrowed Books</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Borrowed Date</th>
                <th>Return Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($borrowedBooks as $borrowedBook)
            <tr>
                <td>{{ $borrowedBook->book->title }}</td>
                <td>{{ $borrowedBook->book->author }}</td>
                <td>{{ $borrowedBook->borrowed_date }}</td>
                <td>{{ $borrowedBook->return_date }}</td>
                <td><a href="{{ route('student.books.return', $borrowedBook->id) }}" class="btn btn-warning">Return</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
