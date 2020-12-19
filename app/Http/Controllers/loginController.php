<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\userRequest;
//use Validator;
use App\User;
class loginController extends Controller
{
    function index(Request $req){
        return view('login.index');

    }

    function verify(userRequest $req){
        $req->validated();
      // $user= User::find()->all
       $user = User::where('username', $req->username)
                    ->where('password', $req->password)
                    ->get();

        if(count($user)>0){

            if($user[0]['username']=='admin'){
                
            $req->session()->put('username', $req->username);
            $req->session()->put('type', 'admin');
            return redirect('/admin');

            }else{
                $req->session()->put('username', $req->username);
                $req->session()->put('type', $req->username);
            return redirect('/emp');

            }


        }else{
            $req->session()->flash('msg', 'invalid username/password');
    		return redirect('/login');
        }

    }
}
