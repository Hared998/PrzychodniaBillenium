<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class ListPactients extends Controller
{
    function showUser()
    {
        $data = DB::table('users')->get();
        return view('allUsers', ['data' =>$data]);

    }



}
