<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class empController extends Controller
{
    function index(Request $req){
        return view('emp.index');

    }

    function create(Request $req){
        return view('emp.create');

    }

    function productstore(Request $req){
       // $req->validated();

       
                $user = new Product();
                $user->username     = $req->name;
                $user->password     = $req->quantity;
                $user->name         = $req->price;
                
               

                if($user->save()){
                    return redirect()->route('emp.index');
                }else{
                    return back();
                }

    }

    public function plist(){
    	
        $emp = Product::all();
    	return view('emp.plist')->with('students', $emp);
    }

}
