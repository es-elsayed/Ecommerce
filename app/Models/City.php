<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    public function region(){
        return $this->belongsTo(Region::class);
    }
    static function haveDist($id){
        return City::where(['city_id'=>$id])->get();
    }
    public function address()
    {
        return $this->belongsTo(Address::class, 'city_id');
    }
}
