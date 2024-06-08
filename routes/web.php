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
    return view('home');
})->name("home");

Route::get('/uomo', function () {
    $products = config("db.products");
    // Per debuggare uso dd
    // dd($products);
    return view('uomo', compact('products'));
    
})->name("uomo");

Route::get('/donna', function () {
    $products = config("db.products");
    return view('donna', compact('products'));
})->name("donna");

Route::get('/bambino', function () {
    $products = config("db.products");
    return view('bambino', compact('products'));
})->name("bambino");

Route::get('/log', function () {
    return view('log');
})->name("log");

Route::get('/register', function () {
    return view('register');
})->name("register");

Route::get('/saldi', function () {
    $products = config("db.products");
    return view('saldi', compact('products'));
})->name("saldi");