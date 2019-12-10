@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card" style="max-width: 600px; margin: 0 auto;">
        <h3 class="ui top attached header grey lighten-4 center">{{ __('Register') }}</h3>
        <div class="card-content">
            <form method="POST" action="{{ route('register') }}" class="ui form">
                @csrf
                <div class="field">
                    <label>{{ __('Name') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="field">
                    <label>{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="field">
                    <label>{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="field">
                    <label>{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                <button type="submit" class="ui primary button">
                    {{ __('Register') }}
                </button>

            </form>
        </div>
    </div>
</div>
@endsection
