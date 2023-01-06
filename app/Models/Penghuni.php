<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penghuni extends Model
{
    use HasFactory;
    protected $fillable= [ 
        'nama', 
        'email',
        'password',
        'alamatAsal',
        'noTelp',
        'nomorKamar',
        'images'
    ];

    public function room(){
        return $this->belongsTo(Room::class, 'nomorKamar');
    }
}
