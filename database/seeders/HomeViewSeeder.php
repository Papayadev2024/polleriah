<?php

namespace Database\Seeders;

use App\Models\HomeView;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeView::updateOrCreate([
            'id' => 1
        ],[
            'title1section' => 'Las promos del mes',
            'description1section' => 'Mauris gravida, nunc quis egestas tempus, quam quam cursus lectus, nec placerat sapien felis vitae dui.',
            'title2section' => 'Nuestra carta',
            'title3section' => 'Nuestros recomendados',
            'title4section' => 'Suscríbete a nuestro blog',
            'description4section' => 'Sea el primero en conocer los lanzamientos y las novedades y perspectivas de la industria.', 
            'footer4section' => 'Nos preocupamos por tus datos en nuestra política de privacidad', 
            'title5section' => 'conversa con nuestro equipo', 
            'description5section' => 'Mauris gravida, nunc quis egestas tempus, quam quam cursus lectus, nec placerat sapien felis vitae dui.', 
        ]);
    }
}
