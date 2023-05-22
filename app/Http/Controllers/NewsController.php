<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
 
class NewsController extends Controller
{
    public function index() {
        $headline = Artikel::where(['jenis' => 'Berita'])->latest()->paginate(1);
        $all = Artikel::where(['jenis' => 'Berita'])->latest()->paginate(20);
        return view('news', ['headline' => $headline, 'all' => $all]);
    } 

    public function show($slug) 
    {
        $post = Artikel::where('slug', $slug)->firstOrFail();
        // dd($post);
        return view('news-post', ['post' => $post]);
    }
}
