<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\User;

class BlogController extends Controller
{
    public function index(){     
        $title = '';
        if(request('blog_category')){
            $blog_category = BlogCategory::firstWhere('id', request('blog_category'));
            $title = ' in ' . $blog_category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' By ' . $author->name;
        }
        return view('/blog/blogs',[
            "title" => "All Blog" . $title,            
            "active" => "blog",
            "blogs" => Blog::latest()->filter(request(['search', 'blog_category', 'author']))->paginate(7)->withQueryString()
        ]);
    }
    public function show(Blog $blog){
        return view('/blog/blog',[
            "title" => "Blog Detail : $blog->title",
            "active" => "blog",
            "blog" => $blog
        ]);
    }
    public function indexCategory(){
        return view('blog/categories',[
            'title' => 'Blog Categories', 
            "active" => "categories",       
            'categories' => BlogCategory::all()
        ]);
    }
}

