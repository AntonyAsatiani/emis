<?php

namespace App\Http\Controllers\User;
use App\Category;
//use Illuminate\Support\Facades\Validator;
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

   public function AddCategoryPost(Request $request){
   		

   		$Validate = $request->validate([
   			'title' => 'required|unique:categories|string'
   		]);

   		$Category = new Category;
   		
   		$Category->title = $request->title;

   		$Category->save();

   		return redirect('user/category');
   }

   public function EditCategory(){
   	return View('user/category/editcategory');
   }
}
