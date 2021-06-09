<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


class PanelRecepcji extends Controller
{

    function showDoctor()
    {
        $data = DB::table('lekarzs')->select('id', 'firstNAME')->get();

        return view('recepcja',compact('data'));

    }


}
