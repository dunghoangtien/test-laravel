<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function getindex()
    {
    	$product_sp= DB::table('products')->where('id',1)->first();
    	$products = DB::table('anhbe')->where('image_id',1)->get();
    	$colorsp = DB::table('product_colors')->where('product_id',1)->get();
    	
    	// $maudcchon = DB::table('colors')->where('id',$colorsp->color_id)->get();
    	return view('page.home',compact('product_sp','products','maudcchon','colorsp'));
    }
}
