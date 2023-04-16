<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infografis;

class InfografisController extends Controller
{
    public function infografis () {
        $data = Infografis::all();
        return view('admin/dashboard.infografis.infografis', compact(['data']));
    }
    public function create () {
        return view('admin/dashboard.infografis.infografis_add');
    }
    public function save (Request $request) {
        $this->validate($request, [
            'kategori' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('uploads/infografis');
        } else {
            $path = '';
        }

        try {
            $data = new Infografis;
            $data->kategori = $request->kategori;
            $data->gambar = $path;
            $data->save();

            Session()->flash('alert-success', 'Data berhasil disimpan');
            // return redirect('dashboard/galeri/'.$data->id);
            return redirect('dashboard/infografis/');
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('dashboard/infografis-add/')->withInput();
        }
    }
    public function show () {
        $data = Infografis::all();
        return view('admin/dashboard.infografis.infografis', compact(['data']));
    }
    public function update () {
        
    }
    public function delete () {
        
    }
}
