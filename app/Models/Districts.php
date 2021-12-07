<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Districts extends Model
{
    use HasFactory;
    public function region(){
        return $this->belongsTo(Region::class);
    }
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
