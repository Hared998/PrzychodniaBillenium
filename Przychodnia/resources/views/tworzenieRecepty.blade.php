@extends('layouts.app')

@section('content')
<div class="recepta-content">
    <div class="row">
        <div class="recepta-lekarz col-3 text-center">
            <h3>Utwórz</h3>
            <h3>receptę</h3>
        </div>
        <div class="recepta-content col-9 d-flex justify-content-center">
            <div class="recepta-board d-flex justify-content-center">
                <form action="/tworzenie/dodaj" method="POST" id="tworzenie-wizyt__form">
                    <div>
                        @csrf
                        <input type="text" id="pesel" name="pesel" value={{$data->patientPESEL}} style="display:none">
                        <input type="text" id="wizyta" name="wizyta" value={{$data->id}} style="display:none">
                        <input type="text" id="lekarz" name="lekarz" value={{$data->id_lekarz}} style="display:none">
                        <label for="przepisane_leki">Przepisane leki</label>
                        <input type="text" id="przepisane_leki" name="przepisane_leki">
                    </div>
                    <div>
                        <label for="zalecenia">Zalecenia</label>
                        <input type="text" id="zalecenia" name="zalecenia">
                    </div>
                    <button type="submit" class="tworzenie-wizyt__button">Utwórz</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
