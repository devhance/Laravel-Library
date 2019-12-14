@extends('layouts.app')

@section('content')
<div class="container">
    @include('inc.messages')
    <div class="card">
        <h3 class="ui top attached header">Add a New Book</h3>
        
        <div class="card-content">
            <form action="{{ route('admin.books.store') }}" class="ui form" method="post">
                @include('inc.books')
                <input type="hidden" name="book_id" value="{{ mt_rand(100000000, 999999999) }}">
                @csrf
                <button class="ui basic blue button">Submit</button>
            </form>
        </div> 
    </div>
</div>
@endsection
