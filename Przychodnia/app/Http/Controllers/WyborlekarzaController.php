<?php

namespace App\Http\Controllers;

use App\Models\Lekarz;

class WyborlekarzaController extends Controller
{
    public function index()
    {
        $lekarze = Lekarz::all();

        return view('layouts.wyborlekarza', ['lekarze' => $lekarze]);
    }
}
