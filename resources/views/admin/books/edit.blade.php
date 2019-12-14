@extends('layouts.app')

@section('content')
<div class="container">
    @include('inc.messages')
    <div class="card">
        <h3 class="ui top attached header">Update </h3>
        
        <div class="card-content">
            <form action="{{ route('admin.books.update', $book->id) }}" class="ui form" method="post">
                @method('PATCH')
                @include('inc.books')
                @csrf
                <button class="ui basic blue button">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
