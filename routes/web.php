<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/', HomeController::class)->name('home');

//Static views
Route::view('quienes-somos', 'aboutUs')->name('aboutUs');
Route::view('nuestra-filosofia', 'ourPhilosophy')->name('ourPhilosophy');

//News
Route::get('/noticias/crear', [NewsController::class, 'create'] )->name('news.create');
Route::post('/noticias/crear', [NewsController::class, 'store'] )->name('news.store');
Route::get('/noticias/{id}', [NewsController::class, 'show'] )->name('news.show');
Route::get('/noticias/{id}/editar', [NewsController::class, 'edit'] )->name('news.edit');
Route::put('/noticias/editar', [NewsController::class, 'update'] )->name('news.update');


//Activities
// Route::get('/actividades', [ActivityController::class, 'index'] )->name('activities.index');
Route::get('/actividades/crear', [ActivityController::class, 'create'] )->name('activities.create');
Route::post('/actividades', [ActivityController::class, 'store'] )->name('activities.store');
Route::get('/actividades/{activity}', [ActivityController::class, 'show'] )->name('activities.show');
Route::get('/actividades/{activities/editar', [ActivityController::class, 'edit'] )->name('activities.edit');
Route::put('/actividades/{activities}', [ActivityController::class, 'update'] )->name('activities.update');



//Admin
Route::view('/admin' , 'admin');




// Delete the routes test

//This is for generate storage:link in production
Route::get('Storage:link', function () {
    Artisan::call('storage:link');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
