<?php

namespace Database\Factories;

use App\Models\Pesanan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pesanan>
 */
class PesananFactory extends Factory
{
    // protected $model = Menu::class;

    public function definition(): array
    {
        return [
            'menu_id' => menu_id::inRandomOrder(),
            'nama_pelanggan' => nama_pelanggan::inRandomOrder(),
            'nomor_meja' => nomor_meja::inRandomOrder(),
            'jumlah' => jumlah::inRandomOrder(),
            'total_harga' => total_harga::inRandomOrder(),
            'status' => status::inRandomOrder(),
        ];
    }
}
