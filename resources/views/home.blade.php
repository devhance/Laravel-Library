@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <h3 class="ui top attached header">Dashboard</h3>

        <div class="card-content">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            You are logged in!
        </div>
    </div>
</div>
@endsection
