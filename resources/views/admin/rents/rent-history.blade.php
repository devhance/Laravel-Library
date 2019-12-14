@extends('layouts.app')

@section('content')

    @include('inc.messages')
    
        <h3 class="ui dividing header">Full Records of Rented Books</h3>
        <div><a href="/admin/rented/overdue" class="tiny ui basic red button">See Overdue Books</a>
        <a href="{{ route('admin.rented.index') }}" class="tiny ui basic blue button">See Currently Renting</a></div>
        
        <table class="ui celled table center aligned">
            <thead>
                <tr>
                    <th class="four wide">Book Name</th>
                    <th class="collapsing">Book ID</th>
                    <th class="three wide">Author</th>
                    <th>Category</th>
                    <th>Borrower</th>
                    <th class="collapsing">Date Rented</th>
                    <th class="collapsing">Date Returned</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($rents as $rent)
                    <tr>
                        <td>{{ $rent->name }}</td>
                        <td>{{ $rent->book_id }}</td>
                        <td>{{ $rent->author }}</td>
                        <td>{{ $rent->category }}</td>
                        <td>{{ $rent->lastname }}, {{ $rent->firstname }}</td>
                        <td>{{ $rent->rent_date }}</td>
                        <td>{{ $rent->date_returned }}</td>
                    </tr>

                @empty 
                    <tr><td colspan="7" class="center aligned">No books have been rented and returned at the dates selected.</td></tr>
                @endforelse
                
            </tbody>
        </table>
        {{ $rents->links('vendor.pagination.semantic-ui') }}
        
    
@endsection
