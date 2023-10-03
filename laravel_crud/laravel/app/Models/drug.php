<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Drug extends Model  implements Auditable
{
    use HasFactory;

    use \OwenIt\Auditing\Auditable;

    protected $table = 'drugs'; // Specify the table name

    protected $fillable = ['drug_name', 'type', 'stock', 'price', 'del_flg'];

    public function drugList()
    {
        return Drug::orderBy('id', 'desc')
            ->where('del_flg', 0)
            ->paginate(5);
    }

    public function drugDetail($id)
    {
        return Drug::where('id', $id)->first();
    }

    public function drugUpdate($request, $id)
    {
        $drug = Drug::find($id);
        if ($drug) {
            $drug->update([
                'drug_name' => $request->drug_name,
                'type' => $request->weight,
                'stock' => $request->stock,
                'price' => $request->price,
            ]);
        }
    }

    public function drugDel($id)
    {
        $drug = Drug::find($id);
        if ($drug) {
            $drug->update([
                'del_flg' => 1
            ]);
        }
    }

    public function drugAdd($request)
    {
        Drug::create([
            'drug_name' => $request->drug_name,
            'type' => $request->weight,
            'stock' => $request->stock,
            'price' => $request->price,
        ]);
    }
}
