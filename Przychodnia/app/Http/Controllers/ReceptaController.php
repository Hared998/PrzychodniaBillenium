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
        $date = date('d-m-Y H:i', strtotime($wizyta->Date));
        if($recepta!=null){
            return view('recepta',['recepta'=>$recepta,'lekarz'=>$lekarz,'wizyta'=>$wizyta,'date'=>$date]);
        }
        return redirect('/home');
    }
    public function wizytasforecepta($id)
    {
        
        $data=Wizyta::find($id);
        
        return view('tworzenieRecepty', ['data' => $data]);

    }
    public function addrecepta(Request $request)
    {
        DB::table('receptas')->insert([
            'Medicines' => $request->przepisane_leki,
            'recommendations' => $request->zalecenia,
            'id_lekarz' => $request->lekarz,
            'patient_pesel' => $request->pesel,
            'id_wizyta' => $request->wizyta
        ]); 
        return redirect('/home');
    }
}
