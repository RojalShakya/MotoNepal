<?php

namespace App\Http\Controllers\backend;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    //
    public function index(){
        $categories= Category::all();

        return view('dashboard.createblog',compact('categories'));
    }
    public function store(Request $request){
        if($request->hasFile('image')){

            $uploadFile=$request->image->store('blog_image','public');
            $imagename='storage/'.$uploadFile;
        }

         $blog=Blog::create($request->all());
         $blog->update(['image'=>$imagename]);
         if(isset($request->category)){
            $blog->categories()->attach($request->get('category'));
         }

        Session::flash('success','Data Create successfully');
        return redirect()->back();
    }
}
