@extends('layouts.app')

@section('content')
<div class="content-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-3 ml-auto">
                <div class="card">
                    <button
                      class="btn-fullSize btn-fullSize btn-lg btn-primary"
                      style="
                        background-color: rgb(199, 115, 20) !important;
                        border-style: none;
                        border-color: #ec1f1f !important;
                      "
                      onclick="window.location.pathname = '/showUser'"
                    >
                      Lista pacjentów
                    </button>
                </div>
              </div>
              <div class="col-lg-3 mx-auto">
                <div class="card">
                    <button
                      class="btn-fullSize btn-fullSize btn-lg btn-primary"
                      style="
                        background-color: rgb(199, 115, 20) !important;
                        border-style: none;
                        border-color: #ec1f1f !important;"
						onclick="window.location.pathname = '/tworzenie-wizyt'"
                      
                    >
                      Tworzenie wizyt
                    </button>
                </div>
              </div>
              <div class="col-lg-3 mr-auto">
                <div class="card">

                    <button
                      class="btn-fullSize btn-fullSize btn-lg btn-primary"
                      style="
                        background-color: rgb(199, 115, 20) !important;
                        border-style: none;
                        border-color: #ec1f1f !important;"
						onclick="window.location.pathname = '/recepcja/wizyty'"
                      
                    >
                      Lista wizyt
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-11 mx-auto pt-4">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-center">Kalendarz wizyt</h4>
                    <div class="row">
                      <div class="col-lg-9">
                        <table id="patients">
                          <thead>
                            <tr>
                              <th></th>
                              <th>
                                <span class="long">Poniedziałek</span>
                                <span class="short">Mon</span>
                              </th>
                              <th>
                                <span class="long">Wtorek</span>
                                <span class="short">Tue</span>
                              </th>
                              <th>
                                <span class="long">Środa</span>
                                <span class="short">We</span>
                              </th>
                              <th>
                                <span class="long">Czwartek</span>
                                <span class="short">Thur</span>
                              </th>
                              <th>
                                <span class="long">Piątek</span>
                                <span class="short">Fri</span>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="hour" rowspan="4">
                                <span>8:00</span>
                              </td>
                              <td>{{ $monday800->patientFirstName ?? '' }}</td>
                              <td>{{ $tuesday800->patientFirstName ?? '' }} </td>
                              <td>{{ $wednesday800->patientFirstName ?? '' }}</td>
                              <td>{{ $thursday800->patientFirstName ?? '' }}</td>
                              <td>{{ $friday800->patientFirstName ?? '' ?? '' }}</td>
                            </tr>
                            <tr></tr>
                            <tr></tr>
                            <tr>
                              <td>{{ $monday800->patientLastName ?? '' }}</td>
                              <td>{{ $tuesday800->patientLastName ?? '' }}</td>
                              <td>{{ $wednesday800->patientLastName ?? '' }}</td>
                              <td>{{ $thursday800->patientLastName ?? '' }}</td>
                              <td>{{ $friday800->patientLastName ?? '' }}</td>
                            </tr>
                            <tr>
                              <td class="hour" rowspan="4">
                                <span>8:40</span>
                              </td>
                            </tr>
                            <tr></tr>
                            <tr>
                            <td>{{ $monday840->patientFirstName ?? '' }}</td>
                              <td>{{ $tuesday840->patientFirstName ?? '' }} </td>
                              <td>{{ $wednesday840->patientFirstName ?? '' }}</td>
                              <td>{{ $thursday840->patientFirstName ?? '' }}</td>
                              <td>{{ $friday840->patientFirstName ?? '' }}</td>
                            </tr>
                            <tr>
                            <td>{{ $monday840->patientLastName ?? '' }}</td>
                              <td>{{ $tuesday840->patientLastName ?? '' }}</td>
                              <td>{{ $wednesday840->patientLastName ?? '' }}</td>
                              <td>{{ $thursday840->patientLastName ?? '' }}</td>
                              <td>{{ $friday840->patientLastName ?? '' }}</td>
                            </tr>
                            <tr>
                              <td class="hour" rowspan="4">
                                <span>9:20</span>
                              </td>
                            </tr>
                            <tr></tr>
                            <tr>
                            <td>{{ $monday920->patientFirstName ?? '' }}</td>
                              <td>{{ $tuesday920->patientFirstName ?? '' }} </td>
                              <td>{{ $wednesday920->patientFirstName ?? '' }}</td>
                              <td>{{ $thursday920->patientFirstName ?? '' }}</td>
                              <td>{{ $friday920->patientFirstName ?? '' }}</td>
                            </tr>
                            <tr>
                            <td>{{ $monday920->patientLastName ?? '' }}</td>
                              <td>{{ $tuesday920->patientLastName ?? '' }}</td>
                              <td>{{ $wednesday920->patientLastName ?? '' }}</td>
                              <td>{{ $thursday920->patientLastName ?? '' }}</td>
                              <td>{{ $friday920->patientLastName ?? '' }}</td>
                            </tr>
                            <tr>
                              <td class="hour" rowspan="4">
                                <span>10:00</span>
                              </td>
                            </tr>
                            <tr></tr>
                            <tr>
                            <td>{{ $monday1000->patientFirstName ?? '' }}</td>
                              <td>{{ $tuesday1000->patientFirstName ?? '' }} </td>
                              <td>{{ $wednesday1000->patientFirstName ?? '' }}</td>
                              <td>{{ $thursday1000->patientFirstName ?? '' }}</td>
                              <td>{{ $friday1000->patientFirstName ?? '' }}</td>
                            </tr>
                            <tr>
                            <td>{{ $monday1000->patientLastName ?? '' }}</td>
                              <td>{{ $tuesday1000->patientLastName ?? '' }}</td>
                              <td>{{ $wednesday1000->patientLastName ?? '' }}</td>
                              <td>{{ $thursday1000->patientLastName ?? '' }}</td>
                              <td>{{ $friday1000->patientLastName ?? '' }}</td>
                            </tr>
                            <tr>
                              <td class="hour" rowspan="4">
                                <span>10:40</span>
                              </td>
                            </tr>
                            <tr></tr>
                            <tr>
                            <td>{{ $monday1040->patientFirstName ?? '' }}</td>
                              <td>{{ $tuesday1040->patientFirstName ?? '' }} </td>
                              <td>{{ $wednesday1040->patientFirstName ?? '' }}</td>
                              <td>{{ $thursday1040->patientFirstName ?? '' }}</td>
                              <td>{{ $friday1040->patientFirstName ?? '' }}</td>
                            </tr>
                            <tr>
                            <td>{{ $monday1040->patientLastName ?? '' }}</td>
                              <td>{{ $tuesday1040->patientLastName ?? '' }}</td>
                              <td>{{ $wednesday1040->patientLastName ?? '' }}</td>
                              <td>{{ $thursday1040->patientLastName ?? '' }}</td>
                              <td>{{ $friday1040->patientLastName ?? '' }}</td>
                            </tr>
                            <tr>
                              <td class="hour" rowspan="4">
                                <span>11:20</span>
                              </td>
                            </tr>
                            <tr></tr>
                            <tr>
                            <td>{{ $monday1120->patientFirstName ?? '' }}</td>
                              <td>{{ $tuesday1120->patientFirstName ?? '' }} </td>
                              <td>{{ $wednesday1120->patientFirstName ?? '' }}</td>
                              <td>{{ $thursday1120->patientFirstName ?? '' }}</td>
                              <td>{{ $friday1120->patientFirstName ?? '' }}</td>
                            </tr>
                            <tr>
                            <td>{{ $monday1120->patientLastName ?? '' }}</td>
                              <td>{{ $tuesday1120->patientLastName ?? '' }}</td>
                              <td>{{ $wednesday1120->patientLastName ?? '' }}</td>
                              <td>{{ $thursday1120->patientLastName ?? '' }}</td>
                              <td>{{ $friday1120->patientLastName ?? '' }}</td>
                            </tr>
                            <tr>
                              <td class="hour" rowspan="4">
                                <span>12:00</span>
                              </td>
                            </tr>
                            <tr></tr>
                            <tr>
                            <td>{{ $monday1200->patientFirstName ?? '' }}</td>
                              <td>{{ $tuesday1200->patientFirstName ?? '' }} </td>
                              <td>{{ $wednesday1200->patientFirstName ?? '' }}</td>
                              <td>{{ $thursday1200->patientFirstName ?? '' }}</td>
                              <td>{{ $friday1200->patientFirstName ?? '' }}</td>
                            </tr>
                            <tr>
                            <td>{{ $monday1200->patientLastName ?? '' }}</td>
                              <td>{{ $tuesday1200->patientLastName ?? '' }}</td>
                              <td>{{ $wednesday1200->patientLastName ?? '' }}</td>
                              <td>{{ $thursday1200->patientLastName ?? '' }}</td>
                              <td>{{ $friday1200->patientLastName ?? '' }}</td>
                            </tr>
                            <tr>
                              <td class="hour" rowspan="4">
                                <span>12:40</span>
                              </td>
                            </tr>
                            <tr></tr>
                            <tr>
                            <td>{{ $monday1240->patientFirstName ?? '' }}</td>
                              <td>{{ $tuesday1240->patientFirstName ?? '' }} </td>
                              <td>{{ $wednesday1240->patientFirstName ?? '' }}</td>
                              <td>{{ $thursday1240->patientFirstName ?? '' }}</td>
                              <td>{{ $friday1240->patientFirstName ?? '' }}</td>
                            </tr>
                            <tr>
                            <td>{{ $monday1240->patientLastName ?? '' }}</td>
                              <td>{{ $tuesday1240->patientLastName ?? '' }}</td>
                              <td>{{ $wednesday1240->patientLastName ?? '' }}</td>
                              <td>{{ $thursday1240->patientLastName ?? '' }}</td>
                              <td>{{ $friday1240->patientLastName ?? '' }}</td>
                            </tr>
                            <tr>
                              <td class="hour" rowspan="4">
                                <span>13:20</span>
                              </td>
                            </tr>
                            <tr></tr>
                            <tr>
                            <td>{{ $monday1320->patientFirstName ?? '' }}</td>
                              <td>{{ $tuesday1320->patientFirstName ?? '' }} </td>
                              <td>{{ $wednesday1320->patientFirstName ?? '' }}</td>
                              <td>{{ $thursday1320->patientFirstName ?? '' }}</td>
                              <td>{{ $friday1320->patientFirstName ?? '' }}</td>
                            </tr>
                            <tr>
                            <td>{{ $monday1320->patientLastName ?? '' }}</td>
                              <td>{{ $tuesday1320->patientLastName ?? '' }}</td>
                              <td>{{ $wednesday1320->patientLastName ?? '' }}</td>
                              <td>{{ $thursday1320->patientLastName ?? '' }}</td>
                              <td>{{ $friday1320->patientLastName ?? '' }}</td>
                            </tr>
                            <tr>
                              <td class="hour" rowspan="4">
                                <span>14:00</span>
                              </td>
                            </tr>
                            <tr></tr>
                            <tr>
                            <td>{{ $monday1400->patientFirstName ?? '' }}</td>
                              <td>{{ $tuesday1400->patientFirstName ?? '' }} </td>
                              <td>{{ $wednesday1400->patientFirstName ?? '' }}</td>
                              <td>{{ $thursday1400->patientFirstName ?? '' }}</td>
                              <td>{{ $friday1400->patientFirstName ?? '' }}</td>
                            </tr>
                            <tr>
                            <td>{{ $monday1400->patientLastName ?? '' }}</td>
                              <td>{{ $tuesday1400->patientLastName ?? '' }}</td>
                              <td>{{ $wednesday1400->patientLastName ?? '' }}</td>
                              <td>{{ $thursday1400->patientLastName ?? '' }}</td>
                              <td>{{ $friday1400->patientLastName ?? '' }}</td>
                            </tr>
                            <tr>
                              <td class="hour" rowspan="4">
                                <span>14:40</span>
                              </td>
                            </tr>
                            <tr></tr>
                            <tr>
                            <td>{{ $monday1440->patientFirstName ?? '' }}</td>
                              <td>{{ $tuesday1440->patientFirstName ?? '' }} </td>
                              <td>{{ $wednesday1440->patientFirstName ?? '' }}</td>
                              <td>{{ $thursday1440->patientFirstName ?? '' }}</td>
                              <td>{{ $friday1440->patientFirstName ?? '' }}</td>
                            </tr>
                            <tr>
                            <td>{{ $monday1440->patientLastName ?? '' }}</td>
                              <td>{{ $tuesday1440->patientLastName ?? '' }}</td>
                              <td>{{ $wednesday1440->patientLastName ?? '' }}</td>
                              <td>{{ $thursday1440->patientLastName ?? '' }}</td>
                              <td>{{ $friday1440->patientLastName ?? '' }}</td>
                            </tr>
                            <tr>
                              <td class="hour" rowspan="4">
                                <span>15:20</span>
                              </td>
                            </tr>
                            <tr></tr>
                            <tr>
                            <td>{{ $monday1520->patientFirstName ?? '' }}</td>
                              <td>{{ $tuesday1520->patientFirstName ?? '' }} </td>
                              <td>{{ $wednesday1520->patientFirstName ?? '' }}</td>
                              <td>{{ $thursday1520->patientFirstName ?? '' }}</td>
                              <td>{{ $friday1520->patientFirstName ?? '' }}</td>
                            </tr>
                            <tr>
                            <td>{{ $monday1520->patientLastName ?? '' }}</td>
                              <td>{{ $tuesday1520->patientLastName ?? '' }}</td>
                              <td>{{ $wednesday1520->patientLastName ?? '' }}</td>
                              <td>{{ $thursday1520->patientLastName ?? '' }}</td>
                              <td>{{ $friday1520->patientLastName ?? '' }}</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-lg-3">
                        <div class="row">
                          <label>Wybierz lekarza:</label>
                          <br />
                          <div class="select">
                            <select name="slct" id="slct" onchange="window.location.pathname = '/showWizytas/' + document.getElementById('slct').value">
                              <option selected disabled>Wybierz lekarza</option>
							  @foreach ($data as $item)
                              <option value="{{$item ->id}}">{{$item->firstNAME}} {{$item->lastNAME}}</option>
							  @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="row mt-5">
                          <span class="text-lg-center">Dane o lekarzu: </span>
                          <br />
                          Imie i Nazwisko: {{ $lekarz->firstName }} {{ $lekarz->lastName }} <br />
                          Specjalizacja: {{ $lekarz->Specialization }}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
