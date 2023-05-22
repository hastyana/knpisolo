<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function team () {
        return view('admin/dashboard.team.team');
    }
    public function create () {
        return view('admin/dashboard.team.team_add');
    }
    public function save (Request $request) {
        $this->validate($request, [
            'nama' => 'required',
            'posisi' => 'required',
            'divisi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('uploads/team');
        } else {
            $path = '';
        } 

        try {
            $data = new Team;
            $data->nama = $request->nama;
            $data->posisi = $request->posisi;
            $data->divisi = $request->divisi;
            $data->gambar = $path;
            $data->save();

            Session()->flash('alert-success', 'Data berhasil disimpan');
            // return redirect('dashboard/galeri/'.$data->id);
            return redirect('dashboard/team-add/');
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('dashboard/team-add/')->withInput();
        }
    }
    public function show () {
        $data = Team::paginate(10);
        return view('admin/dashboard.team.team', compact(['data']));
    }
    public function update () {
        
    }
    public function delete () {
        
    }
}
