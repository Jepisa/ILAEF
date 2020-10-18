<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/', HomeController::class);

//Static views
Route::view('quienes-somos', 'aboutUs');
Route::view('nuestra-mision', 'ourMission');

//News
Route::get('/noticias/crear', [NewsController::class, 'create'] );
Route::post('/noticias/crear', [NewsController::class, 'store'] );
Route::get('/noticias/{id}', [NewsController::class, 'show'] );
Route::get('/noticias/Editar/{id}', [NewsController::class, 'edit'] );
Route::put('/noticias/Editar', [NewsController::class, 'update'] );

//Activities
Route::get('/actividades', [ActivityController::class, 'index'] );
Route::get('/actividades/crear', [ActivityController::class, 'create'] );
Route::post('/actividades/crear', [ActivityController::class, 'store'] );
Route::get('/actividades/{activity}', [ActivityController::class, 'show'] );
Route::get('/actividades/Editar/{id}', [ActivityController::class, 'edit'] );
Route::put('/actividadesEditar', [ActivityController::class, 'update'] );




// Delete the routes test

//This is for generate storage:link in production
Route::get('Storage:link', function () {
    Artisan::call('storage:link');
});
