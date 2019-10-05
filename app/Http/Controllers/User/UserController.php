<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    function __construct(){
         $this->middleware('auth');

    }

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
