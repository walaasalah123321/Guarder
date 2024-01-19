<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(["prefix"=>LaravelLocalization::setLocale()."/Guarder","as"=>"Guarder.",'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]],function(){
    Route::get('/', function () {
        return view("Guarder.index");
    })->name("index");
    Route::get('/about', function () {
        return view("Guarder.Pages.About");
    })->name("about");
    Route::get('/service', function () {
        return view("Guarder.Pages.service");
    })->name("service");
    Route::get('/guards', function () {
        return view("Guarder.Pages.guards");
    })->name("guards");
    Route::get('/contact', function () {
        return view("Guarder.Pages.contact");
    })->name("contact");
});