<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Copywriting; 

class CopywritingController extends Controller
{
    public function copywriting () {
        return view('admin/dashboard.copywriting.copywriting');
    }
    public function index () {
        $data = Copywriting::paginate(10);
        return view('admin/dashboard.copywriting.copywriting', ['data' => $data]);
    }
    public function profil($id) 
    {
        $profil = Copywriting::where('id', $id);
        return view('admin/dashboard.copywriting.profil', ['profil' => $profil]);
    }
    public function image($id) 
    {
        $image = Copywriting::where('id', $id);
        return view('admin/dashboard.copywriting.image', ['image' => $image]);
    }
    public function file($id) 
    {
        $file = Copywriting::where('id', $id);
        return view('admin/dashboard.copywriting.file', ['file' => $file]);
    }
    public function delete () {
        
    }
}
