<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Lekarz;
use App\Models\Wizyta;
use Carbon\Carbon;

class PanelRecepcji extends Controller
{

    function showDoctor()
    {
        $data = DB::table('lekarzs')->select('id', 'firstNAME', 'lastNAME', 'Specialization')->get();

        return view('recepcja',compact('data'));
    }

    function showWizytas($id)
    {
        $lekarz = Lekarz::find($id);

        $visit = Wizyta::whereBetween('Date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->where('id_lekarz', $lekarz->id)->get();
        $data = DB::table('lekarzs')->select('id', 'firstNAME', 'lastNAME', 'Specialization')->get();

        return view('wizytas',compact('visit', 'data'));
    }

}
