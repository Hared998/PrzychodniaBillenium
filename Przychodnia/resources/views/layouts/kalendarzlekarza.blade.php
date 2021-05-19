@extends('layouts.app')

@section('content')

<div class="kalendarzlekarza-content">
    <div class="row">
        <div class="kalendarzlekarza-info col-3">
            <h2>{{$lekarz->firstName}}</h2>
            <h2>{{$lekarz->lastName}}</h2>
            <h3>Specjalizacja: {{$lekarz->Specialization}}</h3>
        </div>
        <div class="kalendarzlekarza-calendar col-9">
            <h2>Wypełnij formularz</h2>

            <form action="#">

            </form>


        </div>
    </div>
</div>

@endsection
