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

// Página principal - Servicios generales
Route::get('/', function () {
    return view('home');
})->name('home');

// Página del sistema de facturación electrónica
Route::get('/factura-electronica', function () {
    return view('factura-electronica');
})->name('factura-electronica');

// Página Acerca de Nosotros
Route::get('/acerca-de', function () {
    return view('acerca-de');
})->name('acerca-de');

// Cambiar idioma
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'es'])) {
        session(['locale' => $locale]);
        app()->setLocale($locale);
    }
    return redirect()->back();
})->name('lang.switch');
