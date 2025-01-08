<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(){
        return view ('dashboard.category.createcategory');
    }
    public function store(Request $request){
        $validate = $request->validate([
            'category_name'=>'required|unique:categories,category_name'
        ]);
        $category = Category::create($request->all());

        return redirect()->back();
    }
    public function show(){
        $categories=Category::all();
        return view ('dashboard.category.view-category',compact('categories'));
    }
}
