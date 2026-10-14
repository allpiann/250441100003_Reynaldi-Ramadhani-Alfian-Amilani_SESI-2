<?php

namespace Database\Factories;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Menu>
 */
class MenuFactory extends Factory
{
    // protected $model = Menu::class;

    public function definition(): array
    {
        return [
            'nama_menu' => nama_menu::inRandomOrder(),
            'jenis' => jenis::inRandomOrder(),
            'harga' => jenis::inRandomOrder(),
        ];
    }
}
