<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function Index(){
   	return View('user/category/category');
   }

   public function AddCategory(){
   	return View('user/category/addcategory');
   }
   public function EditCategory(){
   	return View('user/category/editcategory');
   }
}
