<?php

namespace App\Http\Controllers\api\recycle;

use App\Http\traits\ApiTraits;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RecycQuantity;
use Illuminate\Support\Facades\Auth;

class showresult extends Controller
{
    use ApiTraits ;
    public function showresult(Request $request) {
        $token = $request->header("Authorization") ;

        $authuser = Auth::guard('sanctum')->user();

        $user = User::where('id' , $authuser->id )->first(); 

        $showreuslt = RecycQuantity::where('user_id' , $user->id)->get();
        $points = RecycQuantity::where('user_id' , $user->id)->sum('points');
     

        if($showreuslt->isEmpty()){
            return $this->MessageSuccess('not operation yet'); 
        }

        return $this->data(compact('showreuslt' , 'points')) ;
        
    }
}
