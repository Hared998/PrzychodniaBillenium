@extends('layouts.app')


@section('content')
    <div class="card mt-3">
        @foreach ( $data as $item )
        <li><span> {{$item->imie}}</span>
        <span> {{$item->nazwisko}}</span>
        <span> {{$item->email}}</span>

        </li>
        @endforeach

    </div>
@endsection
