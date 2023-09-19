<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class message extends Model
{
    use HasFactory;

    public function messageData()
    {
        return DB::table('messages')->orderBy('id', 'desc')->where('del_flg', 0)->paginate(5);
    }

    public function messageDetail($id)
    {
        return  DB::table('messages')->where('id', $id)->first();
    }

    public function addMessage($request)
    {

        return DB::table('messages')
            ->insert([
                "text" => $request->text,
                "message_person" => $request->message_person,
            ]);
    }

    public function updateMessage($request,$id){
        return DB::table('messages')
        ->where('id',$id)
        ->update([
            "text" => $request->text,
            "message_person" => $request->message_person,
        ]);
    }

    public function messageDel($id){
        DB::table('messages')
        ->where('id',$id)
        ->update([
            "del_flg" => 1
        ]);
    }
}
