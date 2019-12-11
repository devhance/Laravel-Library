@extends('layouts.app')

@section('content')
<div class="container">
    @include('inc.messages')
    <div class="card">
        <h3 class="ui top attached header">List of Books</h3>
        <div class="card-content">
            <a href="/admin/books/create" class="ui primary button right">Add Book</a>
            <br /><br />
            <table class="ui selectabe celled table">
                <thead>
                    <tr>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Student ID</th>
                        <th>Email</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->lastname }}</td>
                            <td>{{ $user->firstname }}</td>
                            <td>{{ $user->student_id }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="center aligned">
                                <div class="ui toggle checkbox small">
                                    {{-- <input data-id="{{ $book->id }}" class="toggle-class" type="checkbox" name="status" {{ $book->status == 'Available' ? 'checked' : ''}}> --}}
                                    <input type="checkbox" data-id="{{ $user->id }}" name="status" {{ $user->status == '1' ? 'checked' : '' }}>
                                    <label></label>
                                </div>
                            </td>
                        </tr>
                    @empty 
                        <tr><td colspan="5" class="center">There are no books found.</td></tr>
                    @endforelse
                </tbody>
            </table>   
        </div>
    </div>
</div>
@endsection
