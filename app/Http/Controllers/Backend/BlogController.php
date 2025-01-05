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

        return view('dashboard.blog.createblog',compact('categories'));
    }
    public function store(Request $request){
        if($request->hasFile('image_upload')){

            $uploadFile=$request->image_upload->store('blog_image','public');
            $imagename='storage/'.$uploadFile;
        }else{
            $imagename=null;
        }

         $blog=Blog::create($request->all());
         $blog->update(['image'=>$imagename]);

         if(isset($request->category)){
            $blog->categories()->attach($request->get('category'));
         }

        Session::flash('success','Data Create successfully');
        return redirect()->back();
    }
    public function show(){
        $blogs=Blog::with('categories')->get();


        return view('dashboard.blog.view-blog',compact('blogs'));
    }
    public function edit($id){
        $blog=Blog::findOrFail($id);
        $categories=Category::all();



        if(is_null($blog)){
            return redirect()->back();
        }else{
            return view('dashboard.blog.edit-blog',compact('blog','categories'));
        }
    }
    public function update($id,Request $request){
        $blog=Blog::findOrFail($id);
        $blog->update($request->all());
            if ($request->get('category')) {
                Blog::find($id)->categories()->sync($request->get('category'));
            } else {
                Blog::find($id)->categories()->detach();
            }
            if($request->hasFile('image_upload')){

                $uploadFile=$request->image_upload->store('blog_image','public');
                $imagename='storage/'.$uploadFile;
                $blog->update(['image'=>$imagename]);
            }
            Session::flash('success','Data Create successfully');
            return redirect()->route('showblog');

    }
    public function destroy($id){
        $blogs=Blog::find($id);
        $blogs->categories()->detach();
        $blogs->delete();
        return redirect()->back();
    }
}
