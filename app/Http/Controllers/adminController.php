<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FieldRequest;
use App\Http\Requests\AdduserRequest;
use App\User;

class adminController extends Controller
{
    function index(Request $req){
        return view('admin.index');

    }

    function create(Request $req){
        return view('admin.create');

    }

    function employeestore(AdduserRequest $req){
                $req->validated();

       
                $user = new User();
                $user->username     = $req->username;
                $user->password     = $req->password;
                $user->name         = $req->name;
                $user->contact         = $req->contact;
                $user->type         = $req->type;
               

                if($user->save()){
                    return redirect()->route('admin.emplist');
                }else{
                    return back();
                }

    }

    public function emplist(){
    	
        $emp = User::all();
    	return view('admin.emplist')->with('emp', $emp);
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

    public function destroy($id){
    	
    	
        return view('admin.delete');
}

public function delete($id){
 
 $p=User:: find($id);
        $p->delete();
        return redirect('/admin/employeelist');
}
}
