@extends('layouts.app')


@section('content')
	<div class="content-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-11 mx-auto pt-4">
                <div class="card">
                  <div class="card-body">
                    <div class="col-lg-1 mr-1">
                      <button
                        class="btn-primary btn-lg"
                        style="background: rgb(252, 146, 25) !important
                        border-style: none;
                        border-color: #ec1f1f !important;
                        "
                        onclick="window.location.pathname = '/showDoctor'"
                      >
                        Wróć
                      </button>
                    </div>
                    <h4 class="card-title text-center">Lista pacjentów</h4>
                    <div class="col-lg-10 mx-auto pt-4">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">
                              <div class="text-center">Pacjent</div>
                            </th>
                            <th scope="col">-</th>
                          </tr>
                        </thead>
                        <tbody>
						@foreach ( $data as $item )
                          <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>
                              <div class="row">
                                <div class="col-sm-4 text-right">
                                  Imie i Nazwisko:
                                </div>
                                <div class="col-sm-4 text-secondary">
                                  {{$item->imie}} {{$item->nazwisko}}
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-4 text-right">Email:</div>
                                <div class="col-sm-4 text-secondary">
                                  {{$item->email}}
                                </div>
                              </div>
                            </td>
                            <td><button class="btn btn-info">Info</button></td>
                          </tr>
						  @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
