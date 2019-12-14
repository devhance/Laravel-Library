@extends('layouts.app')

@section('content')
<div class="container">
    @include('inc.messages')
    <div class="card">
        <h3 class="ui top attached header">List of Books</h3>
        <div class="card-content">
            <a href="/admin/books/create" class="ui basic blue button right">Add Book</a>
            <br /><br />
            <table class="ui selectabe celled table">
                <thead>
                    <tr>
                        <th>Book Title</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>Available</th>
                        <th>Defective</th>
                        <th>Lost</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($books as $book)
                        <tr>
                            <td><a href="/admin/books/{{ $book->id }}">{{ $book->name }}</a></td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->category }}</td>
                            <td>{{ $book->available }}</td>
                            <td>{{ $book->defective }}</td>
                            <td>{{ $book->lost }}</td>
                            <td>
                                <div class="ui toggle checkbox">
                                    {{-- <input data-id="{{ $book->id }}" class="toggle-class" type="checkbox" name="status" {{ $book->status == 'Available' ? 'checked' : ''}}> --}}
                                    <input type="checkbox" data-id="{{ $book->id }}" name="status" class="js-switch" {{ $book->status == 'Available' ? 'checked' : '' }}>
                                    <label></label>
                                </div>
                            </td>
                        </tr>
                    @empty 
                        <tr><td colspan="5" class="center">There are no books found.</td></tr>
                    @endforelse
                </tbody>
            </table>   
            {{ $books->links('vendor.pagination.semantic-ui') }}
        </div>
    </div>
</div>
@endsection
