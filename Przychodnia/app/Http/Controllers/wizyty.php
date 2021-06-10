<?php

namespace App\Http\Controllers;

use App\Models\Wizyta;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use App\Models\Lekarz;
use DB;
class wizyty extends Controller
{
    public function lista()
    {
        $user = Auth::user();
        $data = DB::table('lekarzs')
        ->join('wizytas', 'lekarzs.id', '=', 'wizytas.id_lekarz')->where('isBooked', '=', 1)->where('patientPESEL', '=', $user->id)->get();
        
        return view('listawizyt', ['data' => $data]);
    }
    public function cancel($id)
    {
        DB::table('wizytas')
            ->where('id', $id)
            ->update([
                'useMedicines' => "",
               'symptoms' => "",
               'patientFirstName' => "",
               'patientLastName' => "",
               'patientPESEL' => "",
                'isBooked' => "0"
            ]); 

        return redirect('/recepcja/wizyty');
    } 
    public function unaccept($id)
    {
        DB::table('wizytas')
        ->where('id', $id)
        ->update([
            'canceled' => "1"
        ]); 

    return redirect('/recepcja/wizyty');
    }
    public function uncancel($id)
    {
        DB::table('wizytas')
        ->where('id', $id)
        ->update([
            'canceled' => "0"
        ]); 

    return redirect('/recepcja/wizyty');
    }
    public function apply($id)
    {
        DB::table('wizytas')
        ->where('id', $id)
        ->update([
            'isApproved' => "1"
        ]); 

    return redirect('/recepcja/wizyty');
    }
    public function recepcja()
    {
        $user = Auth::user();
        $data = DB::table('lekarzs')
        ->join('wizytas', 'lekarzs.id', '=', 'wizytas.id_lekarz')->where('isBooked', '=', 1)->get();
        $now = DB::select('SELECT NOW() AS mp');
        $today = Carbon::now();
        return view('listawizytrecepcja', ['data' => $data, 'now' => $today]);
    }
    public function doctors()
    {
        $data = Lekarz::all();
        return view('tworzenieWizyt',['data' => $data]);
    }
    public function Generowaniewizyt (Request $request)
    {

        $enddate = $request->data_do;
        $maxtime = date("H:i",strtotime('-40 minutes',strtotime($request->pracuje_do)));

        $newtime = $request->pracuje_od;
        $newdate = $request->data_od;
    
        while($newdate <= $enddate) 
        {
            if(date('D', strtotime($newdate)) != 'Sat' && date('D', strtotime($newdate)) != 'Sun')
            while($newtime <= $maxtime)
            {
                DB::table('wizytas')->insert([
                    'symptoms' => "",
                    'useMedicines' => "",
                    'id_lekarz' => $request->lekarz,
                    'Date' => date('Y-m-d H:i:s', strtotime("$newdate $newtime"))
                    
            ]);
                $newtime = date("H:i",strtotime('+40 minutes', strtotime($newtime)));
                
            }
            $newdate = date("Y-m-d",strtotime('+1 day', strtotime($newdate)));
            $newtime = $request->pracuje_od;
        }
        return redirect('/home');
    }
}
