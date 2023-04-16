<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideosController extends Controller
{
    public function index() {
        $video = Video::all();
        return view('videos', compact('video'));
    }
}
