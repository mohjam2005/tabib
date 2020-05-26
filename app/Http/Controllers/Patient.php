<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddPatient;
use App\disease;

use DB;

class Patient extends Controller
{
    	public function addpatient()
	 {
          
       $cat= DB::table('categories')->get();

    //   $des = disease::with('categories')->get(); 
	return view('content.addpatient',compact('cat'));
	}
	public function getStates($id) {
        $states = DB::table("diseases")->where("Category_id",$id)->get();

        return json_encode($states);


    }
	public function store1(Request $req)
	 {
	 	
	 $pat = new Patient;
	 $pat->name = Request('name');
	 $pat->age = Request('age');
	 $pat->address = Request('address');
	 $pat->mobile = Request('mobile');
	 $pat->disease_id = Request('disease_id');
     $pat->save();
     
     
       
     return redirect('/addcat');
	
	}
}
