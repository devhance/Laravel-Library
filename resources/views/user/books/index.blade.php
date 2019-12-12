@extends('layouts.app')

@section('content')
<div class="container">
    @include('inc.messages')
    <div class="card">
        <h3 class="ui top attached header">List of Books</h3>
        <div class="card-content">
            <br /><br />
            <table class="ui selectabe celled table">
                <thead>
                    <tr>
                        <th>Book Title</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>Available</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @forelse ($books as $book)
                        <tr>
                            <td><a href="/user/books/{{ $book->id }}">{{ $book->name }}</a></td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->category }}</td>
                            <td>{{ $book->available }}</td>
                            
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
