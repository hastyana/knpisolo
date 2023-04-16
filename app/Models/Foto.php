<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{ 
    use HasFactory;

    protected $table = 'fotos';
    protected $primaryKey = 'id'; 
    protected $fillable = ['id', 'gambar', 'judul', 'isi'];
    protected $dates = ['created_at'];

    // public function cariFoto($id) {
    //     $data = Foto::where('id', $id)->first();
    //     return $data;
    // }
}
