<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Okp extends Model
{
    use HasFactory;

    protected $table = 'okp_tables';
    protected $primaryKey = 'id'; 
    protected $fillable = ['id', 'gambar', 'nama', 'email', 'alamat', 'link_maps', 'website', 'link_web'];
    protected $dates = ['created_at', 'update_at'];
}
