<?php

use Illuminate\Support\Facades\Route;

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
    $name = 'PipppFranco';
    return view('home', compact('name'));
});

Route::get('about', function (){
    $name = 'PipppFranco';
    return view('about', compact('name'));
});

Route::get('services', function (){
    return view('services');
});

Route::get('contacts', function (){
    return view('contacts');
});