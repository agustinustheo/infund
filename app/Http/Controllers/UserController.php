<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use Auth;

class UserController extends Controller
{
    public function updateData(Request $request){
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->bank_name = $request->bank_name;
        $user->bank_account_number = $request->bank_account_number;
        $user->dob = $request->dob;
        $user->home_address = $request->home_address;
        $user->business_address = $request->business_address;
        $user->account_type = $request->accountType;
        $user->save();
        return redirect("/settings");
    }

    public function updateProfilePicture(Request $request){
        $user = Auth::user();
        if(Input::hasFile('profile_picture')){
            $file = Input::file('profile_picture');
            $filename = str_random(5)."_".$user->name.".".$file->getClientOriginalExtension();
            $file->move('img/profile_pictures', $filename);
            $user->profile_picture = $filename;
        }
        $user->save();
        return redirect("/settings");
    }
}
