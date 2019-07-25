<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class HomeBlogController extends Controller
{
    public function index()
    {      
        return view('blog.home', [
            'articles' => Article::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }
}
