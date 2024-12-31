<?php

namespace App\Http\Controllers\Backend;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginValidation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
    public function login(){
        return view('auth.login');
    }
    public function loginVerify(Request $request){

        $user = $request->validate([
            'email'=>'email|required',
            'password'=>'required'
        ]);
        $user=User::where('email',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                session()->put('user_id',$user->id);
                return redirect()->route('dashboard');
            }
            else{
                return redirect()->back()->with('message','password error');
            }

        }else{
            return redirect()->back()->with('message','User doesnt exist');
        }


    }



}
