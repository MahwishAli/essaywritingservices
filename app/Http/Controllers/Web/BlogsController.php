<?php

namespace App\Http\Controllers\web;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function create(){
        $blogs = Blog::orderBy('title', 'DESC')->paginate(6);
      //    return $blogs;
      return view('pages.blogs.index',compact('blogs'));
  }
      public function show($post){
        $blog = Blog::where(['slug' => $post])->firstOrFail();
        // return $blog;
        $blogs = Blog::all();

        // return $blog->image_path;

        // View::share('blogs',$blogs);
        return view('pages.blogs.show',compact('blog','blogs'));
    }



}
