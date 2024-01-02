<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gambarEkstra extends Model
{
    use HasFactory;
    protected $table = 'gambar_ekstra';
    
    protected $fillable = [
        'ekstra_id',	
        'gambar_ori',	
        'gambar_tum'
    ];

    public function ekstra() {
        return $this->belongsTo(Ekstra::class, 'ekstra_id', 'id');
    }
}
