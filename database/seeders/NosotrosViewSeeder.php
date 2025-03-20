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
            'description1section' => 'Nullam nec orci dui. Praesent tristique facilisis quam, a egestas lorem consectetur fringilla. Suspendisse cursus erat eget ante auctor, non hendrerit ipsum egestas. Nullam nec orci dui. Praesent tristique facilisis quam, a egestas lorem consectetur fringilla. Suspendisse cursus erat eget ante auctor, non hendrerit ipsum egestas.',
            'title2section' => 'La historia de nuestro nacimiento',
            'description2section' => 'Pellentesque accumsan mauris tincidunt odio elementum imperdiet.',

            'description3section' => '<p>Nam id eleifend ligula. Nunc ut lobortis nulla, ac congue justo. Nulla tempor varius quam. In lacus elit, convallis vitae orci vitae, ultrices accumsan diam. Etiam nec risus quis velit varius lobortis. Curabitur semper auctor posuere. In elementum placerat quam. Suspendisse mollis luctus suscipit.</p>
            <p>Integer aliquet mi ex, in iaculis ligula interdum a. Nullam sed ipsum sit amet massa bibendum viverra. Pellentesque accumsan mauris tincidunt odio elementum imperdiet. Nam fringilla scelerisque ipsum non condimentum. Aenean ornare dui sed magna sodales lobortis. Vestibulum porttitor augue vel arcu commodo, sed vulputate turpis fermentum. Nunc nec purus eu purus congue tincidunt in id quam.</p>
            <p>Curabitur sit amet venenatis felis. Nunc elementum pulvinar sapien, a hendrerit nibh ullamcorper ullamcorper. Nunc sit amet aliquet nunc. Maecenas nec finibus orci. In sodales venenatis dictum. Quisque sit amet ipsum turpis. Nam lobortis justo at magna volutpat, pellentesque suscipit eros commodo. In hac habitasse platea dictumst. Etiam commodo tellus et commodo dapibus.</p>',
            
            'description4section' => '<p>Nam id eleifend ligula. Nunc ut lobortis nulla, ac congue justo. Nulla tempor varius quam. In lacus elit, convallis vitae orci vitae, ultrices accumsan diam. Etiam nec risus quis velit varius lobortis. Curabitur semper auctor posuere. In elementum placerat quam. Suspendisse mollis luctus suscipit.</p>
            <p>Integer aliquet mi ex, in iaculis ligula interdum a. Nullam sed ipsum sit amet massa bibendum viverra. Pellentesque accumsan mauris tincidunt odio elementum imperdiet. Nam fringilla scelerisque ipsum non condimentum. Aenean ornare dui sed magna sodales lobortis. Vestibulum porttitor augue vel arcu commodo, sed vulputate turpis fermentum. Nunc nec purus eu purus congue tincidunt in id quam.</p>
            <p>Curabitur sit amet venenatis felis. Nunc elementum pulvinar sapien, a hendrerit nibh ullamcorper ullamcorper. Nunc sit amet aliquet nunc. Maecenas nec finibus orci. In sodales venenatis dictum. Quisque sit amet ipsum turpis. Nam lobortis justo at magna volutpat, pellentesque suscipit eros commodo. In hac habitasse platea dictumst. Etiam commodo tellus et commodo dapibus.</p>',
            
            'title4section' => 'Suscríbete a nuestro blog',
            'description4section' => 'Sea el primero en conocer los lanzamientos y las novedades y perspectivas de la industria.', 
            'footer4section' => 'Nos preocupamos por tus datos en nuestra política de privacidad', 
        ]);
    }
}
