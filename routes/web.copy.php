<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;

use App\Http\Controllers\BookController;
Route::resource('books', BookController::class);
//名前つきルートname()

//ルート情報を見るコマンド
//php artisan route:list

//DB保存はPOST
Route::get('/contact_form',[ContactFormController::class, 'index'])->name('contact.index');
Route::get('/contact_form/{id}',[ContactFormController::class, 'show'])->name('contact.show');
Route::get('/contact_form/{id}/edit',[ContactFormController::class, 'edit'])->name('contact.edit');
Route::post('/contact_form/{id}',[ContactFormController::class, 'update'])->name('contact.update');
Route::post('/contact_form/{id}/delete',[ContactFormController::class, 'delete'])->name('contact.delete');

Route::post('/contact_form/confirm',[ContactFormController::class, 'confirm'])->name('contact.confirm');
Route::post('/contact_form/complete',[ContactFormController::class, 'store'])->name('contact.store');
//urlと表示するviewなりcontroller
//view()Laravelが作っている関数(ヘルパ関数)

Route::get('/', function () {
    return view('welcome');
});

//第一引数がurl,
Route::get('/hello', function () {
    return view('hello');
});

Route::get('/blade_variable', function () {
    return view('blade_variable');
});



