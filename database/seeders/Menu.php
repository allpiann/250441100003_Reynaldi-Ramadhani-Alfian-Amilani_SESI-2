<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Menu extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::factory()->count(5)->create();
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
            [
                'id' => 3,
                'nama_menu' => 'Ayam Bakar',
                'jenis' => 'Makanan',
                'harga' => Rp28000
            ],
            [
                'id' => 4,
                'nama_menu' => 'Es Teh',
                'jenis' => 'Minuman',
                'harga' => Rp5000
            ],
            [
                'id' => 5,
                'nama_menu' => 'Jus Alpukat',
                'jenis' => 'Minuman',
                'harga' => Rp15000
            ]

        ];
}

}
