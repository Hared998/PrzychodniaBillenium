@extends('layouts.app')

@section('content')
<div class="recepta-content">
    <div class="row">
        <div class="recepta-lekarz col-3 text-center">
            <h2>Kamil</h2>
            <h2>Walec</h2>
            <h3>Specjalizacja: Okulista</h3>
        </div>
        <div class="recepta-content col-9 d-flex justify-content-center">
            <div class="recepta-board">
                <h4 class="recepta-data text-right">Data wystawienia: 2021-06-08</h4>
                <div class="row d-flex justify-content-end">
                    <h2 class="recepta-imie-nazwisko">Piotr</h2>
                    <h2 class="recepta-imie-nazwisko">Mierzejewski</h2>
                </div>
                <h3 class="recepta-label">Przepisane leki</h3>
                <p class="recepta-text">Marihunaen, LSD, koks</p>
                <h3 class="recepta-label">Zalecenia</h3>
                <p class="recepta-text">Spożywać wszystkie na raz, dwa razy dziennie</p>
                <p class="text-center" style="margin-top: 70px;">Recepta wystawiona przez: dr. Kamil Walec</p>
            </div>
        </div>
    </div>
</div>
@endsection
