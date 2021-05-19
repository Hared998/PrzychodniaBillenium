@extends('layouts.app')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 ml-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Imie i nazwisko</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                Jan Kowalski
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                test@gmail.al
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Telefon</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                123-456-789
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">PESEL</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                999999999
                            </div>
                        </div>
                        <br>
                </div>
            </div>
            </div>
            <div class="col-lg-5 mr-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Najblizsze wizyta</h6>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-2 text-secondary">
                                2021-05-13
                            </div>
                            <div class="col-sm-4">
                                12:00
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-2">
                                Lekarz:
                            </div>
                            <div class="col-sm-4">
                                Adrian Kowalski
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 mx-auto pt-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ostatnie zalecenia</h4>
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Lekarz Adrian Kowalski</h5>
                                    <small>2 dni temu</small>
                                </div>
                                <p class="mb-1">Zalecenie 1</p>
                                <p class="mb-1">Zalecenie 2</p>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Lekarz Adrian Kowalski</h5>
                                    <small class="text-muted">30 dni temu</small>
                                </div>
                                <p class="mb-1"> Zalecenie 1</p>
                                <p class="mb-1"> Zalecenie 2</p>
                                <p class="mb-1"> Zalecenie 3</p>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Lekarz dziwny</h5>
                                    <small class="text-muted">rok temu</small>
                                </div>
                                <p class="mb-1"> Zalecenie 1</p>
                                <p class="mb-1"> Zalecenie 2</p>
                                <p class="mb-1"> Zalecenie 3</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
