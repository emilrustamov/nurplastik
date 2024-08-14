<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Admin\ProductController;
use UniSharp\LaravelFilemanager\Lfm;

Auth::routes();

Route::get('/', function () {
    return redirect('ru'); // Укажите язык по умолчанию
});

Route::group(['prefix' => '{locale}'], function () {
    Route::get('/', function () {
        return view('welcome');
    });
});

Route::resource('admin/products', ProductController::class);

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::resource('admin/products', ProductController::class);
    // другие маршруты админки
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});





