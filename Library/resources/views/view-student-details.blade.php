@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Student Details</h1>

    @if ($student)
        <p>Name: {{ $student->name }}</p>
        <p>Email: {{ $student->email }}</p>
        <p>Student ID: {{ $student->student_id }}</p>
       
    @else
        <p>Student not found.</p>
    @endif
</div>
@endsection
