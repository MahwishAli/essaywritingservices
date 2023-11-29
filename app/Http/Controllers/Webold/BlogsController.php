<?php

namespace App\Http\Controllers\Web;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('id', 'DESC')->paginate(6);

        return view('pages.blogs.index', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', "=", "$slug")->firstOrFail();

        return view('pages.blogs.show', compact('blog'));
    }

    public function redirect()
    {
        return redirect()->route('blogs.index');
    }
}
