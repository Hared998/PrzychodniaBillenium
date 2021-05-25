@extends('layouts.app')

@section('content')

<div class="wyborlekarza-content text-center">
    <h1 class="wyborlekarza-title">Wybierz lekarza</h1>
    <h2 class="wyborlekarza-subtitle">aby umówić się na wizytę</h2>

    <div class="wyborlekarza-board d-flex justify-content-center">
        @foreach ($lekarze as $lekarz)
            <a href="{{ route('layouts.kalendarzlekarza', ['id' => $lekarz->id]) }}">
                <div class="wyborlekarza-card">
                    <h3>{{$lekarz->firstName}}</h3>
                    <h3>{{$lekarz->lastName}}</h3>
                    <hr/>
                    <h4>Specjalizacja: {{$lekarz->Specialization}}</h4>
                </div>
            </a>
        @endforeach
    </div>
</div>

@endsection
