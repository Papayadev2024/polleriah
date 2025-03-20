<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StrengthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('strengths')->insert([
           
            [   
                
                'titulo' => 'Sabor Peruano',
                'descripcion' => 'Recetas tradicionales peruanas, frescas y deliciosas, directo a tu puerta.',
                'status' => 1,
                'created_at' => '2024-08-02 21:33:46',
                'updated_at' => '2024-08-02 23:57:40',
            ],
            [   
               
                'titulo' => 'Comodidad al Pedir',
                'descripcion' => 'Pedidos fáciles y entrega rápida para disfrutar sin salir de casa.',
                'status' => 1,
                'created_at' => '2024-08-02 21:33:56',
                'updated_at' => '2024-08-03 00:22:01',
            ],
            [
                
                'titulo' => 'Atención Familiar',
                'descripcion' => 'Pedidos fáciles y entrega rápida para disfrutar sin salir de casa.',
                'status' => 1,
                'created_at' => '2024-08-02 21:33:56',
                'updated_at' => '2024-08-03 00:22:01',
            ],
            [
               
                'titulo' => 'Escríbenos a nuestro Whatsapp',
                'descripcion' => 'y escoge tu plato favorito',
                'status' => 1,
                'created_at' => '2024-08-02 21:33:56',
                'updated_at' => '2024-08-03 00:22:01',
            ],

        ]);
    }
}
