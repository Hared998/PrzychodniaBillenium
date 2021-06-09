@extends('layouts.app')

@section('content')
<div class="recepta-content">
    <div class="row">
        <div class="recepta-lekarz col-3 text-center">
            <h3>Wybierz godziny</h3>
            <h3>w których</h3>
            <h3>lekarze będą dostępni</h3>
        </div>
        <div class="recepta-content col-9 d-flex justify-content-center">
            <div class="recepta-board d-flex justify-content-center">
                <form id="tworzenie-wizyt__form" action="/tworzenie-wizyt/dodaj" method="POST">
                    @csrf
                    <div>
                        <label for="lekarz">Wybierz lekarza:</label>
                        <select name="lekarz" id="wybierz-lekarza">
                            @foreach($data as $i)
                            <option value="{{$i->id}}">{{$i->firstName}} {{$i->lastName}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="data-od">Data od:</label>
                        <input type="date" id="data-od" name="data_od" min="2021-06-08" max="2021-12-31">
                    </div>

                    <div>
                        <label for="data-do">Data do:</label>
                        <input type="date" id="data-do" name="data_do" min="2021-06-08" max="2021-12-31">
                    </div>

                    <div>
                        <label for="pracuje-od">Pracuje od:</label>
                        <input type="time" id="pracuje-od" name="pracuje_od" value="08:00" min="08:00" max="16:00" required>
                    </div>

                    <div>
                        <label for="pracuje-do">Pracuje do:</label>
                        <input type="time" id="pracuje-do" name="pracuje_do" value="16:00" min="08:00" max="16:00" required>
                    </div>

                    <button type="submit" class="tworzenie-wizyt__button">Utwórz</button>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
