<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel; 
use App\Models\Copywriting; 

class BlogController extends Controller
{ 

    public function index() {
        $headline = Artikel::paginate(1);
        $all = Artikel::latest()->paginate(2);
        $news = Artikel::where(['jenis' => 'Berita'])->latest()->paginate(2);
        $articles = Artikel::where(['jenis' => 'Artikel'])->latest()->paginate(2);
        $press = Artikel::where(['jenis' => 'Pers'])->latest()->paginate(2);
        return view('blog', ['headline' => $headline, 'all' => $all, 'news' => $news, 'articles' => $articles, 'press' => $press]);
    }

    public function show($slug) 
    {
        $post = Artikel::where('slug', $slug)->firstOrFail();
        // dd($post);
        return view('blog-post', ['post' => $post]);
    }

    public function upload () {
        return view('upload');
    }

    public function create () {
        return view('upload');
    }

    public function save (Request $request) {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'file' => 'required|mimes:dic,docx,xls,xlsx,pdf|max:2048',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'profil' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('file')) {
            $filepath = $request->file('file')->store('uploads/copywrite/files');
        } else {
            $filepath = ''; 
        } 

        if($request->hasFile('profil')) {
            $propath = $request->file('profil')->store('uploads/artikel/profil');
        } else {
            $propath = '';
        } 

        if($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('uploads/copywrite/image');
        } else {
            $path = '';
        } 

        try {
            $data = new Copywriting;
            $data->nama = $request->nama;
            $data->email = $request->email;
            $data->file = $filepath;
            $data->gambar = $path;
            $data->profil = $propath;
            $data->save();

            Session()->flash('alert-success', 'Data berhasil disimpan');
            return redirect('upload');
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('upload')->withInput();
        }
    }

}
