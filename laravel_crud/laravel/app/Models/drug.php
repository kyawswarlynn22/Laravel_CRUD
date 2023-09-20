<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class drug extends Model
{
    use HasFactory;

    public function drugList()
    {
        return DB::table('drugs')->orderBy('id', 'desc')->where('del_flg', 0)->paginate(5);
    }

    public function drugDetail($id)
    {
        return DB::table('drugs')->where('id', $id)->first();
    }

    public function drugUpdate($request, $id)
    {
        DB::table('drugs')
            ->where('id', $id)
            ->update([
                'drug_name' => $request->drug_name,
                'type' => $request->weight,
                'stock' => $request->stock,
                'price' => $request->price,
            ]);
    }

    public function drugDel($id)
    {
        DB::table('drugs')
            ->where('id', $id)
            ->update([
                'del_flg' => 1
            ]);
    }

    public function drugAdd( $request)
    {
        DB::table('drugs')
            ->insert([
                'drug_name' => $request->drug_name,
                'type' => $request->weight,
                'stock' => $request->stock,
                'price' => $request->price,
            ]);
    }
}
