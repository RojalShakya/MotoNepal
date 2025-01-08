<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        // $blogs=Blog::with('categories')->get();
        $blogs=Blog::inRandomOrder()->limit(3)->with('categories')->get();
        $blogId=$blogs->pluck('id')->toArray();
        $blogFilter=Blog::whereNotIn('id',$blogId)->latest()->limit(3)->with('categories')->get();
        $categories=Category::all();

        return view('frontend.index',compact('blogs','blogFilter','categories'));
    }
}
