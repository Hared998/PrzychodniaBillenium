<?php

namespace App\Http\Controllers;

use App\Models\Lekarz;
use GuzzleHttp\Psr7\Request;
use App\Models\Wizyta;
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
}
