<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;
use App\Models\Video;

class GaleriController extends Controller
{
    public function galeri () {
        $foto = Foto::all();
        $data = Video::all();
        return view('admin/dashboard.galeri.galeri', ['foto' => $foto, 'data' => $data]); 
    }
    public function fotocreate () {
        return view('admin/dashboard.galeri.foto_add');
    }
    public function fotosave (Request $request) {
        $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required',
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
            $data->isi = $request->isi;
            $data->gambar = $path;
            $data->save();

            Session()->flash('alert-success', 'Data berhasil disimpan');
            // return redirect('dashboard/galeri/'.$data->id);
            return redirect('dashboard/galeri-photo-add/');
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
}
