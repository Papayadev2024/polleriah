<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $cat = ['Pollos a la brasa', 'Ensaladas', 'Parrillas especiales', 'Bebidas', 'Parrillas'];
        $ids = [1, 2, 3, 4, 5];
        $img = ['cat_1.png', 'cat_2.png', 'cat_3.png', 'cat_4.png', 'cat_5.png'];
        for ($i = 0; $i < 5; $i++) {
            Category::create([
                'id' => $ids[$i],
                'name' => $cat[$i],
                'url_image' => 'images/img/',
                'name_image' => $img[$i],
                'description' => '',
                'status' => 1,
                'destacar' => 1,
                'visible' => 1,
            ]);
        }
    }
}
