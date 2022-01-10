<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtpPhone extends Model
{
    use HasFactory;

    protected $table = 'otp_phone';
    protected $fillable = [
        'user_id',
        'otp'
    ];
}
