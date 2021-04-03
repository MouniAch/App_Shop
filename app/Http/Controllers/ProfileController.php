<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profile(){
        return view('profile');
    }

    public function updateprofile(Request $request){
         
        $user=Auth::user();
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->telephone=$request['telephone'];
        $user->password=Hash::make($request->input('password'));
        $user->save();
        
        return back();

    }
}
