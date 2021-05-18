@extends('layouts.app')

@section('content')
<section class="login">
    <div class="login-content">
        <div class="login-board">
            <h2>Logowanie</h2>
            <form action="#">
                <div class="txt-field">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                </div>
                <div class="txt-field">
                    <label for="password">Hasło</label>
                    <input type="text" name="password">
                </div>
                <div class="button-section">
                    <div class="left">
                        <a href="#">Zarejestruj się</a>
                    </div>
                    <div class="right">
                        <button type="submit">Zaloguj się</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
