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
            'is_active' => false,
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
            'title' => 'titre en',
            'meta_description' => 'titre2',
            'meta_keywords' => 'titre2',
            'iso_code' => 'en',
            'is_active' => false,
            'local_code' => 'en_en',
            'www_link_title' => 'titre2',
            'www_link_text' => 'titre2',
            'language_name' => 'anglais',
            'og_title' => 'titre2',
            'og_type' => 'titre2',
            'og_image' => 'titre2',
            'og_description' => 'titre2',
            'tw_title' => 'titre2',
            'tw_description' => 'titre2',
            'tw_type' => 'titre2',
            'tw_image' => 'titre2',
        ]);

        Language::create([
            'title' => 'titre de',
            'meta_description' => 'titre3',
            'meta_keywords' => 'titre3',
            'iso_code' => 'de',
            'is_active' => false,
            'local_code' => 'de_de',
            'www_link_title' => 'titre3',
            'www_link_text' => 'titre3',
            'language_name' => 'allemand',
            'og_title' => 'titre3',
            'og_type' => 'titre3',
            'og_image' => 'titre3',
            'og_description' => 'titre3',
            'tw_title' => 'titre3',
            'tw_description' => 'titre3',
            'tw_type' => 'titre3',
            'tw_image' => 'titre3',
        ]);

        Language::create([
            'title' => 'titre nl',
            'meta_description' => 'titre4',
            'meta_keywords' => 'titre4',
            'iso_code' => 'nl',
            'is_active' => false,
            'local_code' => 'nl_nl',
            'www_link_title' => 'titre4',
            'www_link_text' => 'titre4',
            'language_name' => 'néerlandais',
            'og_title' => 'titre4',
            'og_type' => 'titre4',
            'og_image' => 'titre4',
            'og_description' => 'titre4',
            'tw_title' => 'titre4',
            'tw_description' => 'titre4',
            'tw_type' => 'titre4',
            'tw_image' => 'titre4',
        ]);

        Language::create([
            'title' => 'titre it',
            'meta_description' => 'titre5',
            'meta_keywords' => 'titre5',
            'iso_code' => 'it',
            'is_active' => false,
            'local_code' => 'it_it',
            'www_link_title' => 'titre5',
            'www_link_text' => 'titre5',
            'language_name' => 'italien',
            'og_title' => 'titre5',
            'og_type' => 'titre5',
            'og_image' => 'titre5',
            'og_description' => 'titre5',
            'tw_title' => 'titre5',
            'tw_description' => 'titre5',
            'tw_type' => 'titre5',
            'tw_image' => 'titre5',
        ]);

        Language::create([
            'title' => 'titre es',
            'meta_description' => 'titre6',
            'meta_keywords' => 'titre6',
            'iso_code' => 'es',
            'is_active' => false,
            'local_code' => 'es_es',
            'www_link_title' => 'titre6',
            'www_link_text' => 'titre6',
            'language_name' => 'espagnol',
            'og_title' => 'titre6',
            'og_type' => 'titre6',
            'og_image' => 'titre6',
            'og_description' => 'titre6',
            'tw_title' => 'titre6',
            'tw_description' => 'titre6',
            'tw_type' => 'titre6',
            'tw_image' => 'titre6',
        ]);

        Language::create([
            'title' => 'titre pt',
            'meta_description' => 'titre7',
            'meta_keywords' => 'titre7',
            'iso_code' => 'pt',
            'is_active' => false,
            'local_code' => 'pt_pt',
            'www_link_title' => 'titre7',
            'www_link_text' => 'titre7',
            'language_name' => 'portugais',
            'og_title' => 'titre7',
            'og_type' => 'titre7',
            'og_image' => 'titre7',
            'og_description' => 'titre7',
            'tw_title' => 'titre7',
            'tw_description' => 'titre7',
            'tw_type' => 'titre7',
            'tw_image' => 'titre7',
        ]);



        //
    }
}
