

@section('content')
<div class="container">
    <h1>Edit Admin Profile</h1>
    <form method="POST" action="{{ route('admin.updateProfile') }}">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $admin->name }}" required>
        
        <label for="email">Email</label>
        <input type="email" name="email" value="{{ $admin->email }}" required>

       

        <button type="submit">Update Profile</button>
    </form>
</div>
@endsection
