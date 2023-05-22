<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;

class PhotosController extends Controller
{
    public function index() {
        $photos = Foto::latest()->paginate(30); 
        return view('photos', compact('photos'));
    }
}
