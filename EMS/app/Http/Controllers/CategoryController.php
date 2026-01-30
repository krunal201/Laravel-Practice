<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //Return view for Add Category
    public function addCategoryView(){
        return view("addcategories");
    }

    //Add New Category
    public function addCategory(Request $request){
        Categories::create([
            "name" => $request->name,
        ]);
    }

    //Return view for Update Category
    public function updateCategoryView($id){
        $category = Categories::findOrFail($id);
        return view("updatecategories",compact('category'));
    }
    //Handle Updation Of Category
     public function updateCategory(Request $request,$id){
       $cat=Categories::findOrFail($id);
       $cat->name=$request->input('name');
       $cat->save();
       return redirect('/categories');
    }

    //Delete Category
    public function deleteCategory($id){
        $cat=Categories::findOrFail($id);
        $cat->delete();
       return redirect('/categories');
    }

    //return All Categories
    public function listAllCatgory(){
        $data = DB::table('categories')->get();
        return view("categories", compact('data'));
    }
}
