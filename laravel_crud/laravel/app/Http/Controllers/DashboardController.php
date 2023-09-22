<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use App\Models\drug;
use App\Models\message;
use App\Models\room;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $roomClass = new room();
        $roomData = $roomClass->roomData();
        $messageClass = new message();
        $messageData = $messageClass->messageData();
        $drugListClass = new drug();
        $drugList = $drugListClass->drugList();
        $apmListClass = new appointment();
        $apmList = $apmListClass->apmList();
        return view('dashboard', [
            'apmList' => $apmList,
            "roomData" => $roomData,
            'messageData' => $messageData,
            "drugList" => $drugList,
        ]);
    }
}
