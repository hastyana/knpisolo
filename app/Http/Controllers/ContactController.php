<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; 

class ContactController extends Controller
{
    public function contact () { 
        return view('contact');
    } 
    public function create () {
        return view('contact');
    }
    public function save (Request $request) {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'isi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('uploads/testimonial');
        } else {
            $path = '';
        } 

        try {
            $data = new Contact;
            $data->nama = $request->nama;
            $data->email = $request->email;
            $data->isi = $request->isi;
            $data->gambar = $path;
            $data->save();

            Session()->flash('alert-success', 'Data berhasil disimpan');
            return redirect('contact');
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('contact')->withInput();
        }
    }
}
