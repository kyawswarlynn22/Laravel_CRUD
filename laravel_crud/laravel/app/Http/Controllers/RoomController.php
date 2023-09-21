<?php

namespace App\Http\Controllers;

use App\Models\room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roomClass = new room();
        $roomData = $roomClass->roomData();
        return view('room.roomList', [
            "roomData" => $roomData,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('room.addroom');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'room_no' => 'required',
            'person' => 'required',
            'price' => 'required',
        ]);
        $roomAddClass = new room();
        $roomAddClass->addRoom($request);
        return redirect('/room');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $roomDetailClass = new room();
        $roomDetail = $roomDetailClass->roomDetail($id);
        if ($roomDetail == null) {
            return view('errors.404');
        } else {
            return view('room.roomDetails', [
                "roomDetail" => $roomDetail
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $roomDetailClass = new room();
        $roomDetail = $roomDetailClass->roomDetail($id);
        if ($roomDetail == null) {
            return view('errors.404');
        } else {
            return view('room.editRoom', [
                "roomDetail" => $roomDetail
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'room_no' => 'required',
            'person' => 'required',
            'price' => 'required',
        ]);
        $roomupdateClass = new room();
        $roomupdateClass->roomUpdate($request, $id);
        return redirect('/room');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $roomDelClass = new room();
        $roomDetail = $roomDelClass->roomDetail($id);
        if ($roomDetail !== null) {
            $roomDelClass->roomDel($id);
        }
        return redirect('/room');
    }
}
