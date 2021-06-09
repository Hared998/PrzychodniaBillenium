<?php

namespace App\Http\Controllers;

use App\Models\Lekarz;
use App\Models\Wizyta;
use Illuminate\Http\Request;
use DB;
class WyborlekarzaController extends Controller
{
    public function index()
    {
        $lekarze = Lekarz::all();

        return view('layouts.wyborlekarza', ['lekarze' => $lekarze]);
    }
    public function kalendarz($id)
    {
        $lekarz = Lekarz::find($id);
        $wizyty = Wizyta::where('id_lekarz', $lekarz->id)->where('isBooked',0)->get();
        $data = now();
        return view('layouts.kalendarzlekarza', ['lekarz' => $lekarz,'wizyty' => $wizyty,'data' => $data]);
        
    }
    public function rezerwacja(Request $request)
    {
        $validation = $request->validate(
            [
                'godziny' => ['required']
            ]);
        if($request->get('objawy') == "")
            $objawy = "Brak danych";
        else
            $objawy = $request->get('objawy');
        if($request->get('leki') == "")
            $leki = "Brak danych";
        else
            $leki = $request->get('leki');   
        DB::table('wizytas')
            ->where('id', $request->get('godziny'))
            ->update([
                'useMedicines' => $leki,
               'symptoms' => $objawy,
               'patientFirstName' => $request->get('id_imie'),
               'patientLastName' => $request->get('id_nazwisko'),
               'patientPESEL' => $request->get('id_pesel'),
               'isBooked' => "1"
            ]);
        return redirect('/home');
    }
}
