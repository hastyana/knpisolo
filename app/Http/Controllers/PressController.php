<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
 
class PressController extends Controller
{
    public function index() {
        $headline = Artikel::where(['jenis' => 'Pers'])->latest()->paginate(1);
        $all = Artikel::where(['jenis' => 'Pers'])->latest()->paginate(20);
        return view('pers', ['headline' => $headline, 'all' => $all]);
    }

    public function show($slug) 
    {
        $post = Artikel::where('slug', $slug)->firstOrFail();
        // dd($post);
        return view('pers-post', ['post' => $post]);
    }
} 
