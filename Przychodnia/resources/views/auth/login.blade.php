@extends('layouts.app')

@section('content')


<section class="login">
    <div class="login-content">
        <div class="login-board">
            <h2>Logowanie</h2>
            
                    
                <form method="POST" action="{{ route('login') }}">
                            @csrf
                
                            <div class="txt-field">
                                <label for="email" >{{ __('E-Mail ') }}</label>

                            
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>

                            <div class="txt-field">
                                <label for="password">{{ __('Hasło') }}</label>

                                
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>
                
                    
                            <div class="button-section">
                                <div class="left">
                                    <a href="/register">Zarejestruj się</a>
                            </div>
                                <div class="right">
                                    <button type="submit">{{ __('Zaloguj się') }}</button>
                                </div>
                            </div>
                </form>
            
        </div>
    </div>
</section>






@endsection
