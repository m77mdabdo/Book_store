

@section('content')
<div class="container">
    <h1>Admin Profile</h1>
    <p>Name: {{ $admin->name }}</p>
    <p>Email: {{ $admin->email }}</p>
   
</div>
@endsection
