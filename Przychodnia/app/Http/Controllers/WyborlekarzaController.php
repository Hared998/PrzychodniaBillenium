<?php

namespace App\Http\Controllers;

use App\Models\Lekarz;
use GuzzleHttp\Psr7\Request;

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

        return view('layouts.kalendarzlekarza', ['lekarz' => $lekarz]);
    }
}
