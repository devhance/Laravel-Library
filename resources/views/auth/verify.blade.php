@extends('layouts.app')

@section('content')
<div class="container">
        <div class="card" style="max-width: 600px; margin: 0 auto;">
            <h3 class="ui top attached header grey lighten-4 center">{{ __('Verify Your Email Address') }}</h3>
            <div class="card-content">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }},
                <form class="ui form" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="ui primary button">{{ __('click here to request another') }}</button>.
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
