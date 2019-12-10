@extends('layouts.app')

@section('content')
<div class="container">
    @include('inc.messages')
    <div class="card">
        <h3 class="ui top attached header">List of Borrowers</h3>
        
        <div class="card-content">
            <table class="ui selectabe celled table">
                <thead>
                    <tr>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Student ID</th>
                        <th>Email Address</th>
                        <th>Status</th>
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
                            <td>{{ $user->status }}</td>
                            <td>
                                <form action="/admin/users/{{ $user->student_id }}" method="post">
                                    @method('PATCH')

                                    @csrf
                                    <button class="ui negative button">Deactivate</button>
                                </form>
                            </td>
                        </tr>
                    @empty 
                        <tr><td colspan="6">There are no users</td></tr>
                    @endforelse
                </tbody>
            </table>   
        </div>
    </div>
</div>
@endsection
