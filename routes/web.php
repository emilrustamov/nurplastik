<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Admin\ProductController;

Route::get('/', function () {
    return redirect('ru'); // Укажите язык по умолчанию
});

Route::group(['prefix' => '{locale}'], function () {
    Route::get('/', function () {
        return view('welcome');
    });
});

Route::resource('admin/products', ProductController::class);

