@extends('layouts.app')

@section('content')
<div class="container">
    @include('inc.messages')
    <div class="card">
        <h3 class="ui top attached header">List of Rented Books</h3>
        <div class="card-content">
            <table class="ui selectabe celled table">
                <thead>
                    <tr>
                        <th>Book Title</th>
                        <th class="collapsing">Date Rented</th>
                        <th class="collapsing">Return Date</th>
                        <th class="collapsing">Return</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($currentRents as $rented)
                        <tr>
                            <td><a href=""><b>{{ $rented->name }}</b></a></td>
                            <td>{{ $rented->rent_date }}</td>
                            <td>{{ $rented->return_date }}</td>
                            <td>
                                <form action="/user/rented/{{ $rented->id }}" method="post">
                                    @method('PATCH')
                                    @csrf
                                    <button class="mini ui primary icon button"><i class="icon paper plane"></i></button>
                                </form>
                                
                            </td>
                        </tr>
                    @empty 
                        <tr><td colspan="5" class="center aligned">You are currently not renting a book.</td></tr>
                    @endforelse
                </tbody>
            </table>   
        </div>
    </div>

    <div class="card">
        <h3 class="ui top attached header">Rent History</h3>
        <div class="card-content">
            <div class="ui relaxed divided list">
                @forelse ($histories as $history)
                <div class="item">
                    <div class="header">{{ $history->name }}</div>
                    <div class="description">
                        Rented last {{ $history->rent_date }}
                    </div>
                </div>
                @empty
                    You have no books previously rented.
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
