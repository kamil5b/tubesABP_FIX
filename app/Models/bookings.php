<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paket extends Model
{
    protected $table ="bookings";
    protected $fillable = [
        'paket_id',
        'user_id',
        'tanggal',
     ];
}
