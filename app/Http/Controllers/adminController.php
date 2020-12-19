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

    public function edit($id){
    	
        $emp = User::find($id);
    	return view('admin.edit', $emp);
    }

    public function update($id, Request $req){
    	   
        $user = User::find($id);

        $user->username = $req->username;
        $user->password = $req->password;
        $user->type     = $req->type;
        $user->name     = $req->name;
        $user->contact     = $req->contact;
      

        $user->save();

    	return redirect()->route('admin.emplist');
    }
}
