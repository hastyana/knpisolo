<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infografis extends Model
{
    use HasFactory;

    protected $table = 'infografis';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'gambar', 'kategori'];
    protected $dates = ['created_at'];
}
