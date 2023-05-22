<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $table = 'testimonis';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'gambar', 'nama', 'email', 'isi'];
    protected $dates = ['created_at, update_at'];
}
