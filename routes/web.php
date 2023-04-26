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

Route::domain('www.' . env('APP_DOMAIN'))->group(function () {
    Route::get('/', function () {
        return view('accueil', ['languages' => Language::all(), 'titre' => "Des langues"]);
    })->name('langues');
});

Route::domain('manager.' . env('APP_DOMAIN'))->group(function () {
    Route::get('/', function () {
      return view('manager');  
    });
    
});

Route::domain('{iso_code}.' . env('APP_DOMAIN'))->group(function () {
    Route::get('/', function (string $iso_code) {
        $language = Language::where('iso_code', '=', $iso_code)->first();

        App::setlocale($iso_code);



        if ($language['is_active'] == true) {
            return view('app_active', ['language' => $language]);
        } else {
            return view('app_inactive', ['language' => $language]);
        }
    });
});


