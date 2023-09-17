@extends('layouts.app')

@section('content')
<div class="container">
    <h1>My Borrowed Books</h1>

    @if($borrowedBooks->isEmpty())
        <p>You haven't borrowed any books yet.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Book Title</th>
                    <th>Borrow Date</th>
                    <th>Return Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($borrowedBooks as $borrowedBook)
                    <tr>
                        <td>{{ $borrowedBook->book->title }}</td>
                        <td>{{ $borrowedBook->borrow_date }}</td>
                        <td>{{ $borrowedBook->return_date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
