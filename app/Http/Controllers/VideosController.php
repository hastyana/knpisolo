<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideosController extends Controller
{
    public function index() {
        $video = Video::latest()->paginate(5);
        return view('videos', compact('video'));
    }
}
