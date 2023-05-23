<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;
    
    protected $table = 'blog_categories';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'kategori'];
    protected $dates = ['created_at, update_at']; 

    public function artikel(){
    	return $this->hasMany('App\Models\Artikel');
    }
}
