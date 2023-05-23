<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Artikel;
use App\Models\BlogCategory;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class ArtikelController extends Controller
{
    // Articles
    public function artikel () {
        return view('admin/dashboard.artikel.artikel');
    }

    public function create () {
        return view('admin/dashboard.artikel.artikel_add');
    }

    public function save (Request $request) {
        $this->validate($request, [
            'judul' => 'required',
            'slug' => 'required',
            'penulis' => 'required',
            'kategori' => 'required',
            'jenis' => 'required',
            'isi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'profil' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('profil')) {
            $propath = $request->file('profil')->store('uploads/artikel/profil');
        } else {
            $propath = '';
        } 

        if($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('uploads/artikel/image');
        } else {
            $path = '';
        } 

        try {
            $data = new Artikel;
            $data->judul = $request->judul;
            $data->slug = $request->slug;
            // $data->slug = SlugService::createSlug(Artikel::class, 'slug', $data->judul);
            $data->penulis = $request->penulis;
            $data->kategori = $request->kategori;
            $data->jenis = $request->jenis;
            $data->isi = $request->isi;
            // $data->isi = $request->input('isi');
            $data->gambar = $path;
            $data->profil = $propath;
            $data->save();

            Session()->flash('alert-success', 'Data berhasil disimpan');
            // return redirect('dashboard/galeri/'.$data->id);
            return redirect('dashboard/artikel-add/');
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('dashboard/artikel-add/')->withInput();
        }
    }

    public function show () {
        $data = Artikel::paginate(10);
        return view('admin/dashboard.artikel.artikel', compact(['data']));
    }
    public function update () {
        
    }

    // public function destroy($id) {
    //     $delete = Artikel::findOrFail($id);
    //     return view('artikel-delete', ['delete'=>$delete]);
    // }

    // public function destroy($id) {
    //     $data = Artikel::findOrFail($id);
    //     Storage::delete('uploads/artikel/gambar/'.$data->gambar, 'uploads/artikel/profil/'.$data->profil);
    //     $data->delete();
    //     return redirect()->route('dashboard/artikel')->with(['success' => 'Data Berhasil Dihapus!']);
    // }

    // public function destroy($id) {
    //     $delete = Artikel::findOrFail($id);
    //     $gambar = public_path('/upload/artikel/image/').$delete->gambar;
    //     $profil = public_path('/upload/artikel/profil/').$delete->profil;
    //     if(file_exists($gambar, $profil)) {
    //         @unlink($gambar, $profil);
    //     }
    //     $delete->delete();
    //     return back();
    // }

    // Categories
    public function kategori () {
        $kategori = BlogCategory::all();
        return view('admin/dashboard.artikel.kategori_add', ['kategori' => $kategori]); 
    }
    public function kategoricreate () {
        return view('admin/dashboard.artikel.kategori_add');
    }
    public function kategorisave (Request $request) {
        $this->validate($request, [
            'kategori' => 'required',
        ]);

        try {
            $data = new BlogCategory;
            $data->kategori = $request->kategori;
            $data->save();

            Session()->flash('alert-success', 'Data berhasil disimpan');
            // return redirect('dashboard/galeri/'.$data->id);
            return redirect('dashboard/category-add/');
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('dashboard/category-add/')->withInput();
        }
    }
}
