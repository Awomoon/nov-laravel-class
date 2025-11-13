<?php
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Controller Routes
Route::get('/home', [PageController::class, 'home']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/services', [PageController::class, 'services']);


// Route
Route::get('/about', function(){
  return view('about');
});

