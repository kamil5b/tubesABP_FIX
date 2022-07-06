<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paket extends Model
{
    protected $table ="paket";

    protected $fillable = [
       'nama',
        'durasi',
        'pulau',
        'fasilitas',
        'fasilitas2',
        'fasilitas3',
        'harga',
        'url_pic',
    ];

}
