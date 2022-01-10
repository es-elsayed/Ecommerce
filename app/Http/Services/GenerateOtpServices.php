<?php
namespace App\Http\Services;

use App\Models\OtpPhone;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GenerateOtpServices
{
    public function setOtp($data){
        $code = mt_rand(100000,999999);
        $data['otp'] = $code;
        OtpPhone::whereNotNull('user_id')
                ->where(['user_id'=>$data['user_id']])
                ->delete();
        return OtpPhone::create($data);
    }

    public function getOtpMessage($data){
        return $message = "Your Verification Code is $data";
    }

    public function checkOtp($code){
        if(Auth::guard()->check()){
            $verifyData = OtpPhone::where('user_id',Auth::id())->first();

            if($verifyData->otp == $code){
                User::whereId(Auth::id())->update(['email_verified_at'=>now()]);
            }
        }
        return $message = "Your Verification Code is $code";
    }
}
