<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Language;

class LanguagesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Language::create([
            'title' => 'titre fr',
            'meta_description' => 'titre1',
            'meta_keywords' => '#fr',
            'iso_code' => 'fr',
            'is_active' => 'false',
            'local_code' => 'fr_fr',
            'www_link_title' => 'titre1',
            'www_link_text' => 'titre1',
            'language_name' => 'french',
            'og_title' => 'titre1',
            'og_type' => 'titre1',
            'og_image' => 'titre1',
            'og_description' => 'titre1',
            'tw_title' => 'titre1',
            'tw_description' => 'titre1',
            'tw_type' => 'titre1',
            'tw_image' => 'titre1',


        ]);
        Language::create([
            'title' => 'titre2',
            'meta_description' => 'titre2',
            'meta_keywords' => 'titre2',
            'iso_code' => 'en',
            'is_active' => 'false',
            'local_code' => 'en_en',
            'www_link_title' => '',
            'www_link_text' => 'titre2',
            'language_name' => 'english',
            'og_title' => 'titre2',
            'og_type' => 'titre2',
            'og_image' => 'titre2',
            'og_description' => 'titre2',
            'tw_title' => 'titre2',
            'tw_description' => 'titre2',
            'tw_type' => 'titre2',
            'tw_image' => 'titre2',
        ]);


        //
    }
}
