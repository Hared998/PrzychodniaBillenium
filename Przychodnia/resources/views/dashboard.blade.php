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
                                
                                {{ Auth::user()->imie }} {{ Auth::user()->nazwisko }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ Auth::user()->email }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Telefon</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ Auth::user()->numer }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Wiek</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ Auth::user()->wiek }}
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
                            <div class="col-sm-4">
                                <h6 class="mb-0">Najblizsze wizyta</h6>
                            </div>
                           
                            <div class="col-sm-6 text-secondary">
                                @if(isset($datavisit))
                                    {{$datavisit->Date}}
                                @else
                                    Brak zaplanowanych wizyt
                                 @endif
                            </div>
                        </div>
                        <hr>
                        @if(isset($doctor))
                        <div class="row">
                            <div class="col-sm-4">
                                Lekarz: 
                            </div>
                            <div class="col-sm-4">
                            {{$doctor->firstName}} {{$doctor->lastName}}
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-4">
                                Specjalizacja:
                            </div>
                            
                            <div class="col-sm-4">
                                {{$doctor->Specialization}} 
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 mx-auto pt-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ostatnie recepty</h4>
                        <div class="list-group">
                            @if(isset($datarecipe))
                            @foreach($datarecipe as $i)
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Lekarz {{$i->firstName}} {{$i->lastName}}</h5>
                                    <small>{{$i->Date}}</small>
                                </div>
                                <p class="mb-1">Zalecenia: {{$i->recommendations}}</p>
                                <p class="mb-1">Lekarstwa: {{$i->Medicines}}</p>
                            </a>
                            @endforeach
                            @else
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Nie dostałeś jeszcze żadnej recepty</h5>
                                </div>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
