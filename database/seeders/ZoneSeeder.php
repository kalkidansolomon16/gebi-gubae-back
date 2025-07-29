<?php

namespace Database\Seeders;

use App\Models\Zone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $zones = [
            // Addis Ababa (no zones)
            // Afar Region
            ['region' => 'Afar', 'zone' => 'Awsi Rasu'],
            ['region' => 'Afar', 'zone' => 'Kilbet Rasu'],
            ['region' => 'Afar', 'zone' => 'Gabi Rasu'],
            ['region' => 'Afar', 'zone' => 'Fanti Rasu'],
            ['region' => 'Afar', 'zone' => 'Hari Rasu'],
            ['region' => 'Afar', 'zone' => 'Mahi Rasu'],

            // Amhara Region
            ['region' => 'Amhara', 'zone' => 'Agew Awi'],
            ['region' => 'Amhara', 'zone' => 'East Gojjam'],
            ['region' => 'Amhara', 'zone' => 'West Gojjam'],
            ['region' => 'Amhara', 'zone' => 'North Gondar'],
            ['region' => 'Amhara', 'zone' => 'Central Gondar'],
            ['region' => 'Amhara', 'zone' => 'South Gondar'],
            ['region' => 'Amhara', 'zone' => 'West Gondar'],
            ['region' => 'Amhara', 'zone' => 'North Wollo'],
            ['region' => 'Amhara', 'zone' => 'South Wollo'],
            ['region' => 'Amhara', 'zone' => 'Wag Hemra'],
            ['region' => 'Amhara', 'zone' => 'North Shewa'],
            ['region' => 'Amhara', 'zone' => 'Oromia (Amhara)'],
            ['region' => 'Amhara', 'zone' => 'Bahir Dar Special Zone'],
            ['region' => 'Amhara', 'zone' => 'Wolkait-Tegede-Humera'],

            // Benishangul-Gumuz
            ['region' => 'Benishangul-Gumuz', 'zone' => 'Metekel'],
            ['region' => 'Benishangul-Gumuz', 'zone' => 'Kamashi'],
            ['region' => 'Benishangul-Gumuz', 'zone' => 'Assosa'],

            // Central Ethiopia
            ['region' => 'Central Ethiopia', 'zone' => 'Gurage'],
            ['region' => 'Central Ethiopia', 'zone' => 'East Gurage'],
            ['region' => 'Central Ethiopia', 'zone' => 'Silt’e'],
            ['region' => 'Central Ethiopia', 'zone' => 'Halaba'],
            ['region' => 'Central Ethiopia', 'zone' => 'Hadiya'],
            ['region' => 'Central Ethiopia', 'zone' => 'Kembata Tembaro'],
            ['region' => 'Central Ethiopia', 'zone' => 'Yem'],
            ['region' => 'Central Ethiopia', 'zone' => 'Mareko (Special)'],
            ['region' => 'Central Ethiopia', 'zone' => 'Kebena (Special)'],

            // Dire Dawa (no zones)

            // Gambela
            ['region' => 'Gambela', 'zone' => 'Anywaa'],
            ['region' => 'Gambela', 'zone' => 'Nuer'],
            ['region' => 'Gambela', 'zone' => 'Majang'],

            // Harari (no zones)

            // Oromia
            ['region' => 'Oromia', 'zone' => 'Arsi'],
            ['region' => 'Oromia', 'zone' => 'West Arsi'],
            ['region' => 'Oromia', 'zone' => 'Bale'],
            ['region' => 'Oromia', 'zone' => 'East Bale'],
            ['region' => 'Oromia', 'zone' => 'Borana'],
            ['region' => 'Oromia', 'zone' => 'East Borana'],
            ['region' => 'Oromia', 'zone' => 'East Hararghe'],
            ['region' => 'Oromia', 'zone' => 'West Hararghe'],
            ['region' => 'Oromia', 'zone' => 'East Shewa'],
            ['region' => 'Oromia', 'zone' => 'West Shewa'],
            ['region' => 'Oromia', 'zone' => 'South West Shewa'],
            ['region' => 'Oromia', 'zone' => 'North Shewa'],
            ['region' => 'Oromia', 'zone' => 'Jimma'],
            ['region' => 'Oromia', 'zone' => 'Illubabor'],
            ['region' => 'Oromia', 'zone' => 'East Guji'],
            ['region' => 'Oromia', 'zone' => 'West Guji'],
            ['region' => 'Oromia', 'zone' => 'Horo Guduru Wollega'],
            ['region' => 'Oromia', 'zone' => 'West Wollega'],
            ['region' => 'Oromia', 'zone' => 'East Wollega'],
            ['region' => 'Oromia', 'zone' => 'Kellem Wollega'],
            ['region' => 'Oromia', 'zone' => 'Adama Special Zone'],
            ['region' => 'Oromia', 'zone' => 'Burayu Special Zone'],
            ['region' => 'Oromia', 'zone' => 'Oromia Special Zone Surrounding Finfinne'],

            // Sidama
            ['region' => 'Sidama', 'zone' => 'Central Sidama'],
            ['region' => 'Sidama', 'zone' => 'Eastern Sidama'],
            ['region' => 'Sidama', 'zone' => 'Northern Sidama'],
            ['region' => 'Sidama', 'zone' => 'Southern Sidama'],
            ['region' => 'Sidama', 'zone' => 'Hawassa Special Zone'],

            // Somali
            ['region' => 'Somali', 'zone' => 'Sitti'],
            ['region' => 'Somali', 'zone' => 'Fafan'],
            ['region' => 'Somali', 'zone' => 'Jarar'],
            ['region' => 'Somali', 'zone' => 'Erer'],
            ['region' => 'Somali', 'zone' => 'Nogob'],
            ['region' => 'Somali', 'zone' => 'Dollo'],
            ['region' => 'Somali', 'zone' => 'Korahe'],
            ['region' => 'Somali', 'zone' => 'Shabelle'],
            ['region' => 'Somali', 'zone' => 'Afder'],
            ['region' => 'Somali', 'zone' => 'Liben'],
            ['region' => 'Somali', 'zone' => 'Dhawa'],
            ['region' => 'Somali', 'zone' => 'Jigjiga (Special)'],
            ['region' => 'Somali', 'zone' => 'Degehabur (Special)'],
            ['region' => 'Somali', 'zone' => 'Tog Wajale (Special)'],

            // South Ethiopia
            ['region' => 'South Ethiopia', 'zone' => 'Wolayita'],
            ['region' => 'South Ethiopia', 'zone' => 'Gamo'],
            ['region' => 'South Ethiopia', 'zone' => 'Gofa'],
            ['region' => 'South Ethiopia', 'zone' => 'Gedeo'],
            ['region' => 'South Ethiopia', 'zone' => 'South Omo'],
            ['region' => 'South Ethiopia', 'zone' => 'Ari'],
            ['region' => 'South Ethiopia', 'zone' => 'Konso'],
            ['region' => 'South Ethiopia', 'zone' => 'Burji'],
            ['region' => 'South Ethiopia', 'zone' => 'Amaro (Koore)'],
            ['region' => 'South Ethiopia', 'zone' => 'Ale'],
            ['region' => 'South Ethiopia', 'zone' => 'Basketo'],

            // South West Ethiopia
            ['region' => 'South West Ethiopia', 'zone' => 'Bench Sheko'],
            ['region' => 'South West Ethiopia', 'zone' => 'Dawro'],
            ['region' => 'South West Ethiopia', 'zone' => 'Keffa'],
            ['region' => 'South West Ethiopia', 'zone' => 'Sheka'],
            ['region' => 'South West Ethiopia', 'zone' => 'West Omo'],
            ['region' => 'South West Ethiopia', 'zone' => 'Konta'],

            // Tigray
            ['region' => 'Tigray', 'zone' => 'Central Tigray'],
            ['region' => 'Tigray', 'zone' => 'Eastern Tigray'],
            ['region' => 'Tigray', 'zone' => 'Northwestern Tigray'],
            ['region' => 'Tigray', 'zone' => 'Southeastern Tigray'],
            ['region' => 'Tigray', 'zone' => 'Southern Tigray'],
            ['region' => 'Tigray', 'zone' => 'Mekelle (Special Zone)'],
        ];
        Zone::insert($zones);
    }
}
