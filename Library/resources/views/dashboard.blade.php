@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>

    <h2>Borrowed Books</h2>
    <ul>
        @foreach ($borrowedBooks as $book)
            <li>{{ $book->title }}</li>
        @endforeach
    </ul>

    <h2>All Books</h2>
    <ul>
        @foreach ($allBooks as $book)
            <li>{{ $book->title }}</li>
        @endforeach
    </ul>

    <h2>All Users</h2>
    <ul>
        @foreach ($allUsers as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>
@endsection
