<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wizyta;
use App\Models\Lekarz;
use Auth;
use DB;
use App\Models\Recepta;

class ReceptaController extends Controller
{
    public function show($id){
        $recepta=Recepta::find($id);    
        $lekarz=Lekarz::find($recepta->id_lekarz);
        $wizyta=Wizyta::find($recepta->id_wizyta);
        if($recepta!=null){
            return view('recepta',['recepta'=>$recepta,'lekarz'=>$lekarz,'wizyta'=>$wizyta]);
        }
        return redirect('/home');
    }
}
