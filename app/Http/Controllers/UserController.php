<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    function login(Request $req)
    {

        //return $req->input();
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password is incorrect";
        }
        else
        {
            $req->session()->put('user',$user);
          return  redirect('/');
        }
    }
    function register(Request $req)
    {
      //  return $req->input();
      $user = new User();
      $user->name= $req->username;
      $user->email= $req->email;
      $user->password= Hash::make($req->password);
      $user->save();
        return redirect('/login');

    }
    function users()
    {
      //$users = User::all();
      $users = User::Paginate(2);
      $no=1;
    return view('users',['users'=>$users,'no'=>$no]);

    }
}
