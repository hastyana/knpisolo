<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copywriting extends Model
{
    use HasFactory; 

    protected $table = 'copywritings';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'gambar', 'profil', 'nama', 'email', 'file'];
    protected $dates = ['created_at, update_at']; 
}
