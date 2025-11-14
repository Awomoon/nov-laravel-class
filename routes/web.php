<?php
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
// Route::get('/', function () {
//     return view('welcome');
// });


// Controller Routes
Route::get('/', [PageController::class, 'home']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/services', [PageController::class, 'services']);
Route::resource('/posts', PostController::class);
Route::get('/create', [PostController::class, 'create']);
Route::get('/edit', [PostController::class, 'update']);


// Route
Route::get('/about', function(){
  return view('about');
});

