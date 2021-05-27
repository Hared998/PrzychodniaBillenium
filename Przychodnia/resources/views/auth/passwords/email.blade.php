@extends('layouts.app')

@section('content')
<div class="container">

    <div class="login">

        <div class="login-content">
        
            <div class = "reset-board">

                <h2>Przypomnij hasło</h2>
                

                    @if (session('status'))
                        
                            <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            </div>
                            
                           
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        
                        <div class="txt-field">
                            <label for="email">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-14">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="button-section">

                                <div class="right">

                                    <button type="submit">{{ __('Przypomnij hasło') }}</button>

                                </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
