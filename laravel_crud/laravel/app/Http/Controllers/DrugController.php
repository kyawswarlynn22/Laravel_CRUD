<?php

namespace App\Http\Controllers;

use App\Models\drug;
use App\Models\room;
use Illuminate\Http\Request;

class DrugController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drugListClass = new drug();
        $drugList = $drugListClass->drugList();
        return view('Drug.drugList',[
            "drugList" => $drugList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Drug.addDrug');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $drugAddClass = new drug();
        $drugAddClass->drugAdd($request);
        return redirect('/drug');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $drugDetailClass = new drug();
        $drugDetail = $drugDetailClass->drugDetail($id);
        if ($drugDetail == null) {
            return view('errors.404');
        }
        return view('Drug.drugDetails',[
            "drugDetail" => $drugDetail
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $drugDetailClass = new drug();
        $drugDetail = $drugDetailClass->drugDetail($id);
        if ($drugDetail == null) {
            return view('errors.404');
        }
        return view('Drug.editDrug',[
            "drugDetail" => $drugDetail
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $drugUpdateClass =new drug();
        $drugUpdateClass -> drugUpdate($request, $id);
        return redirect('/drug');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $drugDetailClass = new drug();
        $drugDetail = $drugDetailClass->drugDetail($id);
        if($drugDetail !== null) {
            $drugDel = $drugDetailClass->drugDel($id);
        }
        return redirect("/drug");
       
    }
}
