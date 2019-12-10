@extends('layouts.app')

@section('content')
<div class="container">
    @include('inc.messages')
    <div class="card">
        <h3 class="ui top attached header">Add a New Book</h3>
        
        <div class="card-content">
            <form action="{{ route('admin.books.store') }}" class="ui form" method="post">
                @include('inc.books')
                @csrf
                <button class="ui primary button">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
