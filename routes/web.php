<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\Others\OtherProfileController;
use App\Http\Controllers\Others\OthersController;
use App\Http\Controllers\SearchController;

Route::get('/', [TweetController::class, 'index'])->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/user_search', [SearchController::class, 'index'])->name('search.index');

    Route::get('/other/{user_id}', [OtherProfileController::class, 'show_profile'])->name('other.show');

    Route::get('/{user_id}/follow', [OthersController::class, 'follow'])->name('other.follow');
    Route::get('/{user_id}/follower', [OthersController::class, 'follower'])->name('other.follower');

    Route::resource('tweets', TweetController::class);
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
});

