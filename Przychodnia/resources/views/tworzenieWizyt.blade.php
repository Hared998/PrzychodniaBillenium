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
                <form action="#" id="tworzenie-wizyt__form">
                    <div>
                        <label for="lekarz">Wybierz lekarza:</label>
                        <select name="lekarz" id="wybierz-lekarza">
                            <option value="1">Kamil Walec</option>
                            <option value="2">Marian Konieczny</option>
                        </select>
                    </div>

                    <div>
                        <label for="data-od">Data od:</label>
                        <input type="date" id="data-od" name="data-od" min="2021-06-08" max="2021-12-31">
                    </div>

                    <div>
                        <label for="data-do">Data do:</label>
                        <input type="date" id="data-do" name="data-do" min="2021-06-08" max="2021-12-31">
                    </div>

                    <div>
                        <label for="pracuje-od">Pracuje od:</label>
                        <input type="time" id="pracuje-od" name="pracuje-od" value="08:00" min="08:00" max="16:00" required>
                    </div>

                    <div>
                        <label for="pracuje-do">Pracuje do:</label>
                        <input type="time" id="pracuje-do" name="pracuje-do" value="16:00" min="08:00" max="16:00" required>
                    </div>

                    <button type="submit" class="tworzenie-wizyt__button">Utwórz</button>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
