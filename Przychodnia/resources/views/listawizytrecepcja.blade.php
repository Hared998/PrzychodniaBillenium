@extends('layouts.app')

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-4 text-primary ">Lista twoich wizyt</h4>
            <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected mb-4">
                <input type="input" class= "form-control form-control-md col-lg-12 " id="myInput" placeholder="Szukaj.."> 
                <span class="input-group-addon bootstrap-touchspin-postfix input-group-append"><span class="input-group-text">🔍</span></span>
            </div>
        
            <div class="table-responsive">
                <table class="table table-hover primary-table-bordered" style="min-width: 400px;">
                    <thead>
                        <tr class= "text-center text-white" style="background: rgb(252, 146, 25);">
                            <th style="width: 131px;">Dzień</th>
                            <th style="width: 131px;">Godzina</th>
                            <th style="width: 131px;">Lekarz</th>
                            <th style="width: 131px;">Pacjent</th>
                            <th style="width: 131px;">Specjalizacja</th>
                            <th style="width: 75px;">Status</th>
                            <th class="bg-info"style="width: 75px; ">Przyciski</th>
                            <th class="bg-info"style="width: 75px; ">Recepty</th>
                            
                        </tr>
                    </thead>
                    <tbody id="myTable">
                    
                    @foreach($data as $i)
                    @php
                    $date = explode(" ", $i->Date);
                    $time = explode(":", $date[1])
                    @endphp
                        <tr class="text-center" >
                            <td><span>{{$date[0]}}</span></td>
                            <td><span class = "label">{{$time[0]}}:{{$time[1]}}</span></td>
                            <td><span class = "label">{{$i->firstName}} {{$i->lastName}}</span></td>
                            <td><span class = "label">{{$i->patientFirstName}} {{$i->patientLastName}}</span></td>
                            <td><span class = "label">{{$i->Specialization}}</span></td>
                            @if($i->isApproved == 0 && $i->isBooked == 1 )
                            <td><span class = "label">Oczekujące</span></td>
                            <td><a href="/przyjmij/{{$i->id}}" class="btn btn-success">Przyjmij</a></td>
                            @endif
                            @if($i->isApproved == 1 && $i->isBooked == 1 && $i->canceled == 0 && $i->Date > $now)
                            <td><span class = "label">Zatwierdzona</span></td>
                            <td><a href="/cancel/{{$i->id}}" class="btn btn-danger">Anuluj</a>
                            <a href="/odwolaj/{{$i->id}}" class="btn btn-danger">Odwolaj</a></td>
                            @endif
                            @if($i->canceled == 1 )
                            <td><span class = "label">Anulowane</span></td>
                            <td><a href="/uncancel/{{$i->id}}" class="btn btn-danger">Przywróć</a></td>
                            @endif
                            @if($i->Date < $now)
                                <td><span class = "label">Odbyta</span></td>
                                <td></td>
                                <td><a href="/tworzenie/{{$i->id}}" class="btn btn-success">Dodaj</a></td>
                            @endif
                            
                                
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
</div>
@endsection