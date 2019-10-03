<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function AddResource(){
    	return View('User/resources/addresource');
    }
    public function EditResource(){
    	return View('User/resources/editresource');
    }
}
