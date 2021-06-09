@extends('layouts.app')

@section('content')
<div class="recepta-content">
    <div class="row">
        <div class="recepta-lekarz col-3 text-center">
            <h2>{{$lekarz->firstName}}</h2>
            <h2>{{$lekarz->lastName}}</h2>
            <h3>Specjalizacja: {{$lekarz->Specialization}}</h3>
        </div>
        <div class="recepta-content col-9 d-flex justify-content-center">
            <div class="recepta-board">
                <h4 class="recepta-data text-right">Data wystawienia: {{$wizyta->Date}}</h4>
                <div class="row d-flex justify-content-end">
                    <h2 class="recepta-imie-nazwisko">{{$wizyta->patientFirstName}}</h2>
                    <h2 class="recepta-imie-nazwisko">{{$wizyta->patientLastName}}</h2>
                </div>
                <h3 class="recepta-label">Przepisane leki</h3>
                <p class="recepta-text">{{$recepta->Medicines}}</p>
                <h3 class="recepta-label">Zalecenia</h3>
                <p class="recepta-text">{{$recepta->recommendations}}</p>
                <p class="text-center" style="margin-top: 70px;">Recepta wystawiona przez: dr. {{$lekarz->firstName}} {{$lekarz->lastName}}</p>
            </div>
        </div>
    </div>
</div>
@endsection
