<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PiknikSyahdu extends Model
{
    use HasFactory;
    protected $table = 'daftar_pesanan';

    protected $fillable = [
        'nama_pelanggan', 
        'email', 
        'no_telp', 
        'start_date'
    ];
}
