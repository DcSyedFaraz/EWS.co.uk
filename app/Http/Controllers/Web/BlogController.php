<?php

namespace App\Http\Controllers\Web;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create(){
          $blogs = Blog::orderBy('title', 'DESC')->get();
        //   return $blogs;
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
