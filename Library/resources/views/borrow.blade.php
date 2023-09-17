@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Borrow Book: {{ $book->title }}</h1>
    <form method="post" action="{{ route('student.books.storeBorrow', $book->id) }}">
        @csrf
        <button type="submit" class="btn btn-success">Borrow Now</button>
    </form>
</div>
@endsection
