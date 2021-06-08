<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wizyta;
use App\Models\Lekarz;
use Auth;
use DB;
use App\Models\Recepta;

class dashboard extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $datavisit = Wizyta::where('patientPESEL', $user->id)->where('Date', '>=', now())->orderBy('Date')->first();
        $doctor = null;
        if($datavisit != null)
            $doctor = Lekarz::all()->where('id', $datavisit->id_lekarz)->first();
        $datarecipe = DB::select("SELECT * FROM receptas 
        INNER JOIN wizytas ON receptas.id_wizyta = wizytas.id 
        INNER JOIN lekarzs ON wizytas.id_lekarz = lekarzs.id WHERE patient_pesel = '$user->id' LIMIT 3");
        return view('dashboard', ['datarecipe' => $datarecipe, 'doctor' => $doctor, 'datavisit' => $datavisit]);
        
        
    }
}
