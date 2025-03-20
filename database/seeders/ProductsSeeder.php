<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
           
            [   
                'categoria_id' => 1,
                'producto' => 'Placerat sapien felis vitae dui',
                'description' => 'Mauris gravida, nunc quis egestas tempus, quam quam cursus lectus, nec placerat sapien felis vitae dui.',
                'precio' => 123,
                'descuento' => 111,
                'imagen' => 'images/img/producto_1.png',
                'destacar' => 1,
                'recomendar' => 1,
                'visible' => 1,
                'status' => 1,
                'created_at' => '2024-08-02 21:33:46',
                'updated_at' => '2024-08-02 23:57:40',
            ],
            [   
                'categoria_id' => 1,
                'producto' => 'Placerat sapien felis vitae dui',
                'description' => 'Mauris gravida, nunc quis egestas tempus, quam quam cursus lectus, nec placerat sapien felis vitae dui.',
                'precio' => 123,
                'descuento' => 111,
                'imagen' => 'images/img/producto_2.png',
                'visible' => 1,
                'destacar' => 1,
                'recomendar' => 1,
                'status' => 1,
                'created_at' => '2024-08-02 21:33:56',
                'updated_at' => '2024-08-03 00:22:01',
            ],
            [
                'categoria_id' => 2,
                'producto' => 'Placerat sapien felis vitae dui',
                'description' => 'Mauris gravida, nunc quis egestas tempus, quam quam cursus lectus, nec placerat sapien felis vitae dui.',
                'precio' => 123,
                'descuento' => 111,
                'imagen' => 'images/img/producto_3.png',
                'visible' => 1,
                'destacar' => 1,
                'recomendar' => 1,
                'status' => 1,
                'created_at' => '2024-08-02 21:33:56',
                'updated_at' => '2024-08-03 00:22:01',
            ],
            [
                'categoria_id' => 2,
                'producto' => 'Placerat sapien felis vitae dui',
                'description' => 'Mauris gravida, nunc quis egestas tempus, quam quam cursus lectus, nec placerat sapien felis vitae dui.',
                'precio' => 123,
                'descuento' => 0,
                'imagen' => 'images/img/producto_4.png',
                'visible' => 1,
                'destacar' => 1,
                'recomendar' => 1,
                'status' => 1,
                'created_at' => '2024-08-02 21:33:56',
                'updated_at' => '2024-08-03 00:22:01',
            ],
            [
                'categoria_id' => 3,
                'producto' => 'Placerat sapien felis vitae dui',
                'description' => 'Mauris gravida, nunc quis egestas tempus, quam quam cursus lectus, nec placerat sapien felis vitae dui.',
                'precio' => 123,
                'descuento' => 0,
                'imagen' => 'images/img/producto_5.png',
                'visible' => 1,
                'destacar' => 1,
                'recomendar' => 1,
                'status' => 1,
                'created_at' => '2024-08-02 21:33:56',
                'updated_at' => '2024-08-03 00:22:01',
            ],

        ]);
    }
}
