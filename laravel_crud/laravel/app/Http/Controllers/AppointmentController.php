<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apmListClass = new appointment();
        $apmList = $apmListClass->apmList();
        return view('Apointment.appointList', [
            'apmList' => $apmList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Apointment.addApointment');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $apmAddClass = new appointment();
        $apmAddClass->apmAdd($request);
        return redirect('/appointment');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $apmDetailClass  = new appointment();
        $apmDetail = $apmDetailClass->apmDetail($id);
        if ($apmDetail == null) {
            return view('errors.404');
        }
        return view('Apointment.appointmentDetails', [
            'apmDetail' => $apmDetail
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $apmDetailClass  = new appointment();
        $apmDetail = $apmDetailClass->apmDetail($id);
        if ($apmDetail == null) {
            return view('errors.404');
        }
        return view('Apointment.editAppointment', [
            'apmDetail' => $apmDetail
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $apmUpdateClass = new appointment();
        $apmUpdateClass->apmUpdate($request, $id);
        return redirect('/appointment');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $apmDetailClass  = new appointment();
        $apmDetail = $apmDetailClass->apmDetail($id);
        if ($apmDetail !== null) {
            $apmDetailClass->apmDel($id);
        }
        return redirect('/appointment');
    }
}
