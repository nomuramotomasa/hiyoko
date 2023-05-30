<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HiyokoUserController;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\Others\OtherProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{user_id}', [OtherProfileController::class, 'index']);
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::resource('hiyokousers', HiyokoUserController::class);
Route::resource('tweets', TweetController::class);
