<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
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
        ]);

        if($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('uploads/artikel');
        } else {
            $path = '';
        } 

        try {
            $data = new Artikel;
            $data->judul = $request->judul;
            $data->slug = $request->slug;
            $data->penulis = $request->penulis;
            $data->kategori = $request->kategori;
            $data->jenis = $request->jenis;
            $data->isi = $request->isi;
            $data->gambar = $path;
            $data->save();

            Session()->flash('alert-success', 'Data berhasil disimpan');
            // return redirect('dashboard/galeri/'.$data->id);
            return redirect('dashboard/artikel/');
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('dashboard/artikel-add/')->withInput();
        }
    }
    public function show () {
        $data = Artikel::all();
        return view('admin/dashboard.artikel.artikel', compact(['data']));
    }
    public function update () {
        
    }
    public function delete () {
        
    }
}
