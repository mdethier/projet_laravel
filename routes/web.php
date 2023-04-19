<?php

use Illuminate\Support\Facades\Route;
use App\Models\Language;
use Illuminate\Support\Facades\App;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::domain('www.projet-laravel')->group(function () {
    Route::get('/', function () {
        return view('accueil',['languages' => Language::all(), 'titre' => "Des langues"]);
    })->name('langues');
       
    });

    Route::domain('{iso_code}.projet-laravel')->group(function () {
        Route::get('/', function ( string $iso_code) {
           $language = Language::where('iso_code', '=', $iso_code)->first();
           $allLanguages = Language::where('iso_code', '!=', $iso_code)->get('iso_code');
           App::setlocale($iso_code);
        //    dd($allLanguages);


           if ($language['is_active'] == true) {
           return view('app_active',['language' => $language, 'allLanguages' => $allLanguages]);
           }
           else {
            return view('app_inactive',['language' => $language, 'allLanguages' => $allLanguages]);
           }

           
        });
        
    });
   
    
    





