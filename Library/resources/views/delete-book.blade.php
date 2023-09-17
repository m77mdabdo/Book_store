@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Delete Book</h1>

    <p>Are you sure you want to delete the book "{{ $book->title }}"?</p>

    <form method="post" action="{{ route('admin.deleteBook', ['id' => $book->id]) }}">
        @csrf
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection
