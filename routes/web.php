<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PapersController;
use App\Http\Controllers\TeachersController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');

Route::get('/teachers', [TeachersController::class, 'index'])->name('teachers');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/achievement', [AchievementController::class, 'index'])->name('achievement');
Route::get('/achievement/{id}', [AchievementController::class, 'show'])->name('achievement.show');

Route::get('/papers', [PapersController::class, 'index'])->name('papers');
Route::get('/papers/{paper}', [PapersController::class, 'show'])->name('papers.show');
