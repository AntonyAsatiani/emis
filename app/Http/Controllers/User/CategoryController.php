<?php

namespace App\Http\Controllers\User;
use App\Category;
//use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function Index(){
   	$Category = Category::all();  
   	return View('user/category/category', compact('Category'));
   }

   public function AddCategory(){

   	return View('user/category/addcategory');
   }

   public function AddCategoryPost(Request $Request){
   		

   		$Validate = $Request->validate([
   			'title' => 'required|unique:categories|string'
   		]);

   		$Category = new Category;
   		
   		$Category->title = $Request->title;

   		$Category->save();

   		return redirect('user/category');
   }

   public function EditCategory($ID){

   		$Category = Category::findOrFail($ID);
   	
   		return View('user/category/editcategory',compact('Category'));
   }

   public function EditCategoryPost(Request $request, $ID){
   		$Validate = $request->validate([
   			'title' => 'required|unique:categories|string'
   		]);

   	   	$Category = Category::findOrFail($ID);
	
   		$Category->update($request->all());
   		return redirect('user/category');

   }

   public function DeleteCategory($ID){

   		$Category = Category::findOrFail($ID);
   	
   		$Category->delete();
	
		return redirect('user/category');
   }
}
