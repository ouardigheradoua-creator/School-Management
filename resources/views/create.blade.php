@extends('layout')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<h3> Add Student </h3>

<form method="POST" action="{{ route('students.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" required />
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" required />
    </div>
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" class="form-control" name="phone" required />
    </div>
    <div class="form-group">
        <label for="section">Section:</label>
        <input type="text" class="form-control" name="section" required />
    </div>
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" class="form-control" name="image" required />
    </div>
    <button type="submit" class="btn btn-primary">Add Student</button>
</form>
@endsection