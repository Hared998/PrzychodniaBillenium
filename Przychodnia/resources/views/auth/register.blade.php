@extends('layouts.app')

@section('content')
<section class="register">
    <div class="register-content">
        <div class="register-board">
            <h2>Rejestracja</h2>
            <form action="#">
                <div class="row">
                    <div class="txt-field">
                        <label for="email">Email</label>
                        <input type="email" name="email">
                    </div>
                    <div class="txt-field">
                        <label for="password">Hasło</label>
                        <input type="text" name="password">
                    </div>
                    <div class="txt-field">
                        <label for="phone">Nr tel</label>
                        <input type="text" name="phone">
                    </div>
                </div>
                <div class="row">
                    <div class="txt-field">
                        <label for="name">Imię i nazwisko</label>
                        <input type="text" name="name">
                    </div>
                    <div class="txt-field">
                        <label for="age">Wiek</label>
                        <input type="text" name="age">
                    </div>
                    <div class="txt-field">
                        <label for="allergies">Alergie</label>
                        <input type="text" name="allergies">
                    </div>
                </div>
                <div class="right">
                    <button type="submit">Zrejestruj się</button>
                </div>

            </form>
        </div>
    </div>
</section>
@endsection
