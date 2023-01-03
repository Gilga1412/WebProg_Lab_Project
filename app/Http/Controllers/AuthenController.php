<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthenController extends Controller
{
    public function register(Request $request){
        $rules = [
            'name' => 'required|min:5',
            'email' => 'required|unique:users|email',
            'password'=>'required|min:8|alpha_num',
            'ConfirmPassword' => 'required|min:8|alpha_num|same:password',
            'gender' => 'required',
            'DOB' => 'required',
            'Country' => 'required|in:option1,option2,option3',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return back()->withErrors($validator);
        }
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->ConfirmPassword = $request->ConfirmPassword;
        $users->gender = $request->gender;
        $users->DOB = $request->DOB;
        $users->Country = $request->Country;

        $users->save();
        return redirect('/login');
    }
}
