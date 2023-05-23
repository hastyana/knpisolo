<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;
use App\Models\Video;
use App\Models\FotoCategory;

class GaleriController extends Controller
{   
    // Photos
    public function galeri () {
        $foto = Foto::paginate(10);
        $data = Video::paginate(5);
        $kategori = FotoCategory::paginate(5);
        return view('admin/dashboard.galeri.galeri', ['foto' => $foto, 'data' => $data, 'kategori' => $kategori]); 
    }
    public function fotocreate () {
        return view('admin/dashboard.galeri.foto_add');
    }
    public function kategorilist () {
        $kategori = FotoCategory::all();
        return view('admin/dashboard.galeri.foto_add', ['kategori' => $kategori]);
    }
    public function fotosave (Request $request) {
        $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required',
            'foto_category_id' => 'required',
            'kategori' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('uploads/foto');
        } else {
            $path = '';
        }

        try {
            $data = new Foto;
            $data->judul = $request->judul;
            $data->foto_category_id = $request->foto_category_id;
            $data->kategori = $request->kategori;
            $data->isi = $request->isi;
            $data->gambar = $path;
            $data->save();
            dd($data);

            Session()->flash('alert-success', 'Data berhasil disimpan');
            // return redirect('dashboard/galeri/'.$data->id);
            return redirect('dashboard/galeri/');
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('dashboard/galeri-photo-add/')->withInput();
        }
    }
    public function fotoshow () {
        // $data = Foto::all();
        // return view('admin/dashboard.galeri.galeri', compact(['data']));

        // if(empty($data)) {
        //     Session()->flash('alert-danger', 'Foto tidak ditemukan');
        //     return redirect('/dashboard/galeri');
        // }
        // return view ('admin/dashboard.galeri.galeri', compact(['data']));

        
    }
    public function fotodelete () {
        
    }

    // Videos
    public function videocreate () {
        return view('admin/dashboard.galeri.video_add');
    }
    public function videosave (Request $request) {
        $this->validate($request, [
            'judul' => 'required',
            'link' => 'required|url',
        ]);

        try {
            $data = new Video;
            $data->judul = $request->judul;
            $data->link = $request->link;
            $data->save();

            Session()->flash('alert-success', 'Data berhasil disimpan');
            // return redirect('dashboard/galeri/'.$data->id);
            return redirect('dashboard/galeri-video-add/');
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('dashboard/galeri-video-add/')->withInput();
        }
    }
    // public function videoshow () {
    //     $data = Video::all();
    //     return view('admin/dashboard.galeri.galeri', ['data' => $data]);
    // }
    public function videodelete () {
        
    }

    // Categories
    // public function kategori () {
    //     $kategori = FotoCategory::all();
    //     return view('admin/dashboard.galeri.category', ['kategori' => $kategori]); 
    // }
    public function kategoricreate () {
        return view('admin/dashboard.galeri.category');
    }
    public function kategorisave (Request $request) {
        $this->validate($request, [
            'kategori' => 'required',
        ]);

        try {
            $data = new FotoCategory;
            $data->kategori = $request->kategori;
            $data->save();

            Session()->flash('alert-success', 'Data berhasil disimpan');
            // return redirect('dashboard/galeri/'.$data->id);
            return redirect('dashboard/galeri-category/');
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('dashboard/galeri-category/')->withInput();
        }
    }
}
