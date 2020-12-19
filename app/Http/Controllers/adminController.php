<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class adminController extends Controller
{
    function index(Request $req){
        return view('admin.index');

    }

    function create(Request $req){
        return view('admin.create');

    }

    function employeestore(Request $req){
       // $req->validated();

       
                $user = new User();
                $user->username     = $req->username;
                $user->password     = $req->password;
                $user->name         = $req->name;
                $user->contact         = $req->contact;
                $user->type         = $req->type;
               

                if($user->save()){
                    return redirect()->route('admin.index');
                }else{
                    return back();
                }

    }

    public function emplist(){
    	
        $emp = User::all();
    	return view('admin.emplist')->with('students', $emp);
    }
}
