<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/blogs',[HomeController::class,'blogs'])->name('blogs');
Route::get('/blogs/{blog}',[HomeController::class,'show_blug'])->name('blog.show');
Route::match(['get','post'],'/contact',[HomeController::class,'contact'])->name('contact');


Route::get('/projects',[HomeController::class,'projects'])->name('projects');



Route::get('/login', function () {
    return redirect(route('filament.admin.auth.login'));
})->name('login');