<?php

namespace Database\Seeders;

use App\Models\NosotrosView;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NosotrosViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NosotrosView::updateOrCreate([
            'id' => 1
        ],[
            'title1section' => 'Todo lo que debes saber sobre nosotros',
            'description1section' => 'Nullam sed ipsum sit amet massa bibendum viverra. Pellentesque accumsan mauris tincidunt odio elementum imperdiet. Nam fringilla scelerisque ipsum non condimentum. Aenean ornare dui sed magna sodales lobortis. Vestibulum porttitor augue vel arcu commodo, sed vulputate turpis fermentum.',
            
            'title2section' => 'La historia de nuestro nacimiento',
            'description2section' => 'Pellentesque accumsan mauris tincidunt odio elementum imperdiet.',

            'description3section' => '<p>Nullam sed ipsum sit amet massa bibendum viverra. Pellentesque accumsan mauris tincidunt odio elementum imperdiet. Nam fringilla scelerisque ipsum non condimentum. Aenean ornare dui sed magna sodales lobortis. Vestibulum porttitor augue vel arcu commodo, sed vulputate turpis fermentum.</p>',
            'description4section' => '<p>Nullam sed ipsum sit amet massa bibendum viverra. Pellentesque accumsan mauris tincidunt odio elementum imperdiet. Nam fringilla scelerisque ipsum non condimentum. Aenean ornare dui sed magna sodales lobortis. Vestibulum porttitor augue vel arcu commodo, sed vulputate turpis fermentum.</p>',

            'title5section' => 'Suscríbete a nuestro blog',
            'description5section' => 'Sea el primero en conocer los lanzamientos y las novedades y perspectivas de la industria.', 
            'footer5section' => 'Nos preocupamos por tus datos en nuestra política de privacidad', 

        ]);
    }
}
