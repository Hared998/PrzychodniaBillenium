<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Lekarz;
use App\Models\Wizyta;
use Carbon\Carbon;

class PanelRecepcji extends Controller
{

    function showDoctor()
    {
        $data = DB::table('lekarzs')->select('id', 'firstNAME', 'lastNAME', 'Specialization')->get();

        return view('recepcja',compact('data'));
    }

    function showWizytas($id)
    {
        $lekarz = Lekarz::find($id);

        $data = DB::table('lekarzs')->select('id', 'firstNAME', 'lastNAME', 'Specialization')->get();


        $start = Carbon::createFromDate(date('Y'), date('m'), date('d'))->startOfWeek(Carbon::MONDAY);
		$end = Carbon::createFromDate(date('Y'), date('m'), date('d'))->startOfWeek(Carbon::MONDAY);
		$start->hour = 7;
		$start->minute = 50;
		$end->hour = 8;
		$end->minute = 10;
		$monday800 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();
		
		$start->hour = 8;
		$start->minute = 30;
		$end->hour = 8;
		$end->minute = 50;
		$monday840 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 9;
		$start->minute = 10;
		$end->hour = 9;
		$end->minute = 30;
		$monday920 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 9;
		$start->minute = 40;
		$end->hour = 10;
		$end->minute = 20;
		$monday1000 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 10;
		$start->minute = 30;
		$end->hour = 10;
		$end->minute = 50;
		$monday1040 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 11;
		$start->minute = 10;
		$end->hour = 11;
		$end->minute = 30;
		$monday1120 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 11;
		$start->minute = 50;
		$end->hour = 12;
		$end->minute = 10;
		$monday1200 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 12;
		$start->minute = 30;
		$end->hour = 12;
		$end->minute = 50;
		$monday1240 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 13;
		$start->minute = 10;
		$end->hour = 13;
		$end->minute = 30;
		$monday1320 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 13;
		$start->minute = 50;
		$end->hour = 14;
		$end->minute = 10;
		$monday1400 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 14;
		$start->minute = 30;
		$end->hour = 14;
		$end->minute = 50;
		$monday1440 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 15;
		$start->minute = 10;
		$end->hour = 15;
		$end->minute = 30;
		$monday1520 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();



		$start = Carbon::createFromDate(date('Y'), date('m'), date('d'))->startOfWeek(Carbon::TUESDAY);
		$end = Carbon::createFromDate(date('Y'), date('m'), date('d'))->startOfWeek(Carbon::TUESDAY);
		$start->hour = 7;
		$start->minute = 50;
		$end->hour = 8;
		$end->minute = 10;
		$tuesday800 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 8;
		$start->minute = 30;
		$end->hour = 8;
		$end->minute = 50;
		$tuesday840 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 9;
		$start->minute = 10;
		$end->hour = 9;
		$end->minute = 30;
		$tuesday920 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 9;
		$start->minute = 40;
		$end->hour = 10;
		$end->minute = 20;
		$tuesday1000 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();


		$start->hour = 10;
		$start->minute = 30;
		$end->hour = 10;
		$end->minute = 50;
		$tuesday1040 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 11;
		$start->minute = 10;
		$end->hour = 11;
		$end->minute = 30;
		$tuesday1120 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 11;
		$start->minute = 50;
		$end->hour = 12;
		$end->minute = 10;
		$tuesday1200 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 12;
		$start->minute = 30;
		$end->hour = 12;
		$end->minute = 50;
		$tuesday1240 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 13;
		$start->minute = 10;
		$end->hour = 13;
		$end->minute = 30;
		$tuesday1320 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 13;
		$start->minute = 50;
		$end->hour = 14;
		$end->minute = 10;
		$tuesday1400 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 14;
		$start->minute = 30;
		$end->hour = 14;
		$end->minute = 50;
		$tuesday1440 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 15;
		$start->minute = 10;
		$end->hour = 15;
		$end->minute = 30;
		$tuesday1520 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();




		$start = Carbon::createFromDate(date('Y'), date('m'), date('d'))->startOfWeek(Carbon::WEDNESDAY);
		$end = Carbon::createFromDate(date('Y'), date('m'), date('d'))->startOfWeek(Carbon::WEDNESDAY);
		$start->hour = 7;
		$start->minute = 50;
		$end->hour = 8;
		$end->minute = 10;
		$wednesday800 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 8;
		$start->minute = 30;
		$end->hour = 8;
		$end->minute = 50;
		$wednesday840 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 9;
		$start->minute = 10;
		$end->hour = 9;
		$end->minute = 30;
		$wednesday920 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 9;
		$start->minute = 40;
		$end->hour = 10;
		$end->minute = 20;
		$wednesday1000 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 10;
		$start->minute = 30;
		$end->hour = 10;
		$end->minute = 50;
		$wednesday1040 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 11;
		$start->minute = 10;
		$end->hour = 11;
		$end->minute = 30;
		$wednesday1120 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 11;
		$start->minute = 50;
		$end->hour = 12;
		$end->minute = 10;
		$wednesday1200 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 12;
		$start->minute = 30;
		$end->hour = 12;
		$end->minute = 50;
		$wednesday1240 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 13;
		$start->minute = 10;
		$end->hour = 13;
		$end->minute = 30;
		$wednesday1320 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 13;
		$start->minute = 50;
		$end->hour = 14;
		$end->minute = 10;
		$wednesday1400 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 14;
		$start->minute = 30;
		$end->hour = 14;
		$end->minute = 50;
		$wednesday1440 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 15;
		$start->minute = 10;
		$end->hour = 15;
		$end->minute = 30;
		$wednesday1520 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();



		$start = Carbon::createFromDate(date('Y'), date('m'), date('d'))->startOfWeek(Carbon::THURSDAY);
		$end = Carbon::createFromDate(date('Y'), date('m'), date('d'))->startOfWeek(Carbon::THURSDAY);
		$start->hour = 7;
		$start->minute = 50;
		$end->hour = 8;
		$end->minute = 10;
		$thursday800 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 8;
		$start->minute = 30;
		$end->hour = 8;
		$end->minute = 50;
		$thursday840 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 9;
		$start->minute = 10;
		$end->hour = 9;
		$end->minute = 30;
		$thursday920 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 9;
		$start->minute = 40;
		$end->hour = 10;
		$end->minute = 20;
		$thursday1000 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();


		$start->hour = 10;
		$start->minute = 30;
		$end->hour = 10;
		$end->minute = 50;
		$thursday1040 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 11;
		$start->minute = 10;
		$end->hour = 11;
		$end->minute = 30;
		$thursday1120 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 11;
		$start->minute = 50;
		$end->hour = 12;
		$end->minute = 10;
		$thursday1200 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 12;
		$start->minute = 30;
		$end->hour = 12;
		$end->minute = 50;
		$thursday1240 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 13;
		$start->minute = 10;
		$end->hour = 13;
		$end->minute = 30;
		$thursday1320 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 13;
		$start->minute = 50;
		$end->hour = 14;
		$end->minute = 10;
		$thursday1400 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 14;
		$start->minute = 30;
		$end->hour = 14;
		$end->minute = 50;
		$thursday1440 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 15;
		$start->minute = 10;
		$end->hour = 15;
		$end->minute = 30;
		$thursday1520 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();




		$start = Carbon::createFromDate(date('Y'), date('m'), date('d'))->startOfWeek(Carbon::FRIDAY);
		$end = Carbon::createFromDate(date('Y'), date('m'), date('d'))->startOfWeek(Carbon::FRIDAY);
		$start->hour = 7;
		$start->minute = 50;
		$end->hour = 8;
		$end->minute = 10;
		$friday800 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 8;
		$start->minute = 30;
		$end->hour = 8;
		$end->minute = 50;
		$friday840 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 9;
		$start->minute = 10;
		$end->hour = 9;
		$end->minute = 30;
		$friday920 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 9;
		$start->minute = 40;
		$end->hour = 10;
		$end->minute = 20;
		$friday1000 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();


		$start->hour = 10;
		$start->minute = 30;
		$end->hour = 10;
		$end->minute = 50;
		$friday1040 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 11;
		$start->minute = 10;
		$end->hour = 11;
		$end->minute = 30;
		$friday1120 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 11;
		$start->minute = 50;
		$end->hour = 12;
		$end->minute = 10;
		$friday1200 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 12;
		$start->minute = 30;
		$end->hour = 12;
		$end->minute = 50;
		$friday1240 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 13;
		$start->minute = 10;
		$end->hour = 13;
		$end->minute = 30;
		$friday1320 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 13;
		$start->minute = 50;
		$end->hour = 14;
		$end->minute = 10;
		$friday1400 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 14;
		$start->minute = 30;
		$end->hour = 14;
		$end->minute = 50;
		$friday1440 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();

		$start->hour = 15;
		$start->minute = 10;
		$end->hour = 15;
		$end->minute = 30;
		$friday1520 = Wizyta::whereBetween('Date', array($start, $end))->where('id_lekarz', $lekarz->id)->first();



        return view('wizytas',compact('data', 'lekarz', 'monday800', 'monday840', 'monday920', 'monday1000' ,'monday1040', 'monday1120', 'monday1200', 'monday1240', 'monday1320', 'monday1400', 'monday1440', 'monday1520', 'tuesday800', 'tuesday840', 'tuesday920', 'tuesday1000' ,'tuesday1040', 'tuesday1120', 'tuesday1200', 'tuesday1240', 'tuesday1320', 'tuesday1400', 'tuesday1440', 'tuesday1520', 'wednesday800', 'wednesday840', 'wednesday920', 'wednesday1000' ,'wednesday1040', 'wednesday1120', 'wednesday1200', 'wednesday1240', 'wednesday1320', 'wednesday1400', 'wednesday1440', 'wednesday1520', 'thursday800', 'thursday840', 'thursday920', 'thursday1000' ,'thursday1040', 'thursday1120', 'thursday1200', 'thursday1240', 'thursday1320', 'thursday1400', 'thursday1440', 'thursday1520', 'friday800', 'friday840', 'friday920', 'friday1000' ,'friday1040', 'friday1120', 'friday1200', 'friday1240', 'friday1320', 'friday1400', 'friday1440', 'friday1520'));
    }

}

#$visit = Wizyta::whereBetween('Date', [Carbon::now->startOfWeek(), Carbon::now()->endOfWeek(Carbon::MONDAY)])->where('id_lekarz', $lekarz->id)->get();
