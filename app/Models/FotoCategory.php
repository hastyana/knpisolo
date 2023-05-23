<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FotoCategory extends Model
{
    use HasFactory;
    
    protected $table = 'foto_categories';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'kategori'];
    protected $dates = ['created_at, update_at']; 

    public function foto(){
    	return $this->hasMany('App\Models\Foto');
    }
}
