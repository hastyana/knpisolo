<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArticleController extends Controller
{
    public function index() {
        $article = Artikel::paginate(1);
        return view('article', compact('article'));
    }
}
