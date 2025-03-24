<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\General;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        General::create([
            'address' => 'Av. Aramburu 1506',
            'inside' => 'Oficina 404 - Piso 4',
            'district' => 'Miraflores',
            'schedule' => "De Lunes a Viernes de 9:00am a 6:00pm y Sábados de 9:00am a 1:00pm",
            'city' => 'Lima',
            'country' => 'Perú',
            'cellphone' => '01-6556920' ,
            'office_phone' => '01-6556922' ,
            'email' => 'ventas@hpi.com.pe',
            'facebook' => 'https://www.facebook.com/',
            'instagram' => 'https://www.instagram.com/',
            'youtube' => 'https://www.youtube.com/',
            'twitter' => '',
            'tiktok' => 'https://www.tiktok.com/',
            'linkedin' => 'https://www.linkedin.com/',
            'whatsapp' => '51992262598' ,
            'form_email' => 'ventas@huaillys.com',
            'business_hours' => 'horas',
            'mensaje_whatsapp' => 'Hola estamos atentos a lo que ud desee',
            'aboutus' => 'Mauris gravida, nunc quis egestas tempus, quam quam cursus lectus, nec placerat sapien felis vitae dui',
        ]);
    }
}
