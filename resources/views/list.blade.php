@extends('layout.master')
@section('title', 'Welcome Page')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Publisher</th>
                <th scope="col">Year</th>
                <th scope="col">Category</th>
                <th scope="col">Picture</th>
                <th scope="col">Actions</th>
                <!-- <th scope="col">Supplier Name - Supplier Location</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $b)
                <tr>
                    <th scope="row">{{ $b->id }}</th>
                    <td>{{ $b->title }}</td>
                    <td>{{ $b->author }}</td>
                    <td>{{ $b->publisher }}</td>
                    <td>{{ $b->year }}</td>
                    <td>{{ $b->category->name }}</td>
                    <td><img src="{{ asset('storage/images/'. $b->book_gambar) }}" style="width: 50px; height: 50px"/td>
                    <!-- <td>
                        @foreach ($b->suppliers as $be)
                            <div>{{ $be->name }} - {{ $be->location }}</div>
                        @endforeach
                    </td> -->
                    <td>
                        <a href="{{ route('edit', $b->id) }}" class="btn btn-success">Update</a>
                        <form action="{{ route('delete', $b->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection