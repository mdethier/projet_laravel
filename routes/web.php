<?php

use Illuminate\Support\Facades\Route;
use App\Models\Language;
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

           if ($language ['is_active'] == true)
           return view ('app_active');

           else 
            return view ('app_inactive');
         
        });
    });
    
    





