@extends('layouts.app')

@section('content')
<div class="container">

    <div class="login">

        <div class="login-content">
        
            <div class = "change-board">

                <h2>Przypomnij hasło</h2>

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="txt-field">
                            <label for="email">{{ __('Twój adres e-mail') }}</label>

                            <div class="col-md-14">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="txt-field">
                            <label for="password" >{{ __('Nowe hasło') }}</label>

                            <div class="col-md-14">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="txt-field">
                            <label for="password-confirm" >{{ __('Potwierdź nowe hasło') }}</label>

                            <div class="col-md-14">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="button-section">

                                <div class="right">

                                    <button type="submit">{{ __('Zmień hasło') }}</button>

                                </div>

                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
