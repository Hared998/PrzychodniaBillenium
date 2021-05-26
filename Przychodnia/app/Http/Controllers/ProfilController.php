<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function show()
    {
        return view('user', [
            'user' => Auth::user()
        ]);
    }
}
