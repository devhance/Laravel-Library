@extends('layouts.app')

@section('content')
<div class="container">
    @include('inc.messages')
    
    @include('inc.book-info')
    
    <form action="{{ route('user.books.update', $book->id) }}" method="post">
        @method('PATCH')
        @csrf
        @if ($checkRent != NULL)
            <div class="ui negative message"><div class="header">You are currently renting this book.</div></div>
        @else
            <button type="submit" class="ui primary button right"{{ $book->available < 1 ? 'disabled' : ''}}><i class="icon edit"></i>Rent</button>
        @endif
    </form>
    
</div>
@endsection
