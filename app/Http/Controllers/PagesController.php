<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\disease;
use DB;

class PagesController extends Controller
{

	public function adddesease()
	 {
 
    $cat= DB::table('categories')->pluck("name","id");
	return view('content.adddesease',compact('cat'));
	}
	
	public function store(Request $req)
	 {
	 	$title= Request('title');
	 	 
   $states1 = DB::table("diseases")->where('title','like',$title)->first();
    
    
      if ($states1)
      {

          return redirect('/adddesease');	

      }
      else{
      	$desease = new disease;
     $img_name =time(). '.' . Request('url')->getClientOriginalExtension();
	 $desease->title =$title ;
	 $desease->detaill = Request('detaill');
	 $desease->Pub_Symptoms = Request('Pub_Symptoms');
	 $desease->Private_Symptoms = Request('Private_Symptoms');
	 $desease->protection = Request('protection');
	 $desease->treatment = Request('treatment');
	 $desease->Category_id = Request('Category_id');
     $desease->url = $img_name;
     $desease->save();
     
     
     $req->url->move(public_path('uplaod'),$img_name);
       
     return redirect('/adddesease');
      }
	 
	
	}
	
    public function desease()
	 {
	 	$deseases = disease::all();
         

	return view('content.desease',compact('deseases'));
	}

    public function deseaseid($id)
	 {
	 	$desease = DB::table('diseases')->find($id);

	return view('content.deseaseid',compact('desease'));
	}

	public function category($id)
	 {
          $cat= DB::table('categories')->where('id', $id)->value('id','name');
          

          $deseases = DB::table('diseases')->where('Category_id', $cat)->get();
        $des = disease::with('categories')->where('Category_id', $cat)->get(); 
         


	return view('content.category',compact('deseases'));
	}
	
}

	 
	

