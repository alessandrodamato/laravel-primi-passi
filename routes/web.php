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
    $data = ['title' => 'Home Page', 'argument' => 'laravel'];
    return view('home', $data);
})->name('home');

Route::get('/chi-siamo', function () {
    $title = 'About';
    $name = 'Alessandro';
    $surname = 'D\'Amato';
    return view('about', compact('title', 'name', 'surname'));
})->name('about');

Route::get('/prodotti', function () {
    $data = ['title' => 'Prodotti', 'products' => ['Mele', 'Pere', 'Banane', 'Kiwi']];
    return view('products', $data);
})->name('products');
