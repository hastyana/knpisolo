<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class PublicController extends Controller
{
    public function index() {
        return view('home');
    }
    public function about() {
        return view('about');
    }
    public function photos() {
        return view('photos');
    }
    public function videos() {
        return view('videos');
    }
    public function blog() {
        return view('blog');
    }
    public function news() {
        return view('news');
    }
    public function pers() {
        return view('pers');
    }
    public function article() {
        return view('article');
    }
    public function contact() {
        return view('contact');
    }
    // public function show($id) {
    //     $artikel = Artikel::findOrFail($id);
    //     return view('content', compact('artikel'));
    // }
}
