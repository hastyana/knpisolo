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
    public function show($foto_category_id) 
    {
        $data = Foto::where('foto_category_id', $foto_category_id)->firstOrFail();
        return view('photos-filter', ['data' => $data]);
    }
}

