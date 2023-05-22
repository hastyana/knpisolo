<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Okp; 

class OkpController extends Controller
{
    public function index() {
        $all = Okp::all();
        return view('okp', ['all' => $all]);
    }

    public function okp_add() {
        return view('okp_add');
    }

    public function create () { 
        return view('okp_add');
    }

    public function save (Request $request) {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'link_maps' => 'required',
            'website' => 'required',
            'link_web' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('uploads/okp');
        } else {
            $path = '';
        } 

        try {
            $data = new Okp;
            $data->nama = $request->nama;
            $data->email = $request->email;
            $data->alamat = $request->alamat;
            $data->link_maps = $request->link_maps;
            $data->website = $request->website;
            $data->link_web = $request->link_web;
            $data->gambar = $path;
            $data->save();

            Session()->flash('alert-success', 'Data berhasil disimpan');
            return redirect('okp_add');
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('okp_add')->withInput();
        }
    }
}
