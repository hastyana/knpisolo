<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel; 

class ArticleController extends Controller
{
    public function index() {
        $headline = Artikel::where(['jenis' => 'Artikel'])->latest()->paginate(1);
        $all = Artikel::where(['jenis' => 'Artikel'])->latest()->paginate(20);
        return view('article', ['headline' => $headline, 'all' => $all]);
    }

    public function show($slug) 
    {
        $post = Artikel::where('slug', $slug)->firstOrFail();
        // dd($post);
        return view('article-post', ['post' => $post]);
    }
}  
