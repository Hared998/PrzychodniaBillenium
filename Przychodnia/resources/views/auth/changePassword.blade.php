@extends('layouts.app')

@section('content')

<div class="container">

    <div class="login">

        <div class="login-content">
        
            <div class = "change-board">

                <h2>Zmień hasło</h2>

                        <form method="POST" action="{{ route('change.password') }}">

                            <div > 

                                @csrf 

        

                                @foreach ($errors->all() as $error)
            
                                    <p class="text-danger">{{ $error }}</p>

                                @endforeach 

                            </div>

                            <div class="txt-field">

                                <label for="password">Aktualne hasło</label>

                                <div class="col-md-14">

                                    <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">

                                </div>

                            </div>

    

                            <div class="txt-field">

                                <label for="password" >Nowe hasło</label>

    

                                <div class="col-md-14">

                                    <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">

                                </div>

                            </div>

    

                            <div class="txt-field">

                                <label for="password"> Potwierdź nowe hasło</label>

        

                                <div class="col-md-14">

                                    <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">

                                </div>

                            </div>

    


                             <div class="button-section">

                                <div class="rightprzypomnij">

                                    <button type="submit">{{ __('Zmień hasło') }}</button>

                                </div>

                            </div>

                        </form>

            </div>

        </div>

    </div>

</div>

@endsection