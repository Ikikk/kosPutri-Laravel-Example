<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable= [ 
        'jenisKamar', 
        'hargaPerBulan'
    ];

    public function penghuni(){
        return $this->belongsTo(Penghuni::class);
    }
}
