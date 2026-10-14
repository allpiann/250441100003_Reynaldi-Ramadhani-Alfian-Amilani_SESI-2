<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'Menu';

    protected $fillable = [
        'id',
        'menu_id',
        'nama_pelanggan',
        'nomor_meja',
        'jumlah',
        'total_harga',
        'status'
    ];
}
