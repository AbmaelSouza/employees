<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HorarioDeTrabalhoController extends Controller
{
    public function index(Request $request) {
        $horarios = $this->gerarHorariosUteis();
        $currentDateTime = Carbon::now();
        $currentHour = $currentDateTime->hour;
        $test = false;
        if ($request->input('testTime')) {
            $test = true;
            $testTime = Carbon::createFromFormat('H:i', $request->input('testTime'));
            $currentDateTime->setTime($testTime->hour, $testTime->minute);
            $currentHour = $currentDateTime->hour;
        }
        $isWorkingHour = ($currentHour >= 9 && $currentHour < 12) || ($currentHour >= 13 && $currentHour < 18);


        if ($isWorkingHour) {
            $working = $test ? "Test hour is a working hour." : "It's a working hour.";
        } else {
            $working = $test ? "Test hour is NOT a working hour." : "It's NOT a working hour.";
        }

        return view('horarios.index', compact('horarios','working','currentDateTime'));
    }

    private function gerarHorariosUteis() {
        $horariosUteis = [];
        $currentDate = Carbon::now();

        for ($i = 0; $i < 30; $i++) {
            for ($hour = 9; $hour <= 18; $hour++) {
                if ($hour != 12) {
                    $horariosUteis[] = $currentDate->format('Y-m-d').';'. $hour . ':00:00';
                }
            }
            $currentDate->addDay();
        }

        return $horariosUteis;
    }
}
