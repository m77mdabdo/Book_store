@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Book</h1>

    <form method="post" action="{{ route('admin.editBook', ['id' => $book->id]) }}">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Book</button>
    </form>
</div>
@endsection
