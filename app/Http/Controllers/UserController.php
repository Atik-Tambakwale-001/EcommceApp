<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function login(Request $request)
    {
        $user=User::where(["email"=>$request->email])->first();
        if (!$user || Hash::check($request->password,$user->password)) {
            return "Username or pasword is not Matched";
        }else{
            $request->session()->put("user",$user);
            return redirect('/');
        }
    }
    function userRegister(Request $req)
    {
        $user=new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();

        return redirect("/login");
    }
}
