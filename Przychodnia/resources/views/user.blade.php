@extends('layouts.app')


@section('content')
    <div class="card mt-3">
        <h5 class="card-header">{{$user->imie}}</h5>
        <div class="cardy">
            <ul>
                <li>Imię: {{ $user->imie}}</li>
                <li>Nazwisko: {{ $user->nazwisko }}</li>
                <li>Telefon: {{ $user->numer }}</li>
            </ul>
        </div>
    </div>
@endsection
