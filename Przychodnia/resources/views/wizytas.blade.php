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
                        border-color: #ec1f1f !important;
                      "
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
                        border-color: #ec1f1f !important;
                      "
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
                        <table>
                          <thead>
                            <tr>
                              <th></th>
                              <th>
                                <span class="day">1</span>
                                <span class="long">Poniedziałek</span>
                                <span class="short">Mon</span>
                              </th>
                              <th>
                                <span class="day">2</span>
                                <span class="long">Wtorek</span>
                                <span class="short">Tue</span>
                              </th>
                              <th>
                                <span class="day">3</span>
                                <span class="long">Środa</span>
                                <span class="short">We</span>
                              </th>
                              <th>
                                <span class="day">4</span>
                                <span class="long">Czwartek</span>
                                <span class="short">Thur</span>
                              </th>
                              <th>
                                <span class="day">5</span>
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
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr></tr>
                            <tr></tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td class="hour" rowspan="4">
                                <span>8:40</span>
                              </td>
                            </tr>
                            <tr></tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td class="hour" rowspan="4">
                                <span>9:20</span>
                              </td>
                            </tr>
                            <tr></tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td class="hour" rowspan="4">
                                <span>10:00</span>
                              </td>
                            </tr>
                            <tr></tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td class="hour" rowspan="4">
                                <span>10:40</span>
                              </td>
                            </tr>
                            <tr></tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td class="hour" rowspan="4">
                                <span>11:20</span>
                              </td>
                            </tr>
                            <tr></tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td class="hour" rowspan="4">
                                <span>12:00</span>
                              </td>
                            </tr>
                            <tr></tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td class="hour" rowspan="4">
                                <span>12:40</span>
                              </td>
                            </tr>
                            <tr></tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td class="hour" rowspan="4">
                                <span>13:20</span>
                              </td>
                            </tr>
                            <tr></tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td class="hour" rowspan="4">
                                <span>14:00</span>
                              </td>
                            </tr>
                            <tr></tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td class="hour" rowspan="4">
                                <span>14:40</span>
                              </td>
                            </tr>
                            <tr></tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td class="hour" rowspan="4">
                                <span>15:20</span>
                              </td>
                            </tr>
                            <tr></tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
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
                          Imie i Nazwisko: {{ $monday920}} <br />
                          Specjalizacja: Jakaśtam
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
