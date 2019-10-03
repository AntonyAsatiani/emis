<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Index()
    {
    	return view('user/index');	
    }

    public function Profile(){
    	return view('user/profile');
    }

    public function Image(){
    	return view('user/image');
    }
}
