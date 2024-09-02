<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ContactFormController;
use UniSharp\LaravelFilemanager\Lfm;
use Illuminate\Support\Facades\Auth;

Auth::routes();

// Перенаправление на язык по умолчанию
Route::get('/', function () {
    return redirect('ru');
});

Route::group(['prefix' => '{locale}'], function () {
    Route::get('/', [ProductController::class, 'publicIndex'])->name('home');
    Route::post('/contacts', [ContactFormController::class, 'submit'])->name('contacts.submit');
});

// Группа маршрутов для админки с middleware auth и is_admin
Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::resource('admin/products', ProductController::class);
    Route::get('/admin/submissions', [ContactFormController::class, 'index'])->name('admin.submissions');
    // Route::get('admin/{id}/edit', [HomeController::class, 'firstBlockEdit'])->name('firstblock.edit');
    // Route::put('admins/{id}', [HomeController::class, 'updateFirstBlock'])->name('firstblock.update');

    // Маршруты Laravel File Manager
    Route::group(['prefix' => 'laravel-filemanager'], function () {
        Lfm::routes();
    });
});
