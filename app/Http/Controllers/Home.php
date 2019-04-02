<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function getindex()
    {
    	return view('page.home');
    }
}
