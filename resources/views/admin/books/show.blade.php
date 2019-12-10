@extends('layouts.app')

@section('content')
<div class="container">
    @include('inc.messages')
    @include('inc.book-info')
    
    <a href="{{ route('admin.books.edit', $book->id) }}" class="ui primary button right"><i class="icon edit"></i>Edit</a>
    
</div>
@endsection
