<?php

namespace App\Http\Controllers;

use App\Models\Wizyta;
use Illuminate\Http\Request;
use Auth;
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

        return redirect('/wizyty');
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
        return view('listawizytrecepcja', ['data' => $data]);
    }
}
