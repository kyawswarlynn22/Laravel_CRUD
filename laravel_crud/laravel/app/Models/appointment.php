<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class appointment extends Model
{
    use HasFactory;

    public function apmList()
    {
        return DB::table('appointments')
            ->orderBy('id', 'desc')
            ->where('del_flg', 0)->paginate(5);
    }

    public function apmDetail($id)
    {
        return DB::table('appointments')
            ->where('id', $id)->first();
    }

    public function apmUpdate($request, $id)
    {
        return DB::table('appointments')
            ->where('id', $id)
            ->update([
                'dr_name' => $request->doctor,
                'specialist' => $request->specialist,
                'room_no' => $request->room,
                'date_time' => $request->date,
            ]);
    }

    public function apmDel($id)
    {
        DB::table('appointments')
            ->where('id', $id)
            ->update([
                'del_flg' => 1
            ]);
    }

    public function apmAdd($request)
    {
        DB::table('appointments')
            ->insert([
                'dr_name' => $request->doctor,
                'specialist' => $request->specialist,
                'room_no' => $request->room,
                'date_time' => $request->date,
            ]);
    }
}
