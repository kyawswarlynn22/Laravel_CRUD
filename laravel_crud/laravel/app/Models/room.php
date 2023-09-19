<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class room extends Model
{
    use HasFactory;

    public function roomData()
    {
        return DB::table('rooms')->orderBy('id', 'desc')->where('del_flg',0)->paginate(5);
    }

    public function addRoom($resquest)
    {
        DB::table('rooms')
            ->insert([
                "room_no" => $resquest->room_no,
                "status" => $resquest->status,
                "person" => $resquest->person,
                'price' => $resquest->price,
            ]);
    }

    public function roomDetail($id)
    {
        return DB::table('rooms')->where('id', '=', $id)->first();
    }

    public function roomUpdate($resquest, $id)
    {
        DB::table('rooms')
            ->where('id', $id)
            ->update([
                "room_no" => $resquest->room_no,
                "status" => $resquest->status,
                "person" => $resquest->person,
                'price' => $resquest->price,
            ]);
    }

    public function roomDel($id)
    {
        DB::table('rooms')
            ->where('id', $id)
            ->update([
                "del_flg" => 1,
            ]);
    }
}
