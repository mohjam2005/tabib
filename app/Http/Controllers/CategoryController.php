<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use DB;

class CategoryController extends Controller
{
    	public function addcat()
	 {

	return view('content.addcat');
	}
	public function store1(Request $req)
	 {
	 	

	 $cat = new Category;
	 $cat->name = Request('name');
	 $cat->des = Request('des');
     $cat->save();
     
     
       
     return redirect('/addcat');
	
	}

}
