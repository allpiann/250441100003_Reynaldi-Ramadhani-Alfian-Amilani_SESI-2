<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Pesanan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pesanan::factory()->count(2)->create();
    }

     private function Menu()
    {
        return [
            [
                'id' => 1,
                'nama_menu' => 'Nasi Goreng Spesial',
                'jenis' => 'Makanan',
                'harga' => Rp25000,
            ],
            [
                'id' => 2,
                'nama_menu' => 'Soto Ayam',
                'jenis' => 'Makanan',
                'harga' => Rp20000
            ],

        ];

    }
}
