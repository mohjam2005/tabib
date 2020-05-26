<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddPatient;
use App\disease;

use DB;

class DataController extends Controller
{
    public function getCountries()
    {
        $countries = DB::table('categories')->pluck("name","id");
        return view('content.dropdown',compact('countries'));
    }
    public function allpatient()
	 {

	 	
     $states = DB::table("diseases")->get();
      $states1 = DB::table("add_patients")->get();
    
    
        return view('content.allpatient',compact('states1','states'));	
	}

public function getStates($id) 
{        
        $states = DB::table("diseases")->where("Category_id",$id)->pluck("Pub_Symptoms","id");
  
        return json_encode($states);
}

public function getStates1($id) 
{        
        
        $states1 = DB::table("diseases")->where("Category_id",$id)->pluck("Private_Symptoms","id");
        return json_encode($states1);
}

public function store2(Request $req)
	 {
	 	
	 
     $name=Request('name');
     $age=Request('age');
     $address=Request('address');
     $mobile= Request('mobile');

     $symbo1 = Request('state');
	 $symbo2 = Request('state1');
     
       
 
      $states1 = DB::table("diseases")->where("id",$symbo1)->first();
      $states2 = DB::table("diseases")->where("id",$symbo2)->first();
    
    
        return view('content.process',compact('states1','symbo1','states2','name','age','address','mobile'));	
	}

	 public function getdeasese()
    {
        return view('content.searchD');
    }
public function store4(Request $req)
	 {
	 	
	 
     $name=Request('name');
     $age=Request('age');
     $address=Request('address');
     $mobile= Request('mobile');

     $symbo1 = Request('state');
     
      $states1 = DB::table("diseases")->where('Private_Symptoms','like','%'.$symbo1.'%')->first();
    
    
        return view('content.process2',compact('states1','name','age','address','mobile'));	
	}


public function store3(Request $req)
	 {
	 	

	 $pat = new AddPatient;
	 $pat->name = Request('name');
	 $pat->age = Request('age');
	 $pat->address = Request('address');
	 $pat->mobile = Request('mobile');
	 $pat->disease_id = Request('disease_id');
     $pat->save();
     
     
       
     return redirect('/dropdownlist');
}
}