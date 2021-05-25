@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
                



                <section class="register">
    <div class="register-content">
        <div class="register-board">
            <h2>Rejestracja</h2>

            <form method="POST" action="{{ route('register') }}">
                        @csrf

            <form action="#">
                <div class="row">


                <div class="txt-field">
                            <label for="email">{{ __('E-Mail') }}</label>

                            
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                </div>

                <div class="txt-field">
                            <label for="password">{{ __('Hasło') }}</label>

                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                </div>

                <div class="txt-field">
                            <label for="password-confirm">{{ __('Potwierdź hasło') }}</label>

                           
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            
                </div>



                <div class="txt-field">
                            <label for="imie">{{ __('Imię') }}</label>

                            
                                <input id="imie" type="text" name="imie" class="form-control" required autocomplete="imie" autofocus>

                                @error('imie')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                </div>

                <div class="txt-field">
                            <label for="nazwisko">{{ __('Nazwisko') }}</label>

                            
                                <input id="nazwisko" type="text"  name="nazwisko" class="form-control" required autocomplete="nazwisko" autofocus>

                                @error('nazwisko')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                </div>

                <div class="txt-field">
                            <label for="numer">{{ __('Numer tel') }}</label>

                            
                                <input id="numer" type="text"  name="numer" class="form-control" required autocomplete="numer" autofocus>

                                @error('numer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                </div>


                <div class="txt-field">
                            <label for="wiek">{{ __('Wiek') }}</label>                            
                                <input id="wiek" type="text"  name="wiek" class="form-control" required autocomplete="wiek" autofocus>
                                @error('wiek')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                          
                </div>

                
                <div class="right">
                    <button type="submit">{{ __('Zarejestruj się') }}</button>
                </div>

            </form>
        </div>
    </div>
</section>                                              
@endsection
