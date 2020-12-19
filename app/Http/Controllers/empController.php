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
                $user->name     = $req->name;
                $user->quantity     = $req->quantity;
                $user->price         = $req->price;
                
               

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

    public function edit($id){
    	
        $p = Product::find($id);
    	return view('emp.edit', $p);
    }

    public function update($id, Request $req){
    	   
        $p = Product::find($id);

        $p->name = $req->name;
        $p->quantity = $req->quantity;
        $p->price     = $req->price;
        
      

        $p->save();

    	return redirect()->route('emp.plist');
    }

    public function delete($id){
    	
    	$p=Product:: find($id);
               $p->delete();
               return redirect()->route('emp.plist');
    }

}
