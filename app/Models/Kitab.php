<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kitab extends Model
{
    use HasFactory;
    protected $table = 'program';
    
    protected $fillable = [
        'nama_program',
        'deskripsi',
        'kelas',
        'deskripsi_kelas',
        'nama_pelajaran'
    ];
}
