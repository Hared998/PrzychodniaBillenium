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
                <form action="#" id="tworzenie-wizyt__form">
                    <div>
                        <label for="przepisane-leki">Przepisane leki</label>
                        <input type="text" id="przepisane-leki" name="przepisane-leki">
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
