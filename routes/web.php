<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HiyokoUserController;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\Others\OtherProfileController;

Route::get('/', [TweetController::class, 'index'])->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::resource('hiyokousers', HiyokoUserController::class);
Route::resource('tweets', TweetController::class);
