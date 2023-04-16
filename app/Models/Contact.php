<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'testimonis';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'gambar', 'email', 'isi'];
    protected $dates = ['created_at'];
}
