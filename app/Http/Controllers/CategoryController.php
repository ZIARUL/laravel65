<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(){
    	return view('admin.category.add-category');
    }

    public function saveCategoryInfo( Request $request){
    	$category = new Category();

    	$category->category_name = $request->category_name;
    	$category->category_description = $request->category_description;
    	$category->publication_status = $request->publication_status;
    	$category->save();

    	return redirect('/add-category')->with('message', "Category info Save successfully");
    }

    public function manageCategoryInfo(){
    	$allCategories = Category::all();
    	return view('admin.category.manage-category', ['allCategories' =>  $allCategories]);
    }
    
    public function unpublishedCategoryInfo($id){

        $categoryById = Category::find($id);
        $categoryById->publication_status = 0;
        $categoryById->save();
        return redirect('manage-category')->with("message", 'Category info Unpublished Successfully');


    }
    public function publishedCategoryInfo($id){

        $categoryById = Category::find($id);
        $categoryById->publication_status = 1;
        $categoryById->save();
        return redirect('manage-category')->with("message", 'Category info published Successfully');


    }
    public function editeCategoryInfo($id){
    	$categoryById = Category::find($id);
    	/*$categoryById = Category::where('id', $id)->first();*/
    	/*return $categoryById;*/
    	return $categoryById;
    	return view('admin.category.edit-category'['$categoryById->$categoryById']);
    }
    

}



