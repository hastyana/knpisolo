<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'gambar', 'nama', 'posisi', 'divisi'];
    protected $dates = ['created_at, update_at'];
}
