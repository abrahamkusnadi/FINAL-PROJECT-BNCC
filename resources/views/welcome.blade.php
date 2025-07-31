@extends('layout.master')
@section('title', 'Welcome Page')
@section('content')

<form action="{{ route('create') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title_book" class="form-label">
            Title
        </label>
        <input type="text" class = "form-control" name="title">
    </div>
    <div class="mb-3">
        <label for="author_book" class="form-label">
            author
        </label>
        <input type="text" class = "form-control" name="author">
    </div>    
    <div class="mb-3">
        <label for="publisher_book" class="form-label">
            publisher
        </label>
        <input type="text" class = "form-control" name="publisher">
    </div>
    <div class="mb-3">
        <label for="year_book" class="form-label">
            year
        </label>
        <input type="text" class = "form-control" name="year">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection