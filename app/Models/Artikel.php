<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
 
    protected $table = 'artikels';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'gambar', 'profil', 'judul', 'slug', 'penulis', 'artikel_category_id', 'kategori', 'jenis', 'isi'];
    protected $dates = ['created_at, update_at'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }

    public function blogcategory(){
    	return $this->belongsTo('App\Models\BlogCategory');
    }
}
