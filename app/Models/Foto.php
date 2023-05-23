<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{ 
    use HasFactory;

    protected $table = 'fotos';
    protected $primaryKey = 'id'; 
    protected $fillable = ['id', 'gambar', 'foto_category_id', 'kategori', 'judul', 'isi'];
    protected $dates = ['created_at', 'update_at'];

    public function fotocategory(){
    	return $this->belongsTo('App\Models\FotoCategory');
    }
}
