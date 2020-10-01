<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('home');
});

// Route::get('/', [HomeController::class, 'index']); //La mejor forma de buscar un controlador. Ahora el '@' que se ponia no está disponible, pero se le podría poner en el archivo 'RouteServiceProvider.php' esto ->namespace('App\\Http\\Controllers') después de Route::middleware('web') y antes de  ->group(base_path('routes/web.php'));

Route::get('Storage:link', function ($id) {
    Artisan::call('storage:link');
});