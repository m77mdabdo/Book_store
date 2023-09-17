

@section('content')
<div class="container">
    <h1>Add Book</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="post" action="{{ route('admin.addBook') }}">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Book</button>
    </form>
</div>
@endsection
