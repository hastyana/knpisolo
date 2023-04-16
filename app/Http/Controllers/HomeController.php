<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Infografis;
use App\Models\Testimonial;


class HomeController extends Controller
{
    public function index() {
        $infografis = Infografis::all();
        return view('home', compact('infografis'));
    }
    // public function artic() {
    //     $artikel = Artikel::all();
    //     return view('home', compact('artikel'));
    // }
    // public function testi() {
    //     $testimonial = Testimonial::all();
    //     return view('home', compact('testimonial'));
    // }
}
