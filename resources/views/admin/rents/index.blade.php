@extends('layouts.app')

@section('content')

    @include('inc.messages')
    
        <h3 class="ui dividing header">Rented Books</h3>
        
        <table class="ui celled table center aligned">
            <thead>
                <tr>
                    <th class="four wide">Book Name</th>
                    <th class="collapsing">Book ID</th>
                    <th class="three wide">Author</th>
                    <th>Category</th>
                    <th>Borrower</th>
                    <th class="collapsing">Date Rented</th>
                    <th class="collapsing">Return Date</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($rents as $rent)
                    <tr>
                        <td>{{ $rent->name }}</td>
                        <td>{{ $rent->book_id }}</td>
                        <td>{{ $rent->author }}</td>
                        <td>{{ $rent->category }}</td>
                        <td>{{ $rent->lastname }} {{ $rent->firstname }}</td>
                        <td>{{ $rent->rent_date }}</td>
                        <td>{{ $rent->return_date }}</td>
                    </tr>

                @empty 
                    <tr><td colspan="7" class="center aligned">There are no books currently on rent.</td></tr>
                @endforelse
            </tbody>
        </table>
    

@endsection
