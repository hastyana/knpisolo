<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;
use App\Models\FotoCategory;

class PhotosController extends Controller
{
    public function index() {
        $photos = Foto::latest()->paginate(5); 
        $all = Foto::paginate(9);
        $menu = FotoCategory::all();
        return view('photos', ['photos' => $photos, 'all' => $all, 'menu' => $menu]);
    }
    public function show($kategori) 
    {
        $kategoris = Foto::where('kategori', $kategori)->firstOrFail();
        return view('photos-filter', ['kategoris' => $kategoris]);
    }
}

