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
            'is_active' => true,
            'local_code' => 'fr_fr',
            'www_link_title' => 'fr link',
            'www_link_text' => 'Français',
            'language_name' => 'français',
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
            'meta_keywords' => '#en',
            'iso_code' => 'en',
            'is_active' => true,
            'local_code' => 'en_en',
            'www_link_title' => 'en link',
            'www_link_text' => 'English',
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

        Language::create([
            'title' => 'titre de',
            'meta_description' => 'titre3',
            'meta_keywords' => '#de',
            'iso_code' => 'de',
            'is_active' => false,
            'local_code' => 'de_de',
            'www_link_title' => 'de link',
            'www_link_text' => 'Deutsch',
            'language_name' => 'deutsch',
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
            'meta_keywords' => '#nl',
            'iso_code' => 'nl',
            'is_active' => false,
            'local_code' => 'nl_nl',
            'www_link_title' => 'nl link',
            'www_link_text' => 'Dutch',
            'language_name' => 'dutch',
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
            'meta_keywords' => '#it',
            'iso_code' => 'it',
            'is_active' => false,
            'local_code' => 'it_it',
            'www_link_title' => 'it link',
            'www_link_text' => 'Italiano',
            'language_name' => 'italiano',
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
            'meta_keywords' => '#es',
            'iso_code' => 'es',
            'is_active' => false,
            'local_code' => 'es_es',
            'www_link_title' => 'es link',
            'www_link_text' => 'Español',
            'language_name' => 'español',
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
            'meta_keywords' => '#pt',
            'iso_code' => 'pt',
            'is_active' => false,
            'local_code' => 'pt_pt',
            'www_link_title' => 'pt link',
            'www_link_text' => 'Português',
            'language_name' => 'português',
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
