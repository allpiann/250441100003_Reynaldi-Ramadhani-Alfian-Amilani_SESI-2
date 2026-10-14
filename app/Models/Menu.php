<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'Menus';

    protected $fillable = [
        'id',
        'nama_menu',
        'jenis',
        'harga',

    ];

    public function Pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'id');
    }

}

