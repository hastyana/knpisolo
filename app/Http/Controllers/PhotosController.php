<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;

class PhotosController extends Controller
{
    public function index() {
        $photos = Foto::all();
        return view('photos', compact('photos'));
    }
}
